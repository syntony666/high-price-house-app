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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type_id' => ['required'],
            'brandname' => ['required'],
            'pic_url' => ['required'],
            'price' => ['required'],
            'available' => ['required'],
            'stock' => ['required'],
        ];
    }
}
