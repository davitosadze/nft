<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketItem extends Model
{
    protected $fillable = ["title", "image", "author", "price", "description"];
    use HasFactory;


    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function platforms() {
        return $this->hasMany(MarketItemLink::class, 'item_id');
    }
}
