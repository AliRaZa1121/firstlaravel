@extends('layouts.adminlayout')

@section('content')


<div class="container">

    <form class="form" action="/updatecategory" method="post">
        @csrf

        <input type="hidden"class="form-control" name="id" value="{{ $category->Id }}">

             <div class="form-group">
                <label for="">Name</label>
                <input type="text"class="form-control" name="name" value="{{ $category->Name }}">
             </div>

              <div class="form-group">
                <input type="submit" class="btn btn-outline-primary" name="submit" value="Save Changes">
              </div>

            </form>

  </div>


@endsection
