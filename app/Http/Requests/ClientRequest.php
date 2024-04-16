<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name_jp' => 'nullable',
            'image' => $this->getMethod() == 'POST' ? 'required|max:1024|mimes:jpg,jpeg,png|exclude' : 'nullable|max:1024|mimes:jpg,jpeg,png|exclude'
        ];
    }
}
