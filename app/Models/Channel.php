<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
class Channel extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $keyType = 'string';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
