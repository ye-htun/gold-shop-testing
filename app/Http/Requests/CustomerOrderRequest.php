<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'item_id' => [
                'integer',
                'required',
            ],
            'customer_id' =>[
                'integer',
                'required',
            ],
            'confirm_status' => 'required',
            'confirm_price' => 'required',
            'org_price' => 'required',
            'remark' => 'required',
        ];
    }
    public function messages() {
        return [
            'item_id' => 'Your required is Item Name!',
            'customer_id' => 'Your required is Customer Name!',
            'org_price' => 'Your required is Original Price!',
        ];
    }
}
