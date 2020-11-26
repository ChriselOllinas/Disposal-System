@extends('includes.footer')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <div class="row content-header">
      <div class="col-md-6 ">
        &nbsp;&nbsp;<img src="img/feu_logo.png" style="width: 400px;">
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
      </div>
    </div>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row justify-content-around ">
          <div class="col-11 ">
            <h5 id="blacklabel"><b>Computer Services Office</b></h5>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      
      <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th colspan="3"><center>PROPERTY DISPOSAL FORM</center></th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Create PDF</th>
          <td>Create a PDF if the item needs action</td>
          <td><i class="nav-icon far fa-edit"></i></td>
          
        </tr>
        <tr>
          <th scope="row">Search for Fixed Asset</th>
          <td>Look for asset using PID of item</td>
          <td><i class="nav-icon fas fa-search"></i></td>
          
        </tr>
        <tr>
          <th scope="row">Print PDF</th>
          <td>Print for approved request</td>
          <td><i class="nav-icon far fa-file-pdf"></i></td>
        </tr>
        <tr>
          <th scope="row">Action for Request</th>
          <td>Can be dissaproved or approved</td>
          <td><i class="nav-icon far fa-clipboard"></i></td>
        </tr>
      </tbody>
    </table>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@extends('includes.sidenav')
@extends('includes.header')

