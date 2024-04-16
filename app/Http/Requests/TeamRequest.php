<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'name_en' => 'required',
            'name_jp' => 'required',
            'designation_en' => 'required',
            'designation_jp' => 'required',
            'image' => $this->getMethod() == 'POST' ? 'required|max:3000|mimes:jpg,jpeg,png|exclude' : 'nullable|max:3000|mimes:jpg,jpeg,png|exclude'
        ];
    }
}
