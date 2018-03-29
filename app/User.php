<?php

namespace App;

use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Backpack\CRUD\CrudTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use CrudTrait;
    use HasRoles;

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

    public function scopeClient($query)
    {
        return $query->role('client');
    }

    public function scopeContact($query)
    {
        return $query->role('Contact Recipient');
    }

    public function hasPortal()
    {
        return $this->portal()->exists();
    }

    public function portal()
    {
        return $this->hasOne(Portal::class, 'client_id');
    }

    public function portalData()
    {
        return $this->hasManyThrough(PortalData::class, Portal::class, 'client_id', 'portal_id');
    }
}
