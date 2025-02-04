<?php

namespace App\Http\Modules\Users\Services;

use Gomaa\Test\Base\Services\BaseApiService;
use App\Http\Modules\Users\Repositories\UserRepository;

class UserService extends BaseApiService
{

    /**
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }

}
