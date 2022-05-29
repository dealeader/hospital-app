<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public const ROLE_ADMIN = 'doctor';
    public const ROLE_PATIENT = 'patient';

    public static function getRoles()
    {
        return [
            self::ROLE_ADMIN => 'Администратор',
            self::ROLE_PATIENT => 'Пользователь',
        ];
    }

    protected $guarder = [];

    protected $fillable = [
        'first_name',
        'second_name',
        'patronymic',
        'document',
        'work_expirience',
        'role',
        'category_id',
        'password',
        'password_confirmation',

    ];

    protected $hidden = [
        'password',
        'password_confirmation',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
