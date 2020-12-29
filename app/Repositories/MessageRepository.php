<?php


namespace App\Repositories;

use App\User;
use App\Message;

class MessageRepository
{
    /**
     * 取得給定使用者的所有任務。
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Message::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();

    }
}
