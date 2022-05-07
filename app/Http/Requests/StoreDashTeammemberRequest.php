<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDashTeammemberRequest extends FormRequest
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
            'name' => 'required|min:6|max:64',
            'bio' => 'required|string|min:8|max:2096',
            'role' => 'required|string|min:5|max:64',
            'photo' => 'required|integer', 
            'display_as_team_member' => 'required|boolean', 
            'sm_facebook' => 'nullable|string|min:6|max:128', 
            'sm_twitter' => 'nullable|string|min:6|max:128', 
            'sm_linkedin' => 'nullable|string|min:6|max:128', 
            'sm_instagram' => 'nullable|string|min:6|max:128', 
        ];
    }
}
