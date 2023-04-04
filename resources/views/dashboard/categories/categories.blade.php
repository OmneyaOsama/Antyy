@extends('dashboard.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Categories</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Manage Categories</li>

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
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="card-title">Categories Data</h3>
              <a class="btn btn-primary btn-sm" href="/categories/addCategory">
                <i class="fa-solid fa-plus"></i>
                Add Category
            </a>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Category_Image</th>
                  <th>Category_Name </th>
                  <th>Category_Description</th>

                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>



         @foreach ($categories as $category)


                <tr>
                    <td><img src="{{ asset('/uploads/' . $category->image) }}" alt="{{ $category->name }}" style="width:150px">
                    </td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->description }}</td>


                  <td class="d-flex align-items-center m-5 justify-content-around">
                         <a class="btn btn-success btn-sm" href="{{ url("categories/edit" ,$category->id) }}">
                              <i class="fas fa-edit">
                              </i>
                              Edit
                          </a>

                          <a class="btn btn-danger btn-sm" href="{{ url("categories/delete" ,$category->id) }}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>

                  </td>

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
