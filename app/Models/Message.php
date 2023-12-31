<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    use SoftDeletes;

    /* protected $fillable = [
        'content',
        'from_user_id',
        'to_user_id',
    ]; */
    protected $guarded = [];

    // public function fromUser()
    // {
    //     return $this->belongsTo(User::class, 'from_user_id');
    // }

    // public function toUser()
    // {
    //     return $this->belongsTo(User::class, 'to_user_id');
    // }

    public function user1()
    {
        return $this->belongsTo(User::class, 'user1_id', 'id');
    }

    public function user2()
    {
        return $this->belongsTo(User::class, 'user2_id', 'id');
    }

    public function inbox()
    {
        return $this->belongsTo(Inbox::class, 'inbox_id', 'id');
    }

    // public function receiver()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function sender()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
