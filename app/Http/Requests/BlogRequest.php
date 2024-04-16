<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title_en' => 'required',
            'title_jp' => 'required',
            'description_en' => 'required',
            'description_jp' => 'required',
            'thumbnail' => $this->getMethod() == 'POST' ? 'required|max:3000|mimes:jpg,jpeg,png|exclude' : 'nullable|max:3000|mimes:jpg,jpeg,png|exclude',
            'images.*' => 'nullable|max:2000|mimes:jpg,jpeg,png|exclude',
        ];
    }
}