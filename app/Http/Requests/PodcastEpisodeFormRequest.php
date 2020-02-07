<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PodcastEpisodeFormRequest extends FormRequest
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
        return [
            'number' => 'required|numeric|max:99999',
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'content_text' => 'required|string|max:3000',
            'duration' => 'required|max:99999|string'
        ];
    }
}
