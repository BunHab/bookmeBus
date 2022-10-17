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
                        <a href="{{url('/admin/dashboard/route')}}" class="nav-link">
                            <i class="nav-icon fas fa-route"></i>
                            <p>
                                Routes
                            </p>
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/operator')}}" class="nav-link active">
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
                            All Trains</h3>
                        <div class='float-right'>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#add">
                                Add New Train &#128645;
                            </button></div>
                    </div>

                    <div class="card-body">

                        <table id="example1" style="align-items: stretch;"
                            class="table table-hover w-100 table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Train Name</th>
                                    <th>First Class Seat</th>
                                    <th>Second Class Seat</th>
                                    <th style="width: 30%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>1</td>
                                    <td>Kano Rails</td>
                                    <td>30</td>
                                    <td>800</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit1">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="1" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Kano Rails</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="1" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="Kano Rails"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="30"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="800"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
                                    <td>British Railways</td>
                                    <td>20</td>
                                    <td>900</td>
                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit2">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="2" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit2">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing British Railways</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="2" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="British Railways"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="20"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="900"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
                                    <td>Wester Railways</td>
                                    <td>10</td>
                                    <td>600</td>
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
                                                <h4 class="modal-title">Editing Wester Railways</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="3" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="Wester Railways"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="10"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="600"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
                                    <td>Lagos Rails</td>
                                    <td>400</td>
                                    <td>1000</td>
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
                                                <h4 class="modal-title">Editing Lagos Rails</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="7" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="Lagos Rails"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="400"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="1000"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
                                    <td>Marble Railways</td>
                                    <td>395</td>
                                    <td>780</td>
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
                                                <h4 class="modal-title">Editing Marble Railways</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="8" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="Marble Railways"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="395"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="780"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
                                    <td>Renfee R</td>
                                    <td>400</td>
                                    <td>850</td>
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
                                                <h4 class="modal-title">Editing Renfee R</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="9" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="Renfee R"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="400"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="850"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
                                    <td>Venice Express</td>
                                    <td>500</td>
                                    <td>1200</td>
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
                                                <h4 class="modal-title">Editing Venice Express</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="10" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="Venice Express"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="500"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="1200"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
                                    <td>Orient Express</td>
                                    <td>200</td>
                                    <td>500</td>
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
                                                <h4 class="modal-title">Editing Orient Express</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="11" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="Orient Express"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="200"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="500"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
                                    <td>Phantom Express</td>
                                    <td>250</td>
                                    <td>600</td>
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
                                                <h4 class="modal-title">Editing Phantom Express</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="12" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="Phantom Express"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="250"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="600"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
                                    <td>Marshland Express</td>
                                    <td>300</td>
                                    <td>500</td>
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
                                                <h4 class="modal-title">Editing Marshland Express</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="13" required id="">
                                                    <p>Train Name : <input type="text" class="form-control"
                                                            name="name" value="Marshland Express"
                                                            required minlength="3" id=""></p>
                                                    <p>First Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="300"
                                                            name="first_seat" required id="">
                                                    </p>
                                                    <p> Class Capacity : <input type="number" min='0'
                                                            class="form-control"
                                                            value="500"
                                                            name="second_seat" required id="">
                                                    </p>
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Train"
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
            <h4 class="modal-title">Add New Train &#128646;
            </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="post">

                <table class="table table-bordered">
                    <tr>
                        <th>Train Name</th>
                        <td><input type="text" class="form-control" name="name" required minlength="3" id=""></td>
                    </tr>
                    <tr>
                        <th>First Class Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="first_seat" required id=""></td>
                    </tr>
                    <tr>
                        <th>Second Class Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="second_seat" required id="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">

                            <input class="btn btn-info" type="submit" value="Add Train" name='submit'>
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