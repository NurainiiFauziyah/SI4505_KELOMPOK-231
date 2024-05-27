<?php

namespace App\Http\Controllers;

use App\Models\Kamuspenyakit;
use Illuminate\Http\Request;

class KamusController extends Controller
{
    public function index (){
        $kamuspenyakit = Kamuspenyakit::all();
        return view ('kamuspenyakit.index', compact(['kamuspenyakit']));
    }
    public function create(){
        return view ('kamuspenyakit.create');
    }

    public function store(Request $request){
        // dd($request->except(['_token','submit']));
        Kamuspenyakit::create($request->except(['_token','submit']));
        return redirect ('/kamuspenyakit');
        
    }
    public function edit($id){
        $kamuspenyakit = Kamuspenyakit::find($id);
        
        return view ('kamuspenyakit.edit', compact(['kamuspenyakit']));
        
    }
    public function update($id, Request $request){
        $kamuspenyakit = Kamuspenyakit::find($id);
        $kamuspenyakit->update ($request->except(['_token','submit']));
        return redirect ('/kamuspenyakit');
    }
    public function destroy ($id){
        $kamuspenyakit = Kamuspenyakit::find($id);
        $kamuspenyakit->delete();
        return redirect ('/kamuspenyakit');
    }
}
