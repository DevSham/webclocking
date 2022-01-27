<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'part_number' => 'string|required|max:20',
            'product_name' => 'string|required|max:100',
            'category' => 'string|required|max:100',
            'description' => 'string|nullable',
            'piece_per_box' => 'numeric|required',
            'boxes_per_carton' => 'numeric|required',
        ];
    }
}
