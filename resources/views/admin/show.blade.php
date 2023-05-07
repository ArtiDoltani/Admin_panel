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
                             {{-- Add book --}}  
							<li class="nav-item">
                                <a href="{{route('admin.add')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Book</p>
                                </a>
                            </li>
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
        
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Books List</h1>
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
                <div class="container">
                    {{-- {{URL:: current()}} --}}
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Book_id</td>
                                <td>Title</td>
                                <td>Author</td>
                                <td>Type</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $value )
                                 <tr>
                                <td>{{$value->book_id}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->author}}</td>
                                <td>{{$value->type}}</td>
                                <td>
                                    <a href="{{route('admin.destroy',['id'=>$value->book_id])}}">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                                    <td>
                                        <a href="{{route('admin.edit',['id'=>$value->book_id])}}">
                                            <button class="btn btn-primary ">Edit</button>
                                        </a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                
                    </table>
                </div>
        
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