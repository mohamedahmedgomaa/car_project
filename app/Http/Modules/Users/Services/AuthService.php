<?php

namespace App\Http\Modules\Users\Services;

use App\Http\Modules\Users\Requests\Auth\LoginRequest;
use Gomaa\Test\Base\Services\BaseApiService;
use App\Http\Modules\Users\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class AuthService extends BaseApiService
{

    /**
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }
    /**
     * @throws ValidationException
     */
    public function login(LoginRequest $request): JsonResponse
    {
        if (!auth()->attempt($request->only(['email', 'password']))) {
            throw ValidationException::withMessages([
                'password' => [trans('auth.failed')],
            ]);
        }

        return $this->responseWithData([
            'user' => $this->repository->getById(auth()->id()),
            'token' => $this->repository->createPersonalToken(auth()->id()),
        ]);
    }
}
