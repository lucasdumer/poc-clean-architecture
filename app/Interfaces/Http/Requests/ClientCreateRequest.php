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
            'address.country' => ['required', 'max:255'],
            'address.state' => ['required', 'max:255'],
            'address.city' => ['required', 'max:255'],
            'address.district' => ['required', 'max:255'],
            'address.street' => ['required', 'max:255'],
            'address.number' => ['required', 'max:255'],
            'address.complement' => ['required', 'max:255'],
        ];
    }
}
