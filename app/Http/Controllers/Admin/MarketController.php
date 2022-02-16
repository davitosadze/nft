<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MarketItem;
use App\Models\MarketItemLink;
use App\Models\Platform;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $market = MarketItem::all();
        return view("admin.market.index", compact("market"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platforms = Platform::all();
        $categories = Category::all();
        return view("admin.market.create", compact('platforms', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = MarketItem::create([
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'price' => $request->get('price'),
            'category_id' => $request->get('category_id'),
            'description' => $request->get('description')
        ]);

        if($request->has('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/market'), $imageName);
            $path = URL('/') . '/images/market/' . $imageName;
            $item->image = $path;
        }
       
        $item->save();

        foreach($request->platforms as $platform_id => $link) {

            MarketItemLink::create([
                    'item_id' => $item->id,
                    'platform_id' => $platform_id,
                    'link' => $link
            ]);
            
            
        }

        return redirect()->route('admin.market.index')->with('success', 'Item successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MarketItem $market)
    {
        $categories = Category::all();
        return view("admin.market.edit", compact('market', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarketItem $market)
    {
        $market->title = $request->get('title');
        $market->author = $request->get('author');
        $market->price = $request->get('price');
        $market->description = $request->get('description');
        $market->category_id = $request->get('category_id');

        if($request->has('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/market'), $imageName);
            $path = URL('/') . '/images/market/' . $imageName;
            $market->image = $path;
        }

        $market->save();

        foreach($request->get('platforms') as $platform_id => $link) {
            $itemLink = MarketItemLink::where('item_id', $market->id)
            ->where('platform_id', $platform_id)
            ->first();

            $itemLink->link = $link;
            $itemLink->save();
        }

        return redirect()->route('admin.market.index')->with('success', 'Item successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarketItem $market)
    {
        MarketItemLink::where('item_id', $market->id)->delete();
        $market->delete();

        return redirect()->back()->with('success', 'Market Item successfully deleted');

    }
}
