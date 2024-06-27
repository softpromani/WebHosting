<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class ProductRequest extends FormRequest
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
        $step = $this->input('step');
        switch ($step) {
            case 'pro_detail':

                return [
                    'menu_id'=>'required|exists:menus,id',
                    'product_title' => 'required',
                    'meta_keyword' => 'required',
                    'meta_description' => 'required',
                    'product_description' => 'required',
                ];
            case 'feature':

                return [
                    'feature.*.icon' => 'required',
                    'feature.*.title' => 'required',
                    'feature.*.detail' => 'required',
                    'product_id'=>'required|exists:products,id'
                ];
                case 'whyus':

                    return [
                        'whyus.*.icon' => 'required',
                        // 'whyus.*.colour' => 'required',
                        'whyus.*.title' => 'required',
                        'whyus.*.detail' => 'required',
                        'product_id'=>'required|exists:products,id'
                    ];
            case 'pro_counter':
                return [
                    'counter.*.icon' => 'required',
                    'counter.*.count' => 'required',
                    'counter.*.title' => 'required',
                    'product_id'=>'required|exists:products,id'
                ];

            case 'pro_testimonial':
                return [
                    'testi.*.pic' => 'required|image|max:3072',
                    'testi.*.name' => 'required',
                    'testi.*.designation' => 'required',
                    'testi.*.comment' => 'required',
                    'product_id'=>'required|exists:products,id'
                ];

            case 'faqs':
                return [
                    'faq.*.question' => 'required|string',
                    'faq.*.answer' => 'required|string',
                    'product_id'=>'required|exists:products,id'
                ];
            case 'media':
                return [
                    'main_img' => 'required|file|image|max:1024',
                    'slider_img.*' => 'required|file|image|max:1024',
                    'product_id'=>'required|exists:products,id'
                ];
            default:
                return [];
        }
    }

    protected function failedValidation(Validator $validator)
    {
        $response = redirect()
            ->back()
            ->withErrors($validator)
            ->withInput()
            ->with('step', $this->input('step'))
            ->with('product_id', $this->input('product_id'));

        throw new HttpResponseException($response);
    }
}
