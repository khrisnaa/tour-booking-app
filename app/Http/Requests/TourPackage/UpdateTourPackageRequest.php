<?php

namespace App\Http\Requests\TourPackage;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTourPackageRequest extends FormRequest
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
            'category_id' => [
                'required',
                Rule::exists('categories', 'id'),
            ],
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('tour_packages', 'name')->ignore($this->route('tour_package'))->withoutTrashed(),
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'price' => [
                'required',
                'numeric',
                'min:0',
            ],
            'duration_days' => [
                'required',
                'integer',
                'min:0',
            ],
            'duration_hours' => [
                'required',
                'integer',
                'min:0',
                'max:23',
            ],
            'location' => [
                'required',
                'string',
                'max:255',
            ],
            'thumbnail' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg',
                'max:10240',
            ],
            'photos.*' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg',
                'max:10240',
            ],
        ];
    }
}
