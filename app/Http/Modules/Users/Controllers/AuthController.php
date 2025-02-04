<?php

namespace App\Http\Modules\Users\Controllers;


use App\Http\Modules\Users\Requests\Auth\LoginRequest;
use Gomaa\Test\Base\Controllers\BaseApiController;
use App\Http\Modules\Users\Requests\CreateUserRequest;
use App\Http\Modules\Users\Requests\DeleteUserRequest;
use App\Http\Modules\Users\Requests\ListUserRequest;
use App\Http\Modules\Users\Requests\ShowUserRequest;
use App\Http\Modules\Users\Requests\UpdateUserRequest;
use App\Http\Modules\Users\Services\AuthService;

class AuthController extends BaseApiController
{

    /**
     * @param AuthService $service
     */
    public function __construct(AuthService $service)
    {
        parent::__construct($service,[
            'index' => ListUserRequest::class,
            'show' => ShowUserRequest::class,
            'store' => CreateUserRequest::class,
            'update' => UpdateUserRequest::class,
            'destroy' => DeleteUserRequest::class,
        ]);
    }

    public function login(LoginRequest $request)
    {
        return $this->service->login($request);
    }

}
