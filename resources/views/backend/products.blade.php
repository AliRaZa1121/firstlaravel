@extends('layouts.adminlayout')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <a href="/dashboard/addproducts" class="btn btn-primary">Add Products</a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                  <th>Id</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Details</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($productsdata as $row )

                <tr>
                <td>{{ $row->Id }}</td>
                <td>{{ $row->Name }}</td>
                <td>{{ $row->Price }}</td>
                <td>{{ $row->Details }}</td>
                <td>
                    <a href="/deleteproduct/{{ $row->Id }}"><button class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                    <a href="/editproduct/{{ $row->Id }}"><button class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                </td>
               </tr>
                @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
@endsection
