<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'bail|required|string|max:255',
            'story' => 'bail|required|string|max:10000',
            'category_id' => 'bail|required|exists:categories,id', // Ensure category exists in DB
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'image_url' => 'nullable|url|max:2048',
            // 'audio' => 'nullable|mimes:mpga,wav|max:20000',
            'audio'   => 'nullable|mimes:mp3,wav,ogg|max:6144', // Accepts MP3, WAV, OGG (Max: 6MB)
            'audio_url' => 'nullable|url|max:2048'
            
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages()
    {
        return [
            'required' => ' :attribute filed is required.',
            'string' => ' :attribute must be a string.',
            'max' => ' The lenght of :attribute is more than 125 characters.',
            'size' => 'The :attribute must be exactly :size.',
        ];
    }

    // public function attributes()
    // {
    //     return [
    //         'story' => "The story",
    //         'title' => "The title",
    //     ];
    // }
}
