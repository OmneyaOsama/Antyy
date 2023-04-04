<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Favorite;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'color',
        'size',
        'price',
        'image',
        'discount',
        'user_id',
        'category_id',


    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    function cart(){
        return $this->hasOne(Cart::class);
    }

    function favorite(){
        return $this->hasOne(Favorite::class);
    }


}
