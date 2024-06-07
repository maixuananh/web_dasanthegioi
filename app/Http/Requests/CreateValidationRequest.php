<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
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

            'name' =>'required|unique:food|max:255',
            'count' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image' =>'required|mimes:ipg,png,jpeg|max:5048',

        ];
    }
}
