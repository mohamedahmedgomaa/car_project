<?php

namespace App\Http\Modules\Users\Repositories;

use Gomaa\Test\Base\Repositories\BaseApiRepository;
use App\Http\Modules\Users\Models\User;

class UserRepository extends BaseApiRepository
{
    /**
     * Examples constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function createPersonalToken(string $id)//: string
    {
        $objToken = $this->getById($id)->createToken(User::PersonalToken);
        $strToken = $objToken->accessToken;
        $expiration = $objToken->token;
        $expiration->expires_at = \Illuminate\Support\Carbon::now()->addHours(3);
        $expiration->save();
        return $strToken;
        //return $this->find($id)->createToken(User::PersonalToken)->accessToken;
    }
}
