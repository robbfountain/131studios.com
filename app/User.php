<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     *  Administrators
     */
    const ADMIN = ['robb@131studios.com'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'account_key',
        'account_id',
        'deleted_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    /**
     * @return mixed
     */
    public function avatar()
    {
        return Gravatar::get($this->email);
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return in_array($this->email, self::ADMIN);
    }
}
