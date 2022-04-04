<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FieldRequest extends FormRequest
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
            'field_name' => 'required|max:30',
            'field_address' => 'required|max:30',
            'power' => 'required',
            'solar_power' => 'required',
            'contract_date' => 'required|max:20',
            'contract_money' => 'required',
            'customer_id' => 'required',
        ];
    }
}
