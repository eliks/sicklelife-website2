<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDashBlogRequest extends FormRequest
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
            'title' => 'required|min:3|max:128',
            'brief' => 'required|min:3|max:1024',
            'headline-image' => 'integer|min:1',
            'category' => 'required|integer', 
            'authors' => 'required|array', 
            'authors.*' => 'required|integer|min:1', 
            'listing_date' => 'required|string|min:6|max:10', 
            'body' => 'required|string|min:6',
        ];
    }
}