{{-- dashboard --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | Dashboard</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href={{url("frontend/plugins/fontawesome-free/css/all.min.css")}}>
        <link rel="stylesheet" href={{url("frontend/css/adminlte.min.css?v=3.2.0")}}>
        <link rel="stylesheet" href={{url("frontend/plugins/summernote/summernote-bs4.min.css")}}>
        <link rel="stylesheet" href={{url("frontend/css/custom.css")}}>        
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>                    
                </ul>                         
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link bg-white" style="height: 57px;">
			<h4>Admin Panel</h4>
					<!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
				  </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                           {{-- Add book --}}  
							<li class="nav-item">
                                <a href="{{route('admin.add')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Book</p>
                                </a>
                            </li>
                            {{-- Show books list --}}
							<li class="nav-item">
                                <a href="{{route('admin.show')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Show Books</p>
                                </a>
                            </li>
							
						{{-- Logout	   --}}
                            <li class="nav-item">
                                <a href="{{route('admin.logout')}}" class="nav-link">
                                    <i class='fas fa-sign-out-alt nav-icon'></i>

                                    <p>Logout</p>
                                </a>
                            </li>                          
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content  h-100"">
                    <div class="container-fluid  h-100"">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
							<div class="col-md-12 welcome-panel text-center">								
                                <div>
                                    <h1>Welcome To Admin Panel</h1>
                                    <p class="card-text">
                                        Choose options from left panel.
                                    </p>                                  
                                </div> 
							</div>                            
                        </div>
                        <!-- /.row -->
                        <!-- /.row (main row) -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
           
      
        
        <script src={{url("frontend/plugins/jquery/jquery.min.js")}}></script>

        <script src={{url("frontend/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>

        <script src={{url("frontend/js/adminlte.min.js?v=3.2.0")}}></script>
        <!-- Summernote -->
        <script src={{url("frontend/plugins/summernote/summernote-bs4.min.js")}}></script>
    </body>
</html>
                    {{-- try here --}}
                    