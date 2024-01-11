@include('admin.navandside')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                  

                    <div class="container">
                        <h2 style="text-align: center; color: blue">Departments</h2>
                        <a href="{{route('adddepartments')}}" style="margin: 10px " class="btn btn-danger"> Add Department</a>


                        <table class="table table-striped table-hover " style="margin: 30px auto ;"  >

                            <thead>
                              <tr >
                                <th >#</th>
                                <th>Name</th>
                                <th >Content</th>
                                <th >Image</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                             @foreach ($data as $data )
                                  
                            
                              <tr>
                                <th scope="row">{{$data->id}}</th>
                                <td>{{$data->name}}</td>
                                <td>{{$data->content}}</td>
                              <td><img height="200px" width="200px" src="{{Storage::url($data->image)}}" alt=""></td>
                              <td><a href="{{url('deletedepartments',$data->id)}}" class="btn btn-danger">Delete</a></td>
                                
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