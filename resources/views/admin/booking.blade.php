@include('admin.navandside')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                  

                    <div class="container">
                        <h2 style="text-align: center; color: blue">Bookings</h2>



                        <table class="table table-striped table-hover " style="margin: 30px auto ;"  >

                            <thead>
                              <tr >
                                <th >#</th>
                                <th>User Name</th>
                                <th >User Id</th>
                                <th >Appointment Id</th>
                                <th >Department Name</th>
                                <th >Appointment Date</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                             @foreach ($data as $data )
                                  
                            
                              <tr>
                                <th scope="row">{{$data->id}}</th>
                                <td>{{$data->username}}</td>
                                <td>{{$data->user_id}}</td>
                              <td>{{$data->appointment_id}}</td>
                              <td>{{$data->department_name}}</td>
                              <td>{{$data->appointment_date}}</td>
                              <td><a href="{{route('deletebooking',$data->id)}}" class="btn btn-danger">Delete</a></td>
                                
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>

                    <!-- Content Row -->

                   

                  

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          @include('admin.footer')