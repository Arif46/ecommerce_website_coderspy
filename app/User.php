<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'verification_code', 'email_verified_at', 'address', 'country',
        'city', 'postal_code','gender','birth_date','avatar_original','newsletter','notification','sample','public_profile'
    ];
  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function wishlists()
  {
    return $this->hasMany(Wishlist::class);
  }
  public function SampleAndSubscriptions()
  {
    return $this->hasMany(SampleAndSubscription::class);
  }

  public function customer()
  {
    return $this->hasOne(Customer::class);
  }

  public function seller()
  {
    return $this->hasOne(Seller::class);
  }

  public function affiliate_user()
  {
    return $this->hasOne(AffiliateUser::class);
  }

  public function products()
  {
    return $this->hasMany(Product::class);
  }

  public function shop()
  {
    return $this->hasOne(Shop::class);
  }

  public function staff()
  {
    return $this->hasOne(Staff::class);
  }

  public function orders()
  {
    return $this->hasMany(Order::class);
  }

  public function wallets()
  {
    return $this->hasMany(Wallet::class)->orderBy('created_at', 'desc');
  }

  public function club_point()
  {
    return $this->hasOne(ClubPoint::class);
  }
  public function userCardInfo()
  {
    return $this->hasOne(UserCardInfo::class);
  }
  public function ShippingInfo()
  {
    return $this->hasOne(BillShipInfo::class);
  }

    public function blogCategories(){
        return $this->hasMany(BlogCategory::class , 'id');
    }
    public function blogs(){
        return $this->hasMany(Blog::class , 'id');
    }


}
