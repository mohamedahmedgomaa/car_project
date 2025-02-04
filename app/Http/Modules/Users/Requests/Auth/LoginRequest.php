<?php

namespace App\Http\Modules\Users\Requests\Auth;

use Gomaa\Test\Base\Requests\BaseRequest;

class LoginRequest extends BaseRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ];
    }
}
