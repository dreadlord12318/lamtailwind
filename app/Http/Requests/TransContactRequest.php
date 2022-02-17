<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransContactRequest extends FormRequest
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required | email',
            'phone' => 'required | max:11',
            'subject' => 'max:255',
            'message' => 'max:255',
        ];
    }
}
