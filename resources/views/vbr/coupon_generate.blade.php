@extends('master')

@section('title', 'Coupon Generate')
@section('dashboard-title', 'Coupon Generate')
@section('breadcrumb-title', 'Coupon Generate')

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
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>&nbsp;&nbsp; Coupon Code</label>
                    <div class="col-md-12 col-sm-12">
                      <select required="" class="form-control">
                        <option value="">----select Coupon Code----</option>
                        <option value="">BSH@KSS0171</option>
                        <option value="">BSH@KSS0171</option>
                        <option value="">BSH@KSS0171</option>
                        <option value="">BSH@KSS0171</option>
                        <option value="">BSH@KSS0171</option>
                        <option value="">BSH@KSS0171</option>
                        <option value="">BSH@KSS0171</option>
                        <option value="">BSH@KSS0171</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>&nbsp;&nbsp; Status</label>
                    <div class="col-md-12 col-sm-12">
                      <select required="" class="form-control">
                        <option value="">----select location----</option>
                        <option value="">Used</option>
                        <option value="">Not Used</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>&nbsp;&nbsp; Assigned</label>
                    <div class="col-md-12 col-sm-12">
                      <select required="" class="form-control">
                        <option value="">----select Assigned----</option>
                        <option value="">Imran</option>
                        <option value="">Jui</option>
                        <option value="">Hasan</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>&nbsp;&nbsp; Date</label>
                    <div class="col-md-12 col-sm-12">
                      <input type="date" required="" class="form-control">
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
                  <h3 class="card-title">All Coupons</h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Coupon Code</th>
                      <th>Status</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>1</td>
                        <td>BSH@KSS0171</td>
                        <td> <span class="badge badge-danger">Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BSH@KSS0321</td>
                        <td> <span class="badge badge-danger">Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>BSH@KSS0173</td>
                        <td> <span class="badge badge-danger">Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>BSH@KSS0171</td>
                        <td> <span class="badge badge-danger">Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>BSH@KSS0171</td>
                        <td> <span class="badge badge-success">Not Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>BSH@KSS0171</td>
                        <td> <span class="badge badge-success">Not Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>BSH@KSS0171</td>
                        <td> <span class="badge badge-success">Not Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>BSH@KSS0171</td>
                        <td> <span class="badge badge-success">Not Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>BSH@KSS0171</td>
                        <td> <span class="badge badge-success">Not Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>BSH@KSS0171</td>
                        <td> <span class="badge badge-danger">Used</span> </td>
                        <td> 14 June 2021 03:32 PM</td>
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