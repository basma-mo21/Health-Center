        @include('admin.navandside')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        @inject('department', 'App\Models\User')
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$department->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i style="font-size: 170%" class="		fas fa-user-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @inject('appointment', 'App\Models\Appointment')
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Appointments</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$appointment->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i style="font-size: 170%" class="	fas fa-fw fa-table"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @inject('department', 'App\Models\Department')
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Departments</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$department->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i style="font-size: 170%" class="		fas fa-th-large"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        @inject('booking', 'App\Models\Booking')
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Bookings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$booking->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i style="font-size: 170%" class="	far fa-thumbs-up"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    

                     

                      
                    </div>

                    <!-- Content Row -->

                   

                  

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          @include('admin.footer')