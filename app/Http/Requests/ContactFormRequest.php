<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'full_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/u', // Allow only alphabets and spaces
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20|regex:/^[0-9+\-()]+$/u', // Allow only numbers, plus, minus, parentheses
            'service' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'details' => 'nullable|string|max:1000', // Adjust maximum length as needed
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'full_name.required' => 'The full name field is required.',
            'full_name.string' => 'The full name must be a string.',
            'full_name.max' => 'The full name may not be greater than :max characters.',
            'full_name.regex' => 'The full name can only contain letters and spaces.',
            'email.required' => 'The email address field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email address may not be greater than :max characters.',
            'phone.required' => 'The phone number field is required.',
            'phone.string' => 'The phone number must be a string.',
            'phone.max' => 'The phone number may not be greater than :max characters.',
            'phone.regex' => 'The phone number can only contain numbers, plus (+), minus (-), and parentheses ().',
            'service.required' => 'The service field is required.',
            'service.string' => 'The service must be a string.',
            'service.max' => 'The service may not be greater than :max characters.',
            'day.required' => 'The day field is required.',
            'day.string' => 'The day must be a string.',
            'day.max' => 'The day may not be greater than :max characters.',
            'time.required' => 'The time field is required.',
            'time.string' => 'The time must be a string.',
            'time.max' => 'The time may not be greater than :max characters.',
            'details.string' => 'The additional details must be a string.',
            'details.max' => 'The additional details may not be greater than :max characters.',
        ];
    }

     /**
     * Get the sanitized validated data from the request.
     *
     * @return array
     */
    public function sanitizedData()
    {
        $validated = $this->validated();

        // Additional sanitization if required
        $validated['full_name'] = trim($validated['full_name']);
        $validated['email'] = strtolower(trim($validated['email']));
        $validated['phone'] = preg_replace('/[^0-9+\-()]/', '', $validated['phone']); // Remove non-numeric characters

        return $validated;
    }
}
