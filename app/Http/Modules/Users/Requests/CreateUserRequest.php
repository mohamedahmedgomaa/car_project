<?php

namespace App\Http\Modules\Users\Requests;

use Gomaa\Test\Base\Requests\BaseRequest;
use Illuminate\Support\Facades\Hash;

class CreateUserRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' =>  'required|email|unique:users',
            'password' =>  'required',
            'phone' => 'required|unique:users',
        ];
    }
    protected function passedValidation()
    {
        if ($this->has('password')) {
            $this->merge(['password' => Hash::make($this->password)]);
        }
    }

}
