<?php

namespace Web\Client\Requests;

use App\Role;
use Domain\Client\Models\Client;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
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
                'required', 'min:4'
            ],
            'email' => [
                'required', 'email', Rule::unique((new Client)->getTable())->ignore($this->route()->client->id ?? null)
            ],
            'phone_number' => [
                'required', 'phone_number', Rule::unique
            ],
            'rg' => [
                'required'
            ],
            'document' => [
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
}
