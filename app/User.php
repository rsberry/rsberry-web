<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property-read \App\Inventory $inventory
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $username
 * @property string $password
 * @property int $x
 * @property int $y
 * @property int $banned
 * @property int $height
 * @property int $rights
 * @property int $member
 * @property string|null $last_connection
 * @property string|null $last_login
 * @property int $energy
 * @property string $game_time
 * @property string $game_count
 * @property string $look_0
 * @property string $look_1
 * @property string $look_2
 * @property string $look_3
 * @property string $look_4
 * @property string $look_5
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereBanned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEnergy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGameCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGameTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLook0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLook1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLook2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLook3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLook4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLook5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMember($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRights($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereY($value)
 */
class User extends Authenticatable
{
    use Notifiable;

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

    public function inventory()
    {
        return $this->hasOne('App\Inventory');
    }
}
