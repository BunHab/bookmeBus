@extends('layouts.admin.master')

@section('content')
    <!-- Navbar -->
    <nav class="main-header navbar  navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="#">Online Ticket Reservation System</a>

            </li>
        </ul>


        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-success elevation-4">
        <!-- Brand Logo -->
        <a href="admin.php" class="brand-link">

            <span class="brand-text font-weight-light">Sun 16, Oct 22</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('/assets/')}}/images/trainlg.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard')}}" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Home
                            </p>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/users')}}" class="nav-link 
                                                    ">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/schedule')}}" class="nav-link 
                                                    ">
                            <i class="nav-icon fas fa-calendar-day"></i>
                            <p>
                                Schedules
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/route')}}" class="nav-link      active">
                            <i class="nav-icon fas fa-route"></i>
                            <p>
                                Routes
                            </p>
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/operator')}}" class="nav-link      ">
                            <i class="nav-icon fas fa-train"></i>
                            <p>
                                Trains 
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link      ">
                            <i class="nav-icon fas fa-file-pdf"></i>
                            <p>
                                Report
                            </p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/payment')}}" class="nav-link      ">
                            <i class="nav-icon fas fa-dollar-sign"></i>
                            <p>
                                Payments
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link      ">
                            <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                                Feedbacks
                            </p>
                        </a>
                    </li>

                    


                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
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
                        <h1 class="m-0 text-dark"> Administrator Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        
<div class="content">
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">
                            All Routes</h3>
                        <div class='float-right'>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#add">
                                Add New Route &#128645;
                            </button></div>
                    </div>

                    <div class="card-body">

                        <table id="example1" style="align-items: stretch;"
                            class="table table-hover w-100 table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>1</td>
                                    <td>St Bawle</td>
                                    <td>San Ghammea</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit3">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="3" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit3">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing St Bawle to San Ghammea &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="3" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="St Bawle" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="San Ghammea" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>2</td>
                                    <td>Hurstcracombe</td>
                                    <td>Treeblooms</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit4">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="4" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit4">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Hurstcracombe to Treeblooms &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="4" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Hurstcracombe" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Treeblooms" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>3</td>
                                    <td>Cape Onbac</td>
                                    <td>Ringkya</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit5">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="5" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit5">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Cape Onbac to Ringkya &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="5" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Cape Onbac" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Ringkya" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>4</td>
                                    <td>Treeblooms</td>
                                    <td>Bridghamgascon</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit6">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="6" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit6">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Treeblooms to Bridghamgascon &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="6" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Treeblooms" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Bridghamgascon" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>5</td>
                                    <td>Fort Hammits</td>
                                    <td>Aux Cursbur</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit7">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="7" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit7">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Fort Hammits to Aux Cursbur &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="7" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Fort Hammits" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Aux Cursbur" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>6</td>
                                    <td>Addersfield</td>
                                    <td>Glenarm</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit8">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="8" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit8">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Addersfield to Glenarm &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="8" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Addersfield" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Glenarm" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>7</td>
                                    <td>Peterbrugh</td>
                                    <td>Ffestiniog</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit9">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="9" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit9">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Peterbrugh to Ffestiniog &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="9" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Peterbrugh" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Ffestiniog" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>8</td>
                                    <td>Dawsbury</td>
                                    <td>Blencathra</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit10">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="10" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit10">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Dawsbury to Blencathra &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="10" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Dawsbury" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Blencathra" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>9</td>
                                    <td>Rutherglen</td>
                                    <td>Tylwaerdreath</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit11">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="11" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit11">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Rutherglen to Tylwaerdreath &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="11" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Rutherglen" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Tylwaerdreath" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>10</td>
                                    <td>Cirencester</td>
                                    <td>Bournemouth</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit12">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="12" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit12">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Cirencester to Bournemouth &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="12" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Cirencester" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Bournemouth" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>11</td>
                                    <td>Laencaster</td>
                                    <td>Fournemouth</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit13">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="13" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit13">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Laencaster to Fournemouth &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="13" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Laencaster" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Fournemouth" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>12</td>
                                    <td>Urmkirkey</td>
                                    <td>Longdale</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit14">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="14" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit14">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Urmkirkey to Longdale &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="14" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Urmkirkey" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Longdale" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>13</td>
                                    <td>Vlinginia</td>
                                    <td>Onaginia</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit15">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="15" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit15">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Vlinginia to Onaginia &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="15" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Vlinginia" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Onaginia" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>14</td>
                                    <td>Onaginia</td>
                                    <td>Epleburgh</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit16">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="16" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit16">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Onaginia to Epleburgh &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="16" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Onaginia" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Epleburgh" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>15</td>
                                    <td>Epleburgh</td>
                                    <td>Kapwood</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit17">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="17" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit17">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Epleburgh to Kapwood &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="17" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Epleburgh" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Kapwood" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>16</td>
                                    <td>Vlinginia</td>
                                    <td>Oroville</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit18">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="18" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit18">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Vlinginia to Oroville &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="18" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Vlinginia" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Oroville" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>17</td>
                                    <td>Vlinginia</td>
                                    <td>Inaschester</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit19">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="19" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit19">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Vlinginia to Inaschester &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="19" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Vlinginia" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Inaschester" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                                <tr>
                                    <td>18</td>
                                    <td>Pnhom Penh</td>
                                    <td>Siem Reap</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit20">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="20" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit20">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Pnhom Penh to Siem Reap &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="20" required id="">
                                                    <p>From : <input type="text" class="form-control"
                                                            value="Pnhom Penh" name="start"
                                                            required id="">
                                                    </p>
                                                    <p> To : <input type="text" class="form-control"
                                                            value="Siem Reap" name="stop"
                                                            required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Route"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
</div>

<div class="modal fade" id="add">
<div class="modal-dialog modal-lg">
    <div class="modal-content" align="center">
        <div class="modal-header">
            <h4 class="modal-title">Add New Route &#128649;
            </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="post">

                <table class="table table-bordered">

                    <tr>
                        <th>From</th>
                        <td><input type="text" class="form-control" name="start" required id=""></td>
                    </tr>
                    <tr>
                        <th>To</th>
                        <td><input type="text" class="form-control" name="stop" required id="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">

                            <input class="btn btn-info" type="submit" value="Add Route" name='submit'>
                        </td>
                    </tr>
                </table>
            </form>



        </div>

    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection