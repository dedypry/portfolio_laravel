<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'freelance' => 'boolean',
            'tags' => 'array',
        ];
    }
}
