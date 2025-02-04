<?php

namespace App\Http\Modules\Users\Controllers;


use Gomaa\Test\Base\Controllers\BaseApiController;
use App\Http\Modules\Users\Requests\CreateUserRequest;
use App\Http\Modules\Users\Requests\DeleteUserRequest;
use App\Http\Modules\Users\Requests\ListUserRequest;
use App\Http\Modules\Users\Requests\ShowUserRequest;
use App\Http\Modules\Users\Requests\UpdateUserRequest;
use App\Http\Modules\Users\Services\UserService;

class UserController extends BaseApiController
{

    /**
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        parent::__construct($service,[
            'index' => ListUserRequest::class,
            'show' => ShowUserRequest::class,
            'store' => CreateUserRequest::class,
            'update' => UpdateUserRequest::class,
            'destroy' => DeleteUserRequest::class,
        ]);
    }

}
