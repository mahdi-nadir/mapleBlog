<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'password_confirmed',
        'role_id',
        'imgUser_id',
        'gender_id',
        'date_of_birth',
        'country_id',
        'system_id',
        'diploma_id',
        'noc_id',
        'eligibility_score',
        'crs_score',
        'step_id',
        'is_banned',
        'provider',
        'provider_id',
        'provider_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($user) {
    //         $user->image = $user->is_male ? 'defaultMale.png' : 'defaultFemale.png';
    //     });
    // }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function profileImage()
    {
        return $this->belongsTo(ImgUser::class, 'img_user_id');
    }

    // public function country()
    // {
    //     return $this->belongsTo(Country::class);
    // }

    public function system()
    {
        return $this->belongsTo(System::class);
    }

    public function diploma()
    {
        return $this->belongsTo(Diploma::class);
    }

    public function noc()
    {
        return $this->belongsTo(Noc::class);
    }

    public function step()
    {
        return $this->belongsTo(Step::class);
    }

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'from_user_id');
    }

    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'to_user_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    // public function likedPosts()
    // {
    //     return $this->belongsToMany(Post::class, 'post_likes', 'user_id', 'post_id')
    //         ->where('is_like', true);
    // }

    public static function generateUsername($username)
    {
        if ($username === null) {
            $username = 'maplemind_user_' . rand(100000, 999999);
        }

        if (User::where('username', $username)->exists()) {
            $newUsername = $username . '_' . rand(100000, 999999);
            $username = self::generateUsername($newUsername);
        }

        return $username;
    }
}
