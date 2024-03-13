<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'user_type',
        'is_active',
        'photo',
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

    // protected static function booted(): void
    // {
    //     static::creating(function (User $user) {
    //         $user->id = Str::uuid()->toString();
    //     });
    // }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         //$model->{$model->getKeyName()} = (string) Str::uuid();
    //         $model->uuid = (string) Str::uuid(); 
    //     });
    // }
}
