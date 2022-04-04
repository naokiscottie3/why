<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Event_Request2 extends FormRequest
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
            'id' => 'required',
            'event_name' => 'required|max:25',
            'event_explanation' => 'required|max:10000',

        ];
    }
}
