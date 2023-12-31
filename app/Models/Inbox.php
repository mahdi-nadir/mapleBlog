<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inbox extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    /* public function inbox_participants()
    {
        return $this->hasMany(InboxParticipants::class);
    } */

    public function user1()
    {
        return $this->belongsTo(User::class, 'user1_id', 'id');
    }

    public function user2()
    {
        return $this->belongsTo(User::class, 'user2_id', 'id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'inbox_id', 'id');
    }
}
