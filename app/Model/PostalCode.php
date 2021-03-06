<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    protected $fillable=[
      'postal_code'
    ];
    public function deliveryAddress(){
        return $this->hasMany(DeliveryAddress::class);
    }
}
