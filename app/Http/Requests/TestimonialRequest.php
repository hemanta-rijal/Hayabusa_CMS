<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
        return [
            "name_en" => "required",
            "testimonial_en" => "required",
            "tagline_en" => "required",
            "name_jp" => "required",
            "testimonial_jp" => "required",
            "tagline_jp" => "required",
            "type" => "required",
            'image' => $this->getMethod() == 'POST' ? 'required|max:3000|mimes:jpg,jpeg,png|exclude' : 'nullable|max:3000|mimes:jpg,jpeg,png|exclude',
        ];
    }
}
