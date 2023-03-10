<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function items() {
        return $this->hasMany(Items::class,'owner_id');
    }

    public function transactions() {
        return $this->hasMany(Transaction::class,'buyer_id');
    }

    public function coupons() {
        return $this->hasMany(Coupons::class,'owner_id');
    }

    public function referrals() {
        return $this->hasMany(User::class,'referrer_id');
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'is_admin',
        'is_super_admin',
        'aah',
        'phone',
        'facebook_id',
        'google_id',
        'temp_key',
        'phone_temp_key',
        'money',
        'referral_link',
        'referrer_id',
        'avatar',
        'email_verified_at',
        'location',
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
    ];
}
