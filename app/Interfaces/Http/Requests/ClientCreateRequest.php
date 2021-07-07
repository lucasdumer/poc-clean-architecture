<?php

namespace App\Interfaces\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientCreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'max:255'],
            'gender' => ['required', 'in:male,female'],
            'birth' => ['required', 'date'],
            'country' => ['required', 'max:255'],
            'state' => ['required', 'max:255'],
            'city' => ['required', 'max:255'],
            'district' => ['required', 'max:255'],
            'street' => ['required', 'max:255'],
            'number' => ['required', 'max:255'],
            'complement' => ['required', 'max:255'],
        ];
    }
}
