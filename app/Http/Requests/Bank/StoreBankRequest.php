<?php

namespace App\Http\Requests\Bank;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBankRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'bank_name' => [
                'required',
                'string',
                'max:255'
            ],
            'bank_account_name' => [
                'required',
                'string',
                'max:255'
            ],
            'bank_account_number' => [
                'required',
                'string',
                'max:20',
                Rule::unique('banks', 'bank_account_number')->withoutTrashed()
            ],
            'logo' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg',
                'max:10240'
            ]

        ];


    }
}
