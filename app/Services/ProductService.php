<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

//CMS
use App\Models\Article;

class ProductService
{
    public function upload(string $title, UploadedFile $file, object $model, bool $delete = false)
    {

        if ($delete) {
            if (File::isFile(public_path('uploads/products/' . $model->file))) {
                File::delete(public_path('uploads/products/' . $model->file));
            }
            if (File::isFile(public_path('uploads/products/thumbs/' . $model->file))) {
                File::delete(public_path('uploads/products/thumbs/' . $model->file));
            }

            // WebP
            if (File::isFile(public_path('uploads/products/webp/' . $model->file_webp))) {
                File::delete(public_path('uploads/products/webp/' . $model->file_webp));
            }
            if (File::isFile(public_path('uploads/products/thumbs/webp/' . $model->file_webp))) {
                File::delete(public_path('uploads/products/thumbs/webp/' . $model->file_webp));
            }
        }

        $name = date('His').'_'.Str::slug($title).'.' . $file->getClientOriginalExtension();
        $name_webp = date('His').'_'.Str::slug($title).'.webp';

        $file->storeAs('products', $name, 'public_uploads');

        $file_path = public_path('uploads/products/' . $name);
        $file_thumb_path = public_path('uploads/products/thumbs/' . $name);

        Image::make($file_path)->fit(config('images.article.big_width'), config('images.article.big_height'))->save($file_path);
        Image::make($file_path)->fit(600, 400)->save($file_thumb_path);

        // WebP
        $file_path_webp = public_path('uploads/products/webp/' . $name_webp);
        $file_thumb_path_webp = public_path('uploads/products/thumbs/webp/' . $name_webp);

        Image::make($file_path)->encode('webp', 75)->save($file_path_webp);
        Image::make($file_thumb_path)->encode('webp', 75)->save($file_thumb_path_webp);

        $model->update([
            'file' => $name,
            'file_webp' => $name_webp
        ]);
    }
}
