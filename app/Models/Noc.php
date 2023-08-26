<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noc extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
