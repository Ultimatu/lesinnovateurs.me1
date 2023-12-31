<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'role_id' => 'required|exists:roles,id',
            'phone' => 'required|string|unique:users,phone',
            'commune' => 'required|string',
            'numero_cni' => 'string|unique:users,numero_cni',
            'adresse' => 'string',
            'elector_card' => 'string|unique:users,elector_card',
            'photo_url' => 'nullable',
        ];

    }
}
