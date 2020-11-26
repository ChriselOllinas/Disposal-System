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
                  <div class="input-group input-group-sm" style="width: 200px;">
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
                <form method="post"   action="{{ route('createPDF') }}">
                  {{ csrf_field() }}

                  @foreach ($item as $item)
                  
                 
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="item_pid" >Item PID</label>
                        <input type="text" name="item_pid" class="form-control"  value ="{{ $item->item_pid }}">
                      
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="item_serial">Serial Number</label>
                        <input name="item_serial" type="text" class="form-control" value ="{{ $item->item_serial }}" id="item_serial" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_brand">Brand</label>
                        <input type="text" name="item_brand" class="item_brand form-control" value ="{{ $item->item_brand }}" id="item_brand" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_roomnum">Room Number</label>
                        <input type="text" name="item_roomnum" class="form-control" value="{{ $item->item_roomnum }}" id="item_roomnum" >
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_model">Model</label>
                        <input type="text" name="item_model" class="form-control" value="{{ $item->item_model }}" id="item_model" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_type">Item Type</label>
                        <input type="text" name="item_type" class="form-control" value="{{ $item->equip_accessory }}" id="item_type" >
                      </div>
                    </div>
                  </div>
                   
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label for="item_desc">Item Description</label>
                        <input type="text" name="item_desc" class="form-control" value="{{ $item->item_desc }}" id="item_description" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="item_status">Item Status </label>
                        <select name="item_status" class="form-control" id="item_status" required>
                          <option></option>
                          <option>PENDING</option>
                        </select>
                        <!-- <input type="text" name="item_status" class="form-control" value="" id="item_status" required> -->
                      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="form-group">
                      
                      </div>
                    </div>
                    <div class="col-m-2">
                      <a href="{{ route('newPDF') }}" type="button" class="btn btn-block btn-outline-success"> Create New PDF</a>
                      <!-- <button type="button"  href=" " class="btn btn-block btn-outline-success">Create New PDF</button> -->
                    </div> &nbsp; &nbsp; 
                    <div class="col-s-2">
                      <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                  </div>
                 @endforeach
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