<?php

namespace App\Models;

use App\Models\Model;

class Channel extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
