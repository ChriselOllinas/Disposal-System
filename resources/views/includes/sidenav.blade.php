 
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #07A231; ">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{asset('img/feutech.jpg')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <h style="color: black;">&nbsp;Dashboard</h>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="nav-header">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="nav-icon far fa-user"> <h style="color: black;">&nbsp;&nbsp;&nbsp;{{ Auth::user()->name }}</h5> </i>
        </div>
    </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="{{ route('newPDF') }}" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>New PDF</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('searchAsset') }}" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>Search for Fixed Asset</p>
            </a>
          </li>
          @if (  Auth::user()->user_type == 2 ||  Auth::user()->user_type == 1 )
          <li class="nav-item">
            <a href="{{ route('printPDF') }}" class="nav-link">
              <i class="nav-icon far fa-file-pdf"></i>
              <p>Print PDF</p>
            </a>
          </li>
          @endif
         @if (  Auth::user()->user_type == 1 )
          
          <li class="nav-item">
            <a href="{{ route('voidModule') }}" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>Void Request</p>
            </a>
          </li>
        @endif
        @if (  Auth::user()->user_type == 2 )
          
          <li class="nav-item">
            <a href="{{ route('validationModule')}}" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>Validation Module</p>
            </a>
          </li>
        @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
