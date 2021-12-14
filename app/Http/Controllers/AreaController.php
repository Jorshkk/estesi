<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index(){

        $area = Area::all();
        return view('area.index',compact('area'));
    }

    public function create(){

        return view('area.create');
    }
    public function store(Request $request, Area $area){
        $area->nombre_area = $request->nombre_area;
        $area->save();
        return redirect()->route('area.index');
    }
    public function edit($id_area){
        $area = Area::find($id_area);
        return view('area.edit',compact('area'));

    }
    public function update(Request $request, Area $area){

        $area->nombre_area = $request->nombre_area;
        $area->save();
        return redirect()->route('area.index');
    }
    public function destroy(Area $area){
        $area->delete();

        return redirect()->route('area.index');
    }
}
