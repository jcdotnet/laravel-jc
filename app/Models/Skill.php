<?php

namespace App\Models;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function experiences() {
        return $this->belongsToMany(Experience::class);
    }
}
