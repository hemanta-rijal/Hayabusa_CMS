<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactPageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'send_message_title_en' => 'required|string|max:255',
            'send_message_title_jp' => 'required|string|max:255',
            'send_message_description_en' => 'required|string',
            'send_message_description_jp' => 'required|string',
            'social_icon_title_en' => 'required|string|max:255',
            'social_icon_title_jp' => 'required|string|max:255',
            'contact_page_description_en' => 'required|string',
            'contact_page_description_jp' => 'required|string',
            'button.title_en' => 'required|string|max:255',
            'button.title_jp' => 'required|string|max:255',
            'button.link' => 'required|url',
            'button.target' => 'required|string|in:_self,_blank',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'send_message_title_en.required' => 'The send message title in English is required.',
            'send_message_title_jp.required' => 'The send message title in Japanese is required.',
            'send_message_description_en.required' => 'The send message description in English is required.',
            'send_message_description_jp.required' => 'The send message description in Japanese is required.',
            'social_icon_title_en.required' => 'The social icon title in English is required.',
            'social_icon_title_jp.required' => 'The social icon title in Japanese is required.',
            'contact_page_description_en.required' => 'The main description in English is required.',
            'contact_page_description_jp.required' => 'The main description in Japanese is required.',
            'button.title_en.required' => 'The button title in English is required.',
            'button.title_jp.required' => 'The button title in Japanese is required.',
            'button.link.required' => 'The button link is required.',
            'button.link.url' => 'The button link must be a valid URL.',
            'button.target.required' => 'The button target is required.',
            'button.target.in' => 'The button target must be either "_self" or "_blank".',
        ];
    }
}
