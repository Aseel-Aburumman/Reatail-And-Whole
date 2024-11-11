<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'password',
    ];



    public function store()
    {
        return $this->hasOne(Store::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function orderContribution()
    {
        return $this->hasMany(OrderContribution::class);
    }

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
    ];

    public static function registerUser($data)
{
    $data['password'] = bcrypt($data['password']); 
    return self::create($data);
}
public static function loginUser($data)
{
    $user = self::where('email', $data['email'])->first();

    if ($user && Hash::check($data['password'], $user->password)) {
        return $user;
    }

    return null;
}

}
