<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'post_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function getLinks(): array
    {
        $baseUri = '/api/posts/{post}/comments/' . $this->id;
        return [
            'self' => [
                'href' => $baseUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get comment details',
            ],
            'update' => [
                'href' => $baseUri . '/update',
                'method' => 'PUT',
                'type' => 'application/json',
                'description' => 'Update comment details',
            ],
            'delete' => [
                'href' => $baseUri . '/delete',
                'method' => 'DELETE',
                'type' => 'application/json',
                'description' => 'Delete comment',
            ],
        ];
    }
}