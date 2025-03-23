<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<link rel="stylesheet" href="{{ asset("admin") }}/plugins/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="{{ asset("admin") }}/css/adminlte.min.css">
		<link rel="stylesheet" href="{{ asset("admin") }}/css/custom.css">

        
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                <img src=" {{  asset('admin') }}/img/avatar5.png" class='img-circle elevation-2' width="40" height="40" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                <h4 class="h4 mb-0"><strong>Dr. John Doe</strong></h4>
                <div class="mb-3">doctor@example.com</div>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-user-md mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item text-danger">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>


<script src=" {{  asset('admin') }}/plugins/jquery/jquery.min.js"></script>
<script src=" {{  asset('admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src=" {{  asset('admin') }}/js/adminlte.min.js"></script>