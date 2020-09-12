<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTour extends Model
{
    protected $table = 'order_tour';

    protected $fillable = ['order_id', 'tour_id', 'quantity'];


    public function tour()
    {
        return $this->hasMany(Tour::class);
    }
}
