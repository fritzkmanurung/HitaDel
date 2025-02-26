<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    // ...

    public function update(User $user, Post $post)
    {
        // Hanya pemilik post yang dapat mengedit
        return $user->id === $post->user_id;
    }

    public function delete(User $user, Post $post)
    {
        // Hanya pemilik post yang dapat menghapus
        return $user->id === $post->user_id;
    }
}
