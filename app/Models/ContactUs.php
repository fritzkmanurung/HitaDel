<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'photo', 'video'];
    
    public function getLinks()
    {
        return [
            'self' => url("/contact-us/{$this->id}"),
        ];
    }
}