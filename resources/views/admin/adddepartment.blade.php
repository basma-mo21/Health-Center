@include('admin.navandside')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                  

                    <div class="container">
                        <h2 style="text-align: center; color: blue">Add Departments</h2>

                        <form action="{{route('storedepartment')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label style="color: black; font-size: 20px" >Name</label>
                            <br>
                            <input type="text"   name="name"  class="form-control" required style="margin-bottom: 30px" >

                            <br>
                            <label style="color: black; font-size: 20px" >Content</label>
                            <br>
                            <textarea name="content"  cols="5" class="form-control"></textarea>
                            <br>
                            <label style="color: black; font-size: 20px" >Image</label>
                            <input type="file"   name="image"  class="form-control" required >

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