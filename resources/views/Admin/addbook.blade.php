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
                                <a href="{{route('admin.dashboard')}}" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            
							{{-- <li class="nav-item">
                                <a href="{{route('admin.store')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Book</p>
                                </a>
                            </li> --}}
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
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container ">
                        {{-- Add book --}}
      
           {{-- <form action="{{route('admin.add')}}" method="post"> --}}
            <form action="{{$url}}" method="post">
           @csrf
           <h1 class="text-center text-primary">
          {{$title}}
           </h1>
           <div class="form-row">
             <div class="form-group col-md-6">
            
               <label for="inputtitle">Book Title</label>
               <input type="text" class="form-control" id="" placeholder="Title" name="name"
                value=  "{{$value->name}}"
                >
             </div>
             <div class="form-group col-md-6">
               <label for="inputtype">Type</label>
               <input type="text" class="form-control" id="" placeholder="Type" name="type"
                value="{{$value->type}}"
                >
             </div>
           </div>
           <div class="form-group">
               <label for="inputAuthor">Author</label>
               <input type="text" class="form-control" id="" placeholder="Author" name="author" 
               value="{{$value->author}}"
               >
             </div>
           <button type="submit" class="btn btn-primary">{{$title}}</button>
         </form>
                   </div>
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                {{-- <h1 class="m-0">Books List</h1> --}}
                            </div>
                            <!-- /.col -->
                            {{-- <div class="col-sm-6">
                                <a href="{{route('admin.store')}}">
                                    <button type="submit" value="add" class="btn btn-primary "> Add Book</button>
                                </a>
                               
                            </div> --}}
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <!-- Main content -->
                
                {{-- ----new-- --}}

        
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        
        <script src={{url("frontend/plugins/jquery/jquery.min.js")}}></script>

        <script src={{url("frontend/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>

        <script src={{url("frontend/js/adminlte.min.js?v=3.2.0")}}></script>
        <!-- Summernote -->
        <script src={{url("frontend/plugins/summernote/summernote-bs4.min.js")}}></script>
    </body>
</html>