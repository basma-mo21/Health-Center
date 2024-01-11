@include('admin.navandside')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                  

                    <div class="container">
                        <h2 style="text-align: center; color: blue">Add Appointments</h2>

                        <form action="{{route('storeappointment')}}" method="post" >
                            @csrf
                            <label style="color: black; font-size: 20px" >Department Name</label>
                            <br>
                            <input type="text"   name="department_name"  class="form-control" required style="margin-bottom: 30px" >

                            <br>
                            <label style="color: black; font-size: 20px" >Department Id</label>
                            <br>
                            <input type="number"   name="department_id"  class="form-control" required style="margin-bottom: 30px" >
                            <br>
                            <label style="color: black; font-size: 20px" >Appointment Date</label>
                            <input type="datetime-local"   name="appointment_date"  class="form-control" required >

                            <br>

                            <br>
                            <label style="color: black; font-size: 20px" >Taken</label>
                            <input type="number"   name="taken"  class="form-control" required >

                            <br>
                            <button type="submit" class="btn btn-primary"> Send</button>
                        </form>
                       
                    </div>

                    <!-- Content Row -->

                   

                  

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          @include('admin.footer')