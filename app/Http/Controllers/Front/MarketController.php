<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\MarketItem;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function details(MarketItem $market_item) {
        return view('front.market.item-details', compact('market_item'));
    }
}
