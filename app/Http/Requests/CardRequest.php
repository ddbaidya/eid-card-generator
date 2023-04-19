<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'profile_photo' => 'required',
            'name' => 'required|string',
            'greetings_giver' => 'required|string',
            'card' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'profile_photo.required' => 'Please select a file to upload.',
            'card.required' => 'Please select a card.'
        ];
    }
}
