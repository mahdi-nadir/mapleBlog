<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
