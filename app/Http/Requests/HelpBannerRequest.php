<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelpBannerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $imageRule = $this->has('id')
            ? 'nullable|max:2000|mimes:jpg,jpeg,png|exclude'
            : 'required|max:2000|mimes:jpg,jpeg,png|exclude';
        return [
            "title_en" => "required",
            "title_jp" => "required",
            "button_text_en" => "required",
            "button_text_jp" => "required",
            "sub_title_en" => "required",
            "sub_title_jp" => "required",
            "link" => "required|url",
            "background_image" => $imageRule,
            "image" => $imageRule,
        ];
    }
}
