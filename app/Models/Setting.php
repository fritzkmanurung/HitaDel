<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'value',
    ];

    public function getLinks(): array
    {
        $baseUri = '/api/products/' . $this->id;

        return [
            'self' => [
                'href' => $baseUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get product details',
            ],
            'update' => [
                'href' => $baseUri . '/update',
                'method' => 'PUT',
                'type' => 'application/json',
                'description' => 'Update product details',
            ],
            'delete' => [
                'href' => $baseUri . '/delete',
                'method' => 'DELETE',
                'type' => 'application/json',
                'description' => 'Delete product',
            ],
            'related' => [
                'href' => '/api/products/' . $this->id . '/related',
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get related products',
            ],
        ];
    }
}