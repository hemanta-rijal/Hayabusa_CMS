<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
        $logoRule = $this->has('id')
            ? 'nullable|max:4000|mimes:jpg,jpeg,png|exclude'
            : 'required|max:4000|mimes:jpg,jpeg,png|exclude';

        return [
            'organization_name_en' => 'required',
            'organization_name_jp' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
            'address_en' => 'required',
            'address_jp' => 'required',
            'about_en' => 'required',
            'about_jp' => 'required',
            'copyright_text_en' => 'required',
            'copyright_text_jp' => 'required',
            'operating_days_en' => 'required',
            'operating_days_jp' => 'required',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'tiktok' => 'nullable|url',
            'youtube' => 'nullable|url',
            'map' => 'nullable',
            'logo' => $logoRule,
            'logo_secondary' => $logoRule,
        ];
    }
}
