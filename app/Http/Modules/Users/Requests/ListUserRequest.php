<?php

namespace App\Http\Modules\Users\Requests;

use Gomaa\Test\Base\Requests\BaseRequest;

class ListUserRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
        ];
    }

}
