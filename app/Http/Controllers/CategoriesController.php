<?php

namespace App\Http\Controllers;

use App\Models\categories;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('categories')->get();
        return view('backend.categories', ['categoriesdata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $cname = Request::input('name');

     $data = ['name'=> $cname];
     DB::table('categories')->insert($data);

     return redirect('/dashboard/categories');

    }

    public function delete($id)
    {
        DB::table('categories')->where('Id', $id)->delete();
        return redirect('/dashboard/categories');
    }
    public function edit($id)
    {
        $data = DB::table('categories')->find($id);
        return view('backend.editcategory', ['category' => $data]);

    }

    public function update(Request $request, categories $categories)
    {
        $id = Request::input('id');
        $cname = Request::input('name');


        $update = ['name'=> $cname];

         DB::table('categories')->where('id', $id)->update($update);
              return redirect('/dashboard/categories');

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
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(categories $categories)
    {
        //
    }
}
