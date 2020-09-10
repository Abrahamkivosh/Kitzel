<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'user_id', 'email', 'phone_number', 'address', 'zip_code', 'city', 'state',
         'country', 'discount', 'price', 'error',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tours()
    {
        return $this->belongsToMany('App\Tour')->withPivot('quantity');
    }
}
