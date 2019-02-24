<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'title' => 'required|string',
            'price' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'amount_stock' => 'required|int',
            'description' => 'string',
            'category_id' => 'int',
            'amount_ratings' => 'int',
        ];
    }
}
