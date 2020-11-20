@extends('layouts.adminlayout')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

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
              </tr>
            </thead>
            <tbody>

                @foreach ($productsdata as $row )

                <tr>
                    <td>{{ $row->Id }}</td>
                <td>{{ $row->Name }}</td>
                <td>{{ $row->Price }}</td>
                <td>{{ $row->Details }}</td>
               </tr>
                @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
@endsection