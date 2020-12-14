@extends('layouts.adminlayout')

@section('content')


<div class="container">

    <form class="form" action="saveproducts" method="post" enctype="multipart/form-data">
        @csrf

             <div class="form-group">
                <label for="">Name</label>
                <input type="text"class="form-control" name="name">
             </div>

             <div class="form-group">
               <label for="">Price</label>
               <input type="number"class="form-control" name="price">
            </div>

            <div class="form-group">
                <label for="">Details</label>
                <input type="text"class="form-control" name="details">
             </div>

             <div class="form-group">
                <label for="">Image</label>
                <input type="file"class="form-control" name="img">
             </div>


              <div class="form-group">
                <input type="submit" class="btn btn-outline-primary" name="submit" value="Add Product">
              </div>

            </form>

  </div>


@endsection
