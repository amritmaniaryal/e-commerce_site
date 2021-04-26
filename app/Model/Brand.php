<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable=[
        'brand_name'
        ];
    public function product(){
        return $this->hasMany(Product::class);
    }
}
