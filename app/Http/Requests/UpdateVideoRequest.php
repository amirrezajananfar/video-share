<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateVideoRequest extends StoreVideoRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $videoUpdateRules = [
            'slug' => ['required', 'string', Rule::unique('videos')->ignore($this->video), 'alpha_dash']
        ];
        return array_merge(parent::rules(), $videoUpdateRules);
    }
}
