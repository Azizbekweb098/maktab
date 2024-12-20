<?php

namespace App\Http\Controllers\Admin\ahborot;

use App\Http\Controllers\Controller;
use App\Models\Geleriya;
use Illuminate\Http\Request;

class GeleriyaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Geleriya::all();
        return view('admin.axborot.galeriya.index', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.axborot.galeriya.create');
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
    
        Geleriya::create($requestData);
    
        return redirect()->route('galeriya.index');
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