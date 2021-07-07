@extends('master')

@section('title', 'Admin Dashboard')
@section('dashboard-title', 'Dashboard')
@section('breadcrumb-title', 'Dashboard Information')

@section('stylesheet')
    <!-- <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@8.10.0/dist/sweetalert2.css" rel="stylesheet"> -->
@endsection

@section('container')
 <section class="content">
        <div class="container-fluid">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Filter</h3>
            </div>

            <div class="card-body">
              <form role="form" action="#" method="get">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>&nbsp;&nbsp; Name</label>
                      <div class="col-md-12 col-sm-12">
                        <select required="" class="form-control">
                          <option value="">----select name----</option>
                          <option value="">Imran</option>
                          <option value="">Suborna</option>
                          <option value="">Lisa</option>
                          <option value="">Laboni</option>
                          <option value="">Rita</option>
                          <option value="">Keya</option>
                          <option value="">Mila</option>
                          <option value="">Lima</option>
                          <option value="">Maya</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>&nbsp;&nbsp; Location</label>
                      <div class="col-md-12 col-sm-12">
                        <select required="" class="form-control">
                          <option value="">----select location----</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>&nbsp;&nbsp; Status</label>
                      <div class="col-md-12 col-sm-12">
                        <select required="" class="form-control">
                          <option value="">----select status----</option>
                          <option value="">Gift Pending</option>
                          <option value="">Gift Taken</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>&nbsp;&nbsp; Phone</label>
                      <div class="col-md-12 col-sm-12">
                        <select required="" class="form-control">
                          <option value="">----select phone----</option>
                          <option value="">01711050777</option>
                          <option value="">01782229997</option>
                          <option value="">01865444522</option>
                          <option value="">01913932363</option>
                          <option value="">01313849254</option>
                          <option value="">01864932479</option>
                          <option value="">01792643266</option>
                          <option value="">01969250588</option>
                          <option value="">01715776705</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>&nbsp;&nbsp; Entry Date</label>
                      <div class="col-md-12 col-sm-12">
                        <input type="date" id="from_date" required="" class="form-control">
                      </div>
                    </div>
                  </div>

                </div>
              </form>
            </div>


            <div class="card-footer">
              <a href=""><button type="submit" id="generate" class="btn btn-success">Generate</button></a>
            </div>


          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header bg-gray-light">
                  <h3 class="card-title">Customer List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th>Gift Status</th>
                        <th>DOB</th>
                        <th>Entry Date</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>1</td>
                        <td> Imran</td>
                        <td>01711050777</td>
                        <td> 1</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>23 June 2021</td>
                        <td> 14 June 2021 03:32 PM</td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td> Imran</td>
                        <td>01782229997</td>
                        <td> 1</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>22 June 2021</td>
                        <td> 14 June 2021 03:30 PM</td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td> Suborna</td>
                        <td>01865444522</td>
                        <td> 2</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>23 June 2021</td>
                        <td> 01 June 2021 11:22 PM</td>
                      </tr>

                      <tr>
                        <td>4</td>
                        <td> Lisa</td>
                        <td>01913932363</td>
                        <td> 2</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>26 May 1994</td>
                        <td> 14 June 2021 03:32 PM</td>
                      </tr>

                      <tr>
                        <td>5</td>
                        <td> Laboni</td>
                        <td>01313849254</td>
                        <td> 2</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>23 February 1998</td>
                        <td> 01 June 2021 11:19 PM</td>
                      </tr>

                      <tr>
                        <td>6</td>
                        <td> Rita</td>
                        <td>01864932479</td>
                        <td> 3</td>
                        <td> <span class="badge badge-success">Gift Taken</span> </td>
                        <td>23 September 2001</td>
                        <td> 01 June 2021 11:17 PM</td>
                      </tr>

                      <tr>
                        <td>7</td>
                        <td>Keya</td>
                        <td>01792643266</td>
                        <td> 3</td>
                        <td> <span class="badge badge-success">Gift Taken</span> </td>
                        <td>18 May 2021</td>
                        <td> 30 May 2021 07:13 PM</td>
                      </tr>

                      <tr>
                        <td>8</td>
                        <td> Mila</td>
                        <td>01969250588</td>
                        <td> 3</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>11 May 2021</td>
                        <td> 30 June 2021 07:12 PM</td>
                      </tr>

                      <tr>
                        <td>9</td>
                        <td> Lima</td>
                        <td>01715776705</td>
                        <td> 3</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>05 May 2021</td>
                        <td> 30 May 2021 0701 PM</td>
                      </tr>

                      <tr>
                        <td>10</td>
                        <td> Maya</td>
                        <td>01984899741</td>
                        <td> 3</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>20 May 2021</td>
                        <td> 30 May 2021 07:00 PM</td>
                      </tr>

                      <tr>
                        <td>11</td>
                        <td> Morjina</td>
                        <td>01774710080</td>
                        <td> 3</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>13 May 2021</td>
                        <td> 14 June 2021 06:49 PM</td>
                      </tr>

                      <tr>
                        <td>12</td>
                        <td> Morjina</td>
                        <td>01918696228</td>
                        <td> 3</td>
                        <td> <span class="badge badge-danger">Gift Pending</span> </td>
                        <td>19 May 2021</td>
                        <td> 30 May 2021 05:03 PM</td>
                      </tr>

                  </tbody></table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.col -->
          </div>
        </div><!-- /.container-fluid -->
      </section>
@endsection

@section('custom_script')


@endsection