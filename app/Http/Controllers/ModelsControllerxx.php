<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['models'] = Models::all();
    	 return view('stock.models.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $arr['brand'] = Brand::all();   // models table eka join wenawa
      //  return view('stock.models.create')->with($arr);
      return view('stock.models.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Models $models)
    {
        $models->code = $request->code;
        $models->name = $request->name;
        $models->description = $request->description;
        // $models->brand_id = $request->brand_id;
        // $models->brand_id = $request->brand_id;
       // $models->  = $request->brand_id;
        $models->save();
        return redirect()->route('models.index');
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
    public function edit(Models $models)
    {
        $arr['models'] = $models;
        return view('stock.models.edit')->with($arr);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, Models $models)
    {
        $models->code = $request->code;
        $models->name = $request->name;
        $models->description = $request->description;
        $models->save();
        return redirect()->route('models.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Models::destroy($id);
        return redirect()->route('models.index');
    }
}
