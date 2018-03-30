<?php

namespace App;

use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Backpack\CRUD\CrudTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,CrudTrait,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     *  Boot
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($user) {
            if ($user->hasPortal()) {
                $user->portal()->delete();
            }
        });
    }

    /**
     * Send the password reset notification.
     *
     * @param  string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeClient($query)
    {
        return $query->role('client');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeContact($query)
    {
        return $query->role('Contact Recipient');
    }

    /**
     * @return bool
     */
    public function hasPortal()
    {
        return $this->portal()->exists();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function portal()
    {
        return $this->hasOne(Portal::class, 'client_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function portalData()
    {
        return $this->hasManyThrough(PortalData::class, Portal::class, 'client_id', 'portal_id');
    }
}
