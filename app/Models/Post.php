<?php
// app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'community', 'description', 'photo', 'video'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // app/Models/Post.php

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getLinks(): array
    {
        $baseUri = '/api/posts/' . $this->id;
        return [
            'self' => [
                'href' => $baseUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get post details',
            ],
            'update' => [
                'href' => $baseUri . '/update',
                'method' => 'PUT',
                'type' => 'application/json',
                'description' => 'Update post details',
            ],
            'delete' => [
                'href' => $baseUri . '/delete',
                'method' => 'DELETE',
                'type' => 'application/json',
                'description' => 'Delete post',
            ],
        ];
    }
}
