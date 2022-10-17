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
        <a href="{{url('/admin/dashboard')}}" class="brand-link">

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
                        active                            ">
                            <i class="nav-icon fas fa-calendar-day"></i>
                            <p>
                                Schedules
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/route')}}" class="nav-link      ">
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
                            All Dynamic Schedules</h3>
                        <div class='float-right'>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#add">
                                Add New One-Time Schedule &#128645;
                            </button> - - - <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#add2">
                                Add Range Schedule &#128645;
                            </button>
                        </div>
                    </div>

                    <div class="card-body">

                        <table id="example1" style="align-items: stretch;"
                            class="table table-hover w-100 table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Train</th>
                                    <th>Route</th>
                                    <th>F.C Fee</th>
                                    <th>S.C Fee</th>
                                    <th>Total Bookings</th>
                                    <th>Date/Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Phantom Express</td>
                                    <td>Vlinginia to Onaginia</td>
                                    <td>$ 160</td>
                                    <td>$ 72</td>
                                    <td>250 Seat(s) Available for First Class<hr/>598 Seat(s) Available for Second Class</td>
                                    <td>14-10-2021 / 10:00 AM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit104">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="104" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit104">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="104" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option selected="selected" value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option  selected="selected" value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="160"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="72"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-10-14">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="10:00" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Renfee R</td>
                                    <td>Rutherglen to Tylwaerdreath</td>
                                    <td>$ 120</td>
                                    <td>$ 75</td>
                                    <td>397 Seat(s) Available for First Class<hr/>850 Seat(s) Available for Second Class</td>
                                    <td>12-10-2021 / 04:45 AM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit103">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="103" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit103">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="103" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option selected="selected" value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option  selected="selected" value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="120"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="75"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-10-12">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="04:45" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Lagos Rails</td>
                                    <td>Hurstcracombe to Treeblooms</td>
                                    <td>$ 105</td>
                                    <td>$ 65</td>
                                    <td>400 Seat(s) Available for First Class<hr/>999 Seat(s) Available for Second Class</td>
                                    <td>12-10-2021 / 11:02 AM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit102">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="102" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit102">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="102" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option selected="selected" value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option  selected="selected" value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="105"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="65"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-10-12">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="11:02" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>British Railways</td>
                                    <td>Dawsbury to Blencathra</td>
                                    <td>$ 105</td>
                                    <td>$ 55</td>
                                    <td>19 Seat(s) Available for First Class<hr/>900 Seat(s) Available for Second Class</td>
                                    <td>12-10-2021 / 10:59 PM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit101">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="101" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit101">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="101" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option selected="selected" value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option  selected="selected" value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="105"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="55"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-10-12">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="22:59" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Renfee R</td>
                                    <td>Cirencester to Bournemouth</td>
                                    <td>$ 100</td>
                                    <td>$ 50</td>
                                    <td>399 Seat(s) Available for First Class<hr/>850 Seat(s) Available for Second Class</td>
                                    <td>12-10-2021 / 12:20 AM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit100">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="100" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit100">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="100" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option selected="selected" value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option  selected="selected" value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="100"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="50"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-10-12">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="12:20" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Marble Railways</td>
                                    <td>Rutherglen to Tylwaerdreath</td>
                                    <td>$ 166</td>
                                    <td>$ 79</td>
                                    <td>394 Seat(s) Available for First Class<hr/>780 Seat(s) Available for Second Class</td>
                                    <td>12-10-2021 / 11:10 AM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit99">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="99" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit99">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="99" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option selected="selected" value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option  selected="selected" value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="166"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="79"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-10-12">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="11:10" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Urmkirkey to Longdale</td>
                                    <td>$ 150</td>
                                    <td>$ 85</td>
                                    <td>500 Seat(s) Available for First Class<hr/>1198 Seat(s) Available for Second Class</td>
                                    <td>12-10-2021 / 09:00 AM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit98">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="98" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit98">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="98" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option selected="selected" value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option  selected="selected" value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="150"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="85"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-10-12">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="09:00" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Addersfield to Glenarm</td>
                                    <td>$ 185</td>
                                    <td>$ 90</td>
                                    <td>200 Seat(s) Available for First Class<hr/>500 Seat(s) Available for Second Class</td>
                                    <td>11-10-2021 / 11:05 AM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit97">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="97" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit97">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="97" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option selected="selected" value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option  selected="selected" value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="185"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="90"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-10-11">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="11:05" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>British Railways</td>
                                    <td>St Bawle to San Ghammea</td>
                                    <td>$ 130</td>
                                    <td>$ 90</td>
                                    <td>20 Seat(s) Available for First Class<hr/>896 Seat(s) Available for Second Class</td>
                                    <td>18-09-2021 / 09:00 AM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit26">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="26" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit26">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="26" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option selected="selected" value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option  selected="selected" value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="130"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="90"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-09-18">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="09:00" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Kano Rails</td>
                                    <td>St Bawle to San Ghammea</td>
                                    <td>$ 65</td>
                                    <td>$ 55</td>
                                    <td>30 Seat(s) Available for First Class<hr/>800 Seat(s) Available for Second Class</td>
                                    <td>11-06-2021 / 05:37 AM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit25">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="25" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit25">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="25" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option selected="selected" value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option  selected="selected" value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="65"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="55"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2021-06-11">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="05:37" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>British Railways</td>
                                    <td>St Bawle to San Ghammea</td>
                                    <td>$ 130</td>
                                    <td>$ 95</td>
                                    <td>18 Seat(s) Available for First Class<hr/>900 Seat(s) Available for Second Class</td>
                                    <td>15-11-2020 / 3:22 PM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit24">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="24" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit24">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="24" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option selected="selected" value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option  selected="selected" value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="130"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="95"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-11-15">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="15:22" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Wester Railways</td>
                                    <td>St Bawle to San Ghammea</td>
                                    <td>$ 100</td>
                                    <td>$ 85</td>
                                    <td>10 Seat(s) Available for First Class<hr/>600 Seat(s) Available for Second Class</td>
                                    <td>07-11-2020 / 3:10 PM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit23">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="23" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit23">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="23" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option selected="selected" value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option  selected="selected" value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="100"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="85"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-11-07">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="15:10" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Marble Railways</td>
                                    <td>St Bawle to San Ghammea</td>
                                    <td>$ 130</td>
                                    <td>$ 70</td>
                                    <td>394 Seat(s) Available for First Class<hr/>780 Seat(s) Available for Second Class</td>
                                    <td>08-11-2020 / 3:13 PM</td>

                                    <td>
                                        <form method="POST">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit22">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="22" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit22">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="22" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option selected="selected" value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option  selected="selected" value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="130"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="70"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-11-08">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="15:13" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Marble Railways</td>
                                    <td>Hurstcracombe to Treeblooms</td>
                                    <td>$ 165</td>
                                    <td>$ 100</td>
                                    <td>395 Seat(s) Available for First Class<hr/>748 Seat(s) Available for Second Class</td>
                                    <td>07-11-2020 / 10:24 PM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="20" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option selected="selected" value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option  selected="selected" value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="165"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="100"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-11-07">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="22:24" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Venice Express</td>
                                    <td>Hurstcracombe to Treeblooms</td>
                                    <td>$ 180</td>
                                    <td>$ 100</td>
                                    <td>500 Seat(s) Available for First Class<hr/>1192 Seat(s) Available for Second Class</td>
                                    <td>30-08-2020 / 11:00 AM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="18" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option selected="selected" value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option  selected="selected" value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="180"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="100"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-30">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="11:00" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Renfee R</td>
                                    <td>St Bawle to San Ghammea</td>
                                    <td>$ 180</td>
                                    <td>$ 115</td>
                                    <td>400 Seat(s) Available for First Class<hr/>850 Seat(s) Available for Second Class</td>
                                    <td>23-08-2020 / 11:00 AM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="17" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option selected="selected" value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option  selected="selected" value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="180"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="115"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-23">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="11:00" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>British Railways</td>
                                    <td>Fort Hammits to Aux Cursbur</td>
                                    <td>$ 265</td>
                                    <td>$ 180</td>
                                    <td>20 Seat(s) Available for First Class<hr/>900 Seat(s) Available for Second Class</td>
                                    <td>16-08-2020 / 11:00 AM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="16" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option selected="selected" value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option  selected="selected" value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="265"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="180"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-16">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="11:00" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>Venice Express</td>
                                    <td>Cape Onbac to Ringkya</td>
                                    <td>$ 310</td>
                                    <td>$ 150</td>
                                    <td>500 Seat(s) Available for First Class<hr/>1200 Seat(s) Available for Second Class</td>
                                    <td>17-08-2020 / 6:30 PM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="12" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option selected="selected" value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option  selected="selected" value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="310"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="150"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-17">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="18:30" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>19</td>
                                    <td>Renfee R</td>
                                    <td>Fort Hammits to Aux Cursbur</td>
                                    <td>$ 180</td>
                                    <td>$ 100</td>
                                    <td>400 Seat(s) Available for First Class<hr/>850 Seat(s) Available for Second Class</td>
                                    <td>16-08-2020 / 6:30 PM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="11" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option selected="selected" value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option  selected="selected" value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="180"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="100"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-16">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="18:30" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>20</td>
                                    <td>Lagos Rails</td>
                                    <td>Cape Onbac to Ringkya</td>
                                    <td>$ 160</td>
                                    <td>$ 100</td>
                                    <td>400 Seat(s) Available for First Class<hr/>1000 Seat(s) Available for Second Class</td>
                                    <td>15-08-2020 / 6:30 PM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="10" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option selected="selected" value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option  selected="selected" value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="160"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="100"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-15">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="18:30" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>21</td>
                                    <td>Orient Express</td>
                                    <td>St Bawle to San Ghammea</td>
                                    <td>$ 100</td>
                                    <td>$ 40</td>
                                    <td>200 Seat(s) Available for First Class<hr/>500 Seat(s) Available for Second Class</td>
                                    <td>14-08-2020 / 6:30 PM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="9" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option selected="selected" value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option  selected="selected" value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="100"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="40"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-14">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="18:30" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>22</td>
                                    <td>Orient Express</td>
                                    <td>Hurstcracombe to Treeblooms</td>
                                    <td>$ 130</td>
                                    <td>$ 60</td>
                                    <td>192 Seat(s) Available for First Class<hr/>500 Seat(s) Available for Second Class</td>
                                    <td>13-08-2020 / 6:30 PM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="8" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option selected="selected" value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option  selected="selected" value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="130"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="60"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-13">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="18:30" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>23</td>
                                    <td>Orient Express</td>
                                    <td>Cape Onbac to Ringkya</td>
                                    <td>$ 130</td>
                                    <td>$ 45</td>
                                    <td>200 Seat(s) Available for First Class<hr/>500 Seat(s) Available for Second Class</td>
                                    <td>12-08-2020 / 6:30 PM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="7" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option selected="selected" value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option  selected="selected" value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="130"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="45"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-12">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="18:30" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>24</td>
                                    <td>Orient Express</td>
                                    <td>Treeblooms to Bridghamgascon</td>
                                    <td>$ 200</td>
                                    <td>$ 85</td>
                                    <td>199 Seat(s) Available for First Class<hr/>492 Seat(s) Available for Second Class</td>
                                    <td>11-08-2020 / 6:30 PM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="6" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option  value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option selected="selected" value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option  selected="selected" value='6'>Treeblooms to Bridghamgascon</option><option   value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="200"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="85"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-11">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="18:30" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
                                    <td>25</td>
                                    <td>Lagos Rails</td>
                                    <td>Fort Hammits to Aux Cursbur</td>
                                    <td>$ 180</td>
                                    <td>$ 80</td>
                                    <td>400 Seat(s) Available for First Class<hr/>994 Seat(s) Available for Second Class</td>
                                    <td>11-08-2020 / 6:30 PM</td>

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
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="" method="post">
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="5" required id="">

                                                    <p>Train : <select class="form-control" name="train_id" required
                                                            id="">
                                                            <option value="">Select Train</option>
                                                            <option  value='1'>Kano Rails</option><option  value='2'>British Railways</option><option  value='3'>Wester Railways</option><option selected="selected" value='7'>Lagos Rails</option><option  value='8'>Marble Railways</option><option  value='9'>Renfee R</option><option  value='10'>Venice Express</option><option  value='11'>Orient Express</option><option  value='12'>Phantom Express</option><option  value='13'>Marshland Express</option>                                                            </select>
                                                    </p>

                                                    <p>Route : <select class="form-control" name="route_id" required
                                                            id="">
                                                            <option value="">Select Route</option>
                                                            <option   value='3'>St Bawle to San Ghammea</option><option   value='4'>Hurstcracombe to Treeblooms</option><option   value='5'>Cape Onbac to Ringkya</option><option   value='6'>Treeblooms to Bridghamgascon</option><option  selected="selected" value='7'>Fort Hammits to Aux Cursbur</option><option   value='8'>Addersfield to Glenarm</option><option   value='9'>Peterbrugh to Ffestiniog</option><option   value='10'>Dawsbury to Blencathra</option><option   value='11'>Rutherglen to Tylwaerdreath</option><option   value='12'>Cirencester to Bournemouth</option><option   value='13'>Laencaster to Fournemouth</option><option   value='14'>Urmkirkey to Longdale</option><option   value='15'>Vlinginia to Onaginia</option><option   value='16'>Onaginia to Epleburgh</option><option   value='17'>Epleburgh to Kapwood</option><option   value='18'>Vlinginia to Oroville</option><option   value='19'>Vlinginia to Inaschester</option><option   value='20'>Pnhom Penh to Siem Reap</option>                                                            </select>
                                                    </p>
                                                    <p>
                                                        First Class Charge : <input class="form-control"
                                                            type="number" value="180"
                                                            name="first_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Second Class Charge : <input class="form-control"
                                                            type="number" value="80"
                                                            name="second_fee" required id="">
                                                    </p>
                                                    <p>
                                                        Date :
                                                        <input type="date" class="form-control"
                                                            onchange="check(this.value)" id="date"
                                                            placeholder="Date" name="date" required
                                                            value="2020-08-11">

                                                    </p>
                                                    <p>
                                                        Time : <input class="form-control" type="time"
                                                            value="18:30" name="time"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
            <h4 class="modal-title">Add New Schedule &#128649;
            </h4>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        Train : <select class="form-control" name="train_id" required id="">
                            <option value="">Select Train</option>
                            <option value='1'>Kano Rails</option><option value='2'>British Railways</option><option value='3'>Wester Railways</option><option value='7'>Lagos Rails</option><option value='8'>Marble Railways</option><option value='9'>Renfee R</option><option value='10'>Venice Express</option><option value='11'>Orient Express</option><option value='12'>Phantom Express</option><option value='13'>Marshland Express</option>                            </select>

                    </div>
                    <div class="col-sm-6">
                        Route : <select class="form-control" name="route_id" required id="">
                            <option value="">Select Route</option>
                            <option value='3'>St Bawle to San Ghammea</option><option value='4'>Hurstcracombe to Treeblooms</option><option value='5'>Cape Onbac to Ringkya</option><option value='6'>Treeblooms to Bridghamgascon</option><option value='7'>Fort Hammits to Aux Cursbur</option><option value='8'>Addersfield to Glenarm</option><option value='9'>Peterbrugh to Ffestiniog</option><option value='10'>Dawsbury to Blencathra</option><option value='11'>Rutherglen to Tylwaerdreath</option><option value='12'>Cirencester to Bournemouth</option><option value='13'>Laencaster to Fournemouth</option><option value='14'>Urmkirkey to Longdale</option><option value='15'>Vlinginia to Onaginia</option><option value='16'>Onaginia to Epleburgh</option><option value='17'>Epleburgh to Kapwood</option><option value='18'>Vlinginia to Oroville</option><option value='19'>Vlinginia to Inaschester</option><option value='20'>Pnhom Penh to Siem Reap</option>                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        First Class Charge : <input class="form-control" type="number" name="first_fee" required
                            id="">
                    </div>
                    <div class="col-sm-6">

                        Second Class Charge : <input class="form-control" type="number" name="second_fee" required
                            id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        Date : <input class="form-control" onchange="check(this.value)" type="date" name="date"
                            required id="date">
                    </div>
                    <div class="col-sm-6">

                        Time : <input class="form-control" type="time" name="time" required id="">
                    </div>
                </div>
                <hr>
                <input type="submit" name="submit" class="btn btn-success" value="Add Schedule"></p>
            </form>

            <script>
            function check(val) {
                val = new Date(val);
                var age = (Date.now() - val) / 31557600000;
                var formDate = document.getElementById('date');
                if (age > 0) {
                    alert("Past/Current Date not allowed");
                    formDate.value = "";
                    return false;
                }
            }
            </script>

        </div>

    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>


<div class="modal fade" id="add2">
<div class="modal-dialog modal-lg">
    <div class="modal-content" align="center">
        <div class="modal-header">
            <h4 class="modal-title">Add Range Schedule &#128649;
            </h4>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        Train : <select class="form-control" name="train_id" required id="">
                            <option value="">Select Train</option>
                            <option value='1'>Kano Rails</option><option value='2'>British Railways</option><option value='3'>Wester Railways</option><option value='7'>Lagos Rails</option><option value='8'>Marble Railways</option><option value='9'>Renfee R</option><option value='10'>Venice Express</option><option value='11'>Orient Express</option><option value='12'>Phantom Express</option><option value='13'>Marshland Express</option>                            </select>

                    </div>
                    <div class="col-sm-6">
                        Route : <select class="form-control" name="route_id" required id="">
                            <option value="">Select Route</option>
                            <option value='3'>St Bawle to San Ghammea</option><option value='4'>Hurstcracombe to Treeblooms</option><option value='5'>Cape Onbac to Ringkya</option><option value='6'>Treeblooms to Bridghamgascon</option><option value='7'>Fort Hammits to Aux Cursbur</option><option value='8'>Addersfield to Glenarm</option><option value='9'>Peterbrugh to Ffestiniog</option><option value='10'>Dawsbury to Blencathra</option><option value='11'>Rutherglen to Tylwaerdreath</option><option value='12'>Cirencester to Bournemouth</option><option value='13'>Laencaster to Fournemouth</option><option value='14'>Urmkirkey to Longdale</option><option value='15'>Vlinginia to Onaginia</option><option value='16'>Onaginia to Epleburgh</option><option value='17'>Epleburgh to Kapwood</option><option value='18'>Vlinginia to Oroville</option><option value='19'>Vlinginia to Inaschester</option><option value='20'>Pnhom Penh to Siem Reap</option>                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        First Class Charge : <input class="form-control" type="number" name="first_fee" required>
                    </div>
                    <div class="col-sm-6">

                        Second Class Charge : <input class="form-control" type="number" name="second_fee" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        From Date : <input class="form-control" onchange="check(this.value)" type="date"
                            name="from_date" required>
                    </div>
                    <div class="col-sm-6">
                        End Date : <input class="form-control" onchange="check(this.value)" type="date"
                            name="to_date" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> Every :
                        <select class="form-control" name="every">
                            <option value="Day">Day</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                    </div>
                    <div class="col-sm-6">

                        Time : <input class="form-control" type="time" name="time" required id="">
                    </div>
                </div>
                <hr>
                <input type="submit" name="submit2" class="btn btn-success" value="Add Schedule"></p>
            </form>

            <script>
            function check(val) {
                val = new Date(val);
                var age = (Date.now() - val) / 31557600000;
                var formDate = document.getElementById('date');
                if (age > 0) {
                    alert("You are using a past/current date!");
                    val.value = "";
                    return false;
                }
            }
            </script>

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