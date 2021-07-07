@extends('master')

@section('title', 'Create Customer')
@section('dashboard-title', 'Create Customer')
@section('breadcrumb-title', 'Create Customer')

@section('stylesheet')
    <!-- <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@8.10.0/dist/sweetalert2.css" rel="stylesheet"> -->
@endsection

@section('container')
<section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header bg-gray-light">
                  <h3 class="card-title">Customer Create</h3>
                  <a href="{{route('mycustomer')}}" class="float-right btn btn-success" style="margin-right: 1rem;"> <i class="fas fa-list mr-2"></i> Customer List</a>

                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" placeholder="Enter name">
                        </div>
                      </div>
        
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Phone</label>
                          <input type="number" class="form-control" placeholder="Enter phone">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button data-toggle="modal" data-target="#exampleModalCenter" type="submit" class="btn btn-success">Submit</button>
                    </div>
              </div>
            </div>

             <!-- modal -->
             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <h3>Customer registered successfully!</h3>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal -->


            <!-- /.col -->
          </div>
        </div><!-- /.container-fluid -->
      </section>
@endsection

@section('custom_script')


@endsection