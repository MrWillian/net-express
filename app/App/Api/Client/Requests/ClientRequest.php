<?php

namespace Api\Client\Requests;

use Domain\Client\Models\Client;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public $validator = null;

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
            'name' => [
                'required', 'min:4', 'max:100'
            ],
            'email' => [
                'required', 'email', 'unique:clients', 'max:128'
            ],
            'phone_number' => [
                'required', 'unique:clients'
            ],
            'rg' => [
                'required'
            ],
            'documentValue' => [
                'required'
            ],
            'cep' => [
                'required'
            ],
            'country' => [
                'required'
            ],
            'state' => [
                'required'
            ],
            'city' => [
                'required'
            ],
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'role_id' => 'role',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => __('A name is required.'),
            'email.required' => __('A email is required.'),
            'email.unique' => __('The email has already been taken.'),
            'phone_number.required' => __('A phone number is required.'),
            'phone_number.unique' => __('The phone number has already been taken.'),
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {   
        $this->validator = $validator;
    }
}
