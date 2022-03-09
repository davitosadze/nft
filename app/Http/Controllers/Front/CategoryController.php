<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($id)
    {
        $category = Category::find($id);
        $market = $category->market;

        return view('front.categories.index', compact('market', 'category'));
    }
}
