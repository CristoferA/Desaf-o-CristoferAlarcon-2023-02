<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'artist' => [
                'required',
                'string',
                'max:200'
            ],
            'title_song' => [
                'required',
                'string',
                'max:200'
            ],
            'title_album' => [
                'required',
                'string',
                'max:200'
            ],
            'year' => [
                'required',
                'integer'
            ],
            'genre' => [
                'required',
                'string',
                'max:200'
            ],
            'duration' => [
                'required',
                'string'
            ],
            'image' => [
                'nullable',
                'mimes:jpg,jpg,png'
            ],
            'song' => [
                'nullable',
                'max:9000',
                'mimes:mp3,mp4'
            ],
            'image_artist' => [
                'nullable',
                'mimes:jpg,jpg,png'
            ],
            'image_concert' => [
                'nullable',
                'mimes:jpg,jpg,png'
            ],
            'navbar_status' => [
                'nullable',
            ],
            'status' => [
                'nullable',
            ],
        ];
        return $rules;
    }
}
