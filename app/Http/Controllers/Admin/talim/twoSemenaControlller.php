<?php

namespace App\Http\Controllers\Admin\talim;

use App\Http\Controllers\Controller;
use App\Models\two_smena;
use Illuminate\Http\Request;

class twoSemenaControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $two_smena = two_smena::all();
        return view('admin.talim.2-smena.index', compact('two_smena'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.talim.2-smena.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        if($request->hasFile('file')){
            $file = $request->file('file');
            $image_name = time().''.$file->getClientOriginalExtension();
            $file->move('images/', $image_name);
            $requestData['file'] = $image_name;
        }
    
        two_smena::create($requestData);
    
        return redirect()->route('smena-2.index');
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
