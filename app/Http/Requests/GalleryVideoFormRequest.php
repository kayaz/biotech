<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use App\Rules\ValidYoutubeUrl;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class GalleryVideoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'file_alt' => 'required|string|max:190',
            'url' => ['required', new ValidYoutubeUrl],
            'gallery_id' => 'required|integer'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ], 400));

    }

    public function messages()
    {
        return [
            'file_alt.required' => 'Wpisz <b>tytuł</b> filmu.',
            'file_alt.max' => '<b>Tytuł</b> filmu nie może być dłuższy niż 190 znaków.',
            'url.required' => 'Wpisz <b>adres url</b> filmu Youtube.'
        ];
    }
}
