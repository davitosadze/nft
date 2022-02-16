<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $categories = Category::all();
        $market = Category::with('market')->get();
        return view("front.index", compact('categories', 'market'));
    }
}
