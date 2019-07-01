<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'email' => 'required|email',
            'kuddennr' => 'required|numeric|min:5',
            'quantity' => 'required|array',
            'name' => 'required_if:other_address,==,on',
            'street' => 'required_if:other_address,==,on',
            'city' => 'required_if:other_address,==,on',
            'postindex' => 'required_if:other_address,==,on|numeric|min:3',
            'agb' => 'accepted',
            'info' => 'max:150'

        ];
    }
}
