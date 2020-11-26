@extends('includes.footer')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item ">Search Asset</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Asset</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 200px;">
                    <form class="input-group" type="get" action="{{ route ('search') }}">
                    <input type="text" name="asset_search" class="form-control float-right" placeholder="Search Fixed Asset">

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
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Item PID</th>
                      <th>Item Brand</th>
                      <th>Item Model</th>
                      <th>Item Type</th>
                      <th>Item Serial Number</th>
                      <th>Item Room Number</th>
                      <th>Item Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($item as $item)
                    <tr>
                      <td> {{ $item->item_pid }} </td> 
                      <td> {{ $item->item_brand }} </td>
                      <td> {{ $item->item_model }} </td>
                      <td> {{ $item->equip_accessory }} </td>
                      <td> {{ $item->item_serial }} </td>
                      <td> {{ $item->item_roomnum }} </td>
                       <td> {{ $item->item_desc }} </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
     
    </section>
    <!-- /.content -->
</div>
@endsection
@extends('includes.sidenav')
@extends('includes.header')
