<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

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

    /**
     * Fetch users by a specific role.
     *
     * @param string $role
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getUsersByRole(string $role)
    {
        return self::role($role)->get();
    }

    public static function createUser(array $data)
    {
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        return self::create($data);
    }


    /**
     * Update user details.
     *
     * @param array $data
     * @return $this
     */
    public function updateUserDetails(array $data)
    {
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        $this->update($data);
        return $this;
    }

    /**
     * Delete a user by ID.
     *
     * @param int $id
     * @return bool|null
     */
    public static function deleteUserById(int $id)
    {
        $user = self::find($id);
        return $user ? $user->delete() : false;
    }
}
