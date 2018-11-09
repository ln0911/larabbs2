<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    /**
     * @param User $currentUser 默认当前登录用户
     * @param User $user   进行授权的示例用户
     * @return bool
     */
    public function update(User $currentUser , User $user){
        return $currentUser->id == $user->id;
    }


}
