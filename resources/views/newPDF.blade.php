@extends('includes.footer')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item ">New PDF</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

            <div class="card ">
              <div class="card-header">
                <h3 class="col-sm-9 card-title">New PDF</h3>
                  <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 300px;">
                    <form class="input-group" type="get" action="{{ route('newPDFCreate') }}">
                    <input type="text" name="pdf_search" class="form-control float-right" placeholder="Enter Item PID" required>

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                    </form>
                  </div>
                </div>

                <br>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <form method="" action="">
                  
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="item_pid" >Item PID</label>
                        <input type="text" name="item_pid" class="form-control" disabled="true" value="">
                       
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="item_serial">Serial Number</label>
                        <input type="text" class="form-control" placeholder="" id="item_serial" disabled="true">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_brand">Brand</label>
                        <input type="text" class="item_brand form-control" placeholder="" id="item_brand" disabled="true">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_roomnum">Room Number</label>
                        <input type="text" class="form-control" placeholder="" id="item_roomnum" disabled="true">
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_model">Model</label>
                        <input type="text" class="form-control" placeholder="" id="item_model" disabled="true">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_type">Item Type</label>
                        <input type="text" class="form-control" placeholder="" id="item_type" disabled="true">
                      </div>
                    </div>
                  </div>
                   
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label for="item_description">Item Description</label>
                        <input type="text" class="form-control" placeholder="" id="item_description" disabled="true">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_status">Item Status </label>
                        <input type="text" class="form-control" placeholder="" id="item_status" disabled="true">
                      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="form-group">
                      
                      </div>
                    </div>
                    <!-- <div class="col-sm-2">
                      <a href="{{ route('newPDF') }}" type="button" class="btn btn-block btn-outline-success"> Create New PDF</a>
                      <!-- <button type="button"  href=" " class="btn btn-block btn-outline-success">Create New PDF</button> -->
                   <!--  </div> -->                     
                  </div>
                  
                </form>
              </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection



@extends('includes.sidenav')
@extends('includes.header')


