<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Capacity;
use App\Stock;
use App\Category;
use App\Vehicle;
use App\Manufacturer;
use DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        
        $arr['stocks'] = Stock::all();
    	 return view('stock.stock.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $arr['stock'] = null;
        // $arr['brand'] = DB::table('brands')->pluck('id');
        // $arr['capacity'] = DB::table('capacities')->pluck('capacity_name');
        // $arr['category'] = DB::table('categories')->pluck('code');
        // $arr['manufacturer'] = DB::table('manufacturers')->pluck('year');

        $arr['brand'] = Brand::all();
        $arr['category'] = Category::all();
        $arr['capacity'] = Capacity::all();
        $arr['manufacturer'] = Manufacturer::all();
        return view('stock.stock.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Stock $stock) 
    {
        $stock->brand_id = $request->brand_id;
        $stock->category_id = $request->category_id;
        $stock->capacity_id = $request->capacity_id;
        $stock->manufacturer_id = $request->manufacturer_id;
        $stock->qty = $request->qty;
        $stock->color = $request->color;
        $stock->description = $request->description;
        $stock->save();
        return redirect()->route('stock.index');
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
    public function edit(Stock $stock) 
    {
        $arr['stock'] =$stock;        
        $arr['brand'] = Brand::all();
        $arr['category'] = Category::all();
        $arr['capacity'] = Capacity::all();
        $arr['manufacturer'] = Manufacturer::all();
        return view('stock.stock.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock) 
    {
        $stock->brand_id = $request->brand_id;
        $stock->category_id = $request->category_id;
        $stock->capacity_id = $request->capacity_id;
        $stock->manufacturer_id = $request->manufacturer_id;
        $stock->qty = $request->qty;
        $stock->color = $request->color;
        $stock->description = $request->description;
        $stock->save();
        return redirect()->route('stock.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock) 
    {
        $stock->delete();
        return redirect()->route('stock.index');
    }
}
