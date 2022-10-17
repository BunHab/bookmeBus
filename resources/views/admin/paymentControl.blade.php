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
                        <a href="{{url('/admin/dashboard/payment')}}" class="nav-link active">
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



<div class="row">
    <div class="container-fluid">
        <div class="col-lg-12">


            <div class="card card-success">
                <div class="card-header border-0">
                    <h3 class="card-title">All Payments</h3>

                </div>
                <div class="card-body">
                    <table id='example1' class="table table-striped table-bordered table-hover table-valign-middle">
                        <thead>
                            <tr>
                                <th>Route</th>
                                <th>Date</th>
                                <th>First Class</th>
                                <th>Second Class</th>
                                <th>Capacity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                  <td>Fort Hammits to Aux Cursbur</td>
                                  <td>11-08-2020 - 6:30 PM</td>
                                  <td>$ 2380</td>
                                  <td>$ 0</td>
                                  <td>400 Seat(s) Available for First Class<hr/>994 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Treeblooms to Bridghamgascon</td>
                                  <td>11-08-2020 - 6:30 PM</td>
                                  <td>$ 680</td>
                                  <td>$ 0</td>
                                  <td>199 Seat(s) Available for First Class<hr/>492 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Fort Hammits to Aux Cursbur</td>
                                  <td>11-08-2020 - 6:30 PM</td>
                                  <td>$ 2380</td>
                                  <td>$ 0</td>
                                  <td>400 Seat(s) Available for First Class<hr/>994 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Treeblooms to Bridghamgascon</td>
                                  <td>11-08-2020 - 6:30 PM</td>
                                  <td>$ 680</td>
                                  <td>$ 0</td>
                                  <td>199 Seat(s) Available for First Class<hr/>492 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Hurstcracombe to Treeblooms</td>
                                  <td>13-08-2020 - 6:30 PM</td>
                                  <td>$ 0</td>
                                  <td>$ 8080</td>
                                  <td>192 Seat(s) Available for First Class<hr/>500 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Hurstcracombe to Treeblooms</td>
                                  <td>30-08-2020 - 11:00 AM</td>
                                  <td>$ 1080</td>
                                  <td>$ 0</td>
                                  <td>500 Seat(s) Available for First Class<hr/>1192 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Hurstcracombe to Treeblooms</td>
                                  <td>07-11-2020 - 10:24 PM</td>
                                  <td>$ 8200</td>
                                  <td>$ 0</td>
                                  <td>395 Seat(s) Available for First Class<hr/>748 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Hurstcracombe to Treeblooms</td>
                                  <td>07-11-2020 - 10:24 PM</td>
                                  <td>$ 8200</td>
                                  <td>$ 0</td>
                                  <td>395 Seat(s) Available for First Class<hr/>748 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>St Bawle to San Ghammea</td>
                                  <td>08-11-2020 - 3:13 PM</td>
                                  <td>$ 0</td>
                                  <td>$ 1410</td>
                                  <td>394 Seat(s) Available for First Class<hr/>780 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>St Bawle to San Ghammea</td>
                                  <td>15-11-2020 - 3:22 PM</td>
                                  <td>$ 0</td>
                                  <td>$ 5050</td>
                                  <td>18 Seat(s) Available for First Class<hr/>900 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>St Bawle to San Ghammea</td>
                                  <td>18-09-2021 - 09:00 AM</td>
                                  <td>$ 5260</td>
                                  <td>$ 0</td>
                                  <td>20 Seat(s) Available for First Class<hr/>896 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Urmkirkey to Longdale</td>
                                  <td>12-10-2021 - 09:00 AM</td>
                                  <td>$ 303</td>
                                  <td>$ 0</td>
                                  <td>500 Seat(s) Available for First Class<hr/>1198 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Rutherglen to Tylwaerdreath</td>
                                  <td>12-10-2021 - 11:10 AM</td>
                                  <td>$ 0</td>
                                  <td>$ 80</td>
                                  <td>394 Seat(s) Available for First Class<hr/>780 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Cirencester to Bournemouth</td>
                                  <td>12-10-2021 - 12:20 AM</td>
                                  <td>$ 0</td>
                                  <td>$ 51</td>
                                  <td>399 Seat(s) Available for First Class<hr/>850 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Dawsbury to Blencathra</td>
                                  <td>12-10-2021 - 10:59 PM</td>
                                  <td>$ 0</td>
                                  <td>$ 56</td>
                                  <td>19 Seat(s) Available for First Class<hr/>900 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Hurstcracombe to Treeblooms</td>
                                  <td>12-10-2021 - 11:02 AM</td>
                                  <td>$ 107</td>
                                  <td>$ 0</td>
                                  <td>400 Seat(s) Available for First Class<hr/>999 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Rutherglen to Tylwaerdreath</td>
                                  <td>12-10-2021 - 04:45 AM</td>
                                  <td>$ 0</td>
                                  <td>$ 228</td>
                                  <td>397 Seat(s) Available for First Class<hr/>850 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Rutherglen to Tylwaerdreath</td>
                                  <td>12-10-2021 - 04:45 AM</td>
                                  <td>$ 0</td>
                                  <td>$ 228</td>
                                  <td>397 Seat(s) Available for First Class<hr/>850 Seat(s) Available for Second Class</td>
                                  </tr><tr>
                                  <td>Vlinginia to Onaginia</td>
                                  <td>14-10-2021 - 10:00 AM</td>
                                  <td>$ 324</td>
                                  <td>$ 0</td>
                                  <td>250 Seat(s) Available for First Class<hr/>598 Seat(s) Available for Second Class</td>
                                  </tr>                            </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->

        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
<!-- /.col -->
</div>
<!-- /.row -->

</div>            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection