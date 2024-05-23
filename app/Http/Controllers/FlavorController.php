<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlavorController extends Controller
{
    public function index()
    {
        $flavors = Flavor::all();
        return view('flavors.index', compact('flavors'));
    }
    
    public function create()
    {
        return view('flavors.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
    
        Flavor::create($request->all());
        return redirect()->route('flavors.index');
    }
    
    public function edit(Flavor $flavor)
    {
        return view('flavors.edit', compact('flavor'));
    }
    
    public function update(Request $request, Flavor $flavor)
    {
        $request->validate([
            'name' => 'required'
        ]);
    
        $flavor->update($request->all());
        return redirect()->route('flavors.index');
    }
    
    public function destroy(Flavor $flavor)
    {
        $flavor->delete();
        return redirect()->route('flavors.index');
    }
    
}
