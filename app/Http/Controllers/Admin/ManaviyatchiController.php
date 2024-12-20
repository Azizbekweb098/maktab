<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manivaytachi;
use Illuminate\Http\Request;

class ManaviyatchiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manaviyat = Manivaytachi::all();
        return view('admin.manaviyat.index', compact('manaviyat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manaviyat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = time().''.$file->getClientOriginalExtension();
            $file->move('images/', $image_name);
            $requestData['image'] = $image_name;
        }
    
        Manivaytachi::create($requestData);
    
        return redirect()->route('manaviyatchi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
