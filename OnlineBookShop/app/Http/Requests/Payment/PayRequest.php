<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class PayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
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
            'email' => 'required|email|min:5|max:200|exists:users,email',
            'phone_number' => 'required|numeric|digits:11',
            'address' => 'required|string|min:7|max:250',
            'method' => 'required|in:online,ofline|string',
            'gateway' => 'required_if:method,online|string|in:IDpay,Zarinpal,Paypal,Webpay'
        ];
    }
}

