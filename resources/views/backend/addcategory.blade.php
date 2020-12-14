@extends('layouts.adminlayout')

@section('content')


<div class="container">

    <form class="form" action="/savecategory" method="post">
        @csrf

             <div class="form-group">
                <label for="">Name</label>
                <input type="text"class="form-control" name="name">
             </div>




              <div class="form-group">
                <input type="submit" class="btn btn-outline-primary" name="submit" value="Add Category">
              </div>

            </form>

  </div>


@endsection
