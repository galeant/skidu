<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    public function tour(){
        return $this->hasMany('App\Bookingtour','transaction_id','id');
    }
    public function hotel(){
        return $this->hasMany('App\BookingHotel','transaction_id','id');
    }
    public function car(){
        return $this->hasMany('App\BookingCar','transaction_id','id');
    }
    public function plane(){
        return $this->hasMany('App\BookingPlane','transaction_id','id');
    }
}
