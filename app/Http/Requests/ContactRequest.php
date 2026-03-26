<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|max:100',
            'message' => 'required|string|min:10|max:2000',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Please share your name with us.',
            'email.required' => 'We need your email to reach back to you.',
            'email.email' => 'Please enter a valid email address.',
            'message.required' => 'Please tell us how we can help you.',
            'message.min' => 'Your message needs to be at least 10 characters.',
        ];
    }
}