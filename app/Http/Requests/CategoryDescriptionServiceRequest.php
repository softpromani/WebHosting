<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryDescriptionServiceRequest extends FormRequest
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
         $rules = [
            'category_id' => 'required|exists:menus,id',
            'tab_name' => 'required|string',
            'tab_icon' => 'required|string',
            'header_icon' => 'required|string',
            'header_text' => 'required|string',
            'title' => 'required|string',
            'description' => 'nullable|string',
        ];

        if ($this->isMethod('post')) {
            $rules['service_image'] = 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048';
        } elseif ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['service_image'] = 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048';
        }

        return $rules;
    }
}
