@extends('dashboard.layout')

@section('content')


<div class="container">
    <div class="row ">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Card 1</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Card 2</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Card 4</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
    </div>

                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="content-wrapper">


                    <!-- Main content -->
                    <section class="content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                  <thead>
                                  <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                      Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                  </tr>
                                  <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                      Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                  </tr>
                                  <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                      Explorer 5.5
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>A</td>
                                  </tr>
                                  <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                      Explorer 6
                                    </td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>A</td>
                                  </tr>
                                  <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td>A</td>
                                  </tr>
                                  <tr>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td>A</td>
                                  </tr>
                                  <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                  </tr>
                                  <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                  </tr>

                                  </tbody>
                                  <tfoot>
                                  <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                  </tr>
                                  </tfoot>
                                </table>
                              </div>






@endsection
