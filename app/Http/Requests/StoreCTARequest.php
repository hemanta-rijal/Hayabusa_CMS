<?php 
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCTARequest extends FormRequest
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
            'main_title_en' => ['required', 'string', 'max:255', 'min:5'],
            'sup_title_en' => ['required', 'string', 'max:255', 'min:5'],
            'main_title_jp' => ['required', 'string', 'max:255', 'min:2'],
            'sup_title_jp' => ['required', 'string', 'max:255', 'min:2'],
            'image' => ['required', 'image', 'dimensions:min_width=500,min_height=100', 'mimes:jpeg,png'],
            'link' => ['required', 'string', 'url', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'main_title_en.required' => 'The main title (English) field is required.',
            'main_title_en.max' => 'The main title (English) may not be greater than :max characters.',
            'main_title_en.min' => 'The main title (English) must be at least :min characters.',
            'sup_title_en.required' => 'The supplemental title (English) field is required.',
            'sup_title_en.max' => 'The supplemental title (English) may not be greater than :max characters.',
            'sup_title_en.min' => 'The supplemental title (English) must be at least :min characters.',
            'main_title_jp.required' => 'The main title (Japanese) field is required.',
            'main_title_jp.max' => 'The main title (Japanese) may not be greater than :max characters.',
            'main_title_jp.min' => 'The main title (Japanese) must be at least :min characters.',
            'sup_title_jp.required' => 'The supplemental title (Japanese) field is required.',
            'sup_title_jp.max' => 'The supplemental title (Japanese) may not be greater than :max characters.',
            'sup_title_jp.min' => 'The supplemental title (Japanese) must be at least :min characters.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The file must be an image.',
            'image.dimensions' => 'The image dimensions must be at least :min_width x :min_height pixels, recommended width is 600px.',
            'image.mimes' => 'Only JPEG and PNG image formats are supported.',
            'link.required' => 'The link field is required.',
            'link.max' => 'The link may not be greater than :max characters.',
            'link.url' => 'The link must be a valid URL.',
        ];
    }
}
