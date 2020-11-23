@extends('layouts.adminlayout')

@section('content')


<div class="container">

    <form class="form" action="" method="post">
        @csrf

             <div class="form-group">
                <label for="">Name</label>
                <input type="text"class="form-control" name="name" value="{{ $product->Name }}">
             </div>

             <div class="form-group">
               <label for="">Price</label>
               <input type="number"class="form-control" name="price" value="{{ $product->Price }}">
            </div>

            <div class="form-group">
                <label for="">Details</label>
                <input type="text"class="form-control" name="details" value="{{ $product->Details }}">
             </div>




              <div class="form-group">
                <input type="submit" class="btn btn-outline-primary" name="submit" value="Add Product">
              </div>

            </form>

  </div>


@endsection
