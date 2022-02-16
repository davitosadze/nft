<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["category_name"];
    use HasFactory;

    public function market() {
        return $this->hasMany(MarketItem::class, 'category_id');
    }
}
