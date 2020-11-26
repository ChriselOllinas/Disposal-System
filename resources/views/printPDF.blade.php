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
              <li class="breadcrumb-item ">Print PDF</li>
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
                <h3 class="card-title">Print PDF</h3>
                <br>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 460px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>

                      <th>PDF File Name</th>
                      <th>Created at</th>
                      <th>Item Status</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                 
                   @foreach ($pdf as $pdf)
                   @if($pdf->item_status == "Approved")
                    <tr>
                      <td> {{ $pdf->filename }} </td> 
                      <td> {{ $pdf->created_at }}</td>

                      <td> {{ $pdf->item_status }}</td>
                      <td> <a href="{{route('printPDFExtract',$pdf->id)}}" type="button" class="far fa-file-pdf btn btn-block btn-outline-success" > Download</a> </td>
                    </tr> 
                    @endif
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
