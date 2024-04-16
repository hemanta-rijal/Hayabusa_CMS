<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'host_en' => 'required',
            'host_jp' => 'required',
            'date_en' => 'required',
            'date_jp' => 'required',
            'time_en' => 'required',
            'time_jp' => 'required',
            'venue_en' => 'required',
            'venue_jp' => 'required',
            'location_en' => 'required',
            'location_jp' => 'required',
            'entry_fee_en' => 'required',
            'entry_fee_jp' => 'required',
            'description_en' => 'required',
            'description_jp' => 'required',
            'thumbnail' => $this->getMethod() == 'POST' ? 'required|max:3000|mimes:jpg,jpeg,png|exclude' : 'nullable|max:3000|mimes:jpg,jpeg,png|exclude',
            'images.*' => 'nullable|max:2000|mimes:jpg,jpeg,png|exclude',
        ];
    }
}
