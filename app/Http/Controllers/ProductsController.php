<?php

namespace App\Http\Controllers;

use App\Models\Products;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('products')->get();
        return view('backend.products', ['productsdata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $pname = Request::input('name');
     $ppric = Request::input('price');
     $pdetails = Request::input('details');

     $data = ['name'=> $pname , 'price'=> $ppric, 'details'=> $pdetails];
     DB::table('products')->insert($data);

     return redirect('/dashboard/products');

    }
    public function delete($id)
    {
        DB::table('products')->where('Id', $id)->delete();
        return redirect('/dashboard/products');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('products')->find($id);
        return view('backend.editproduct', ['product' => $data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Request::input('id');
        $pname = Request::input('name');
        $ppric = Request::input('price');
        $pdetails = Request::input('details');

        $update = ['name'=> $pname , 'price'=> $ppric, 'details'=> $pdetails];

         DB::table('products')->where('id', $id)->update($update);
              return redirect('/dashboard/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {

    }
}
