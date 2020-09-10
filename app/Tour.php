<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //Table Name
    protected $table = 'tours';
    //Primary key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function newPriceAfterDiscount($price,$discount)
    {
        $remain = ((100 - $discount)/100) ;
        $new = $price * $remain;
        return $new;

    }





}
