<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class TransactionRequest extends FormRequest
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
            
<<<<<<< HEAD
            'mobile number' => 'required|min:11|numeric',
            'account number' => 'required|min:11|numeric',
            'amount' => 'required|max:6|numeric',
=======
            'account number'=> 'min:11|numeric',
            'accountnumber' => 'min:11|numeric',
            'amount' => 'required|numeric',
>>>>>>> bd3f34329c35277c057c0a8768bc29c87d9f965e
            'password' => 'required',
            
        ];
    }
}
