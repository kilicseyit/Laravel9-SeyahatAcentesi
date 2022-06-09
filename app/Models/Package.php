<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    #Many to one
    public function  category()
    {
        return $this->belongsTo(Category::class);
    }
    public function  comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function shopcart()
    {
        return $this->hasMany(ShopCart::class);
    }

    public function orderpackage()
    {
        return $this->hasMany(OrderPackage::class);
    }

}
