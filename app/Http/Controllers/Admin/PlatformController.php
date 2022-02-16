<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platforms = Platform::all();
        return view("admin.platforms.index", compact('platforms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.platforms.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $iconName = time().'.'.$request->icon->extension();  
        $request->icon->move(public_path('images/platforms'), $iconName);
        $path = URL('/') . '/images/platforms/' . $iconName;
        
        Platform::create([
            'title' => $request->get('title'),
            'icon' => $path
        ]);
        
        return redirect()->route('admin.platforms.index')->with('success', 'Platform successfully created');

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
    public function edit(Platform $platform)
    {
        return view("admin.platforms.edit", compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platform $platform)
    {
        $platform->title = $request->get('title');
        if($request->has('icon')) {
            $iconName = time().'.'.$request->icon->extension();  
            $request->icon->move(public_path('images/platforms'), $iconName);
            $path = URL('/') . '/images/platforms/' . $iconName;
            $platform->icon = $path;
        }
        $platform->save();
        return redirect()->route('admin.platforms.index')->with('success', 'Platform successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform $platform)
    {
        $platform->delete();
        return redirect()->back()->with('success', 'Platform successfully deleted');
    }
}
