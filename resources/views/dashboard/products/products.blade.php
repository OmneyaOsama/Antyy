@extends('dashboard.layout')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Products</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Manage Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <head>
<body>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
              <h3 class="card-title">Products Data</h3>
              <a class="btn btn-primary btn-sm" href="/products/addProduct">
                <i class="fa-solid fa-plus"></i>
                Add product
            </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product_Name </th>
                  <th>Product_Price</th>
                  <th>Product_Category</th>
                  <th>Product_Discount </th>
                  <th>Product_Amount </th>
                  <th>Product_Size</th>
                  <th>Product_Image</th>

                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>



         @foreach ($products as $product)


                <tr>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->category?->name  }}</td>
                  <td>{{ $product->discount }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>{{ $product->size }}</td>
                  <td><img src="{{ asset('/uploads/' . $product->image) }}" alt="{{ $product->name }}" style="width:100px"></td>


                  <td>
                         {{--  <a class="btn btn-primary btn-sm" href="{{ url("products" ,$product->id) }}">
                              <i class="fas fa-folder">
                              </i>
                              Details
                          </a>  --}}

                          <a class="btn btn-success btn-sm" href="">
                            <i class="fas fa-edit">
                            </i>
                            Edit
                        </a>

                          <a class="btn btn-danger btn-sm" href="{{ url("products/delete" ,$product->id) }}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a></td>

                </tr>

                @endforeach





                </tbody>
                <tfoot>
                <tr>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>





@endsection
