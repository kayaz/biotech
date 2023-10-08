<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;

//CMS
use App\Http\Requests\GalleryVideoFormRequest;
use App\Services\ImageService;
use App\Models\Image;

class VideoController extends Controller
{
    private ImageService $service;

    public function __construct(ImageService $service)
    {
        $this->service = $service;
    }

    public function store(GalleryVideoFormRequest $request)
    {
        $videoId = $this->getVideoIdFromUrl($request->get('url'));

        if (!$videoId) {
            return response()->json(['error' => 'Invalid YouTube URL'], 400);
        }

        $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";
        $response = Http::get($thumbnailUrl);
        $imageContent = $response->body();

        $image = Image::create($request->validated());

        $this->service->upload(
            UploadedFile::fake()->createWithContent('thumbnail.jpg', $imageContent),
            $image, // Your model instance here
            true // Set to true if you want to delete existing thumbnails
        );

        return response()->json(['success' => true]);
    }

    private function getVideoIdFromUrl($url)
    {
        $videoId = false;

        $pattern = '/^(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu.be\/)([\w-]+)/';
        preg_match($pattern, $url, $matches);

        if (count($matches) === 2) {
            $videoId = $matches[1];
        }

        return $videoId;
    }
}
