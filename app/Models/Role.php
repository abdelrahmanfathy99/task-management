<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'ability_role');
    }
}
