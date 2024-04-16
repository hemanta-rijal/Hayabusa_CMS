<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubCourseRequest extends FormRequest
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
            'course_id' => ['required', Rule::exists('courses', 'id')],
            'name_en' => 'required',
            'name_jp' => 'required',
            'description_en' => 'required',
            'description_jp' => 'required',
            'image' => $this->getMethod() == 'POST' ? 'required|max:3000|mimes:jpg,jpeg,png|exclude' : 'nullable|max:3000|mimes:jpg,jpeg,png|exclude',
        ];
    }


    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'course_id.required' => 'The course field is required.',
            'course_id.exists' => 'The selected course is invalid.',
        ];
    }
}
