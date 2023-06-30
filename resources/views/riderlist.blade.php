
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
 
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('images/main.png') }}" alt="AdminLTELogo" height="200" width="200">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/adminhome" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->


                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('images/main.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">PATRON</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('images/admin.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Jamil Zilani</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="/adminhome" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="/adminevent" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Event
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/adminriderasp" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Rider Applications


                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="/adminvolunteerasp" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Volunteer Applications

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="/admindonateinfo" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Donate Information

                                </p>
                            </a>

                        </li>
                        


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                            </ol>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Ride Request List</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Rider Location</th>
                                        <th>Target Location</th>
                                        <th>Distance</th>
                                        <th>Status</th>
                                        <th>Map</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $da )
                                    <tr>

                                        <td>
                                            {{$da->name}}
                                        </td>
                                        <td>{{$da->phone}}</td>
                                        <td>
                                            <?php
                                          
                                               
                                               $apiKey = 'AIzaSyA_1WnWHIkFTsO2Idzkc48hSgYqNK246vo';
                                             $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng={$da->lan},{$da->longt}&key={$apiKey}";

                                             $client = new GuzzleHttp\Client();
                                              $response = $client->get($url);

                                             $data = json_decode($response->getBody(), true);

                                             if ($data['status'] === 'OK') {
                                                 $address = $data['results'][0]['formatted_address'];
                                                  echo $address;
                                                    }

                                            ?>


                                           



                                        </td>
                                        <td>{{$da->faddress}}</td>

                                        <td> <?php

                                            $floatlong = (float)$da->longt;
                                            $floatflong = (float)$da->flong;
                                            $lan=(float)$da->lan;
                                            $flan=(float)$da->flan;
    
                                          $theta = $floatlong - $floatflong;
    
                                         $miles = (sin(deg2rad($lan))) * sin(deg2rad($flan)) + (cos(deg2rad($lan)) * cos(deg2rad($flan)) * cos(deg2rad($theta)));
                                           $miles = acos($miles);
                                          $miles = rad2deg($miles);
                                          $milesz=$miles * 60 * 1.1515;
           
                                            $finalkm=$milesz*1.609344;
                                                echo$finalkm;
                                                echo" km";
           
                                                ?></td>
                                                <td>{{$da->status}}</td>
                                                <td><a href="/showmap/{{$da->id}}"><button type="button" class="btn btn-primary">Show Map</button></a></td>

                                                <td><a href="/riderasp/{{$da->id}}/{{$da->fid}}"><button type="button" class="btn btn-success">Accept</button></a></td>

                                    </tr>
                                        
                                    @endforeach
                                    





                                </tbody>
                            </table>
                        </div>
            </section>



            <!-- Main Footer -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2023 <a href="">Patron</a>.</strong>
                All rights reserved.

            </footer>
        </div>


       














        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>


      
        <!-- Bootstrap -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        
        <!-- overlayScrollbars -->
        <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
       
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
       
       
        <script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
        
        <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
        
        <script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
        
        <script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
        <!-- ChartJS -->
       
        <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

        <!-- AdminLTE for demo purposes -->

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
       
        <script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
</body>

</html>

