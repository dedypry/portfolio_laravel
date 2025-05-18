<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'img_url' => 'array',
        ];
    }
}
