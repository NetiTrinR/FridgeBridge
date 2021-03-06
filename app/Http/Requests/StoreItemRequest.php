<?php

namespace Fridge\Http\Requests;

use Fridge\Http\Requests\Request;

class StoreItemRequest extends Request
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
            'name' => 'required',
            'expire' => 'date|after:today',
            'quantity' => 'numeric',
            'category' => 'exists:categories,id'
        ];
    }
}
