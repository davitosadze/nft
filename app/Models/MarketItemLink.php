<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketItemLink extends Model
{
    protected $fillable = ["item_id", "platform_id", "link"];
    use HasFactory;

    public function platform() {
        return $this->belongsTo(Platform::class, 'platform_id');
    }
}
