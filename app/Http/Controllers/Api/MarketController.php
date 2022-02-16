<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MarketItem;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function market() {
        $market = MarketItem::all();
        return response()->json($market, 200);
    }
}
