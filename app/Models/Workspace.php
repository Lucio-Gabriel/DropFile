<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->HasMany(User::class);
    }
}
