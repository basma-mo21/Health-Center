<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body  id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
        <div class="spinner">

             <span class="spinner-rotate"></span>
             
        </div>
   </section>


       <!-- MENU -->
       <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

             <div class="navbar-header">
                  <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                       <span class="icon icon-bar"></span>
                       <span class="icon icon-bar"></span>
                       <span class="icon icon-bar"></span>
                  </button>

                  <!-- lOGO TEXT HERE -->
                  <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
             </div>

             <!-- MENU LINKS -->
             <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                       <li><a href="#top" class="smoothScroll">Home</a></li>
                       <li><a href="#team" class="smoothScroll">Doctors</a></li>
                       <li><a href="#news" class="smoothScroll">News</a></li>
                       <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                      
                  </ul>
             </div>

        </div>
   </section>


<div class="container ">
     <h2 class="text-center mt-1 " style="color: greenyellow"> Appointments</h2>


          @if ($data->count()>0)
               
          <table class="table table-striped table-hover " style="margin: 30px auto ;"  >

               <thead>
                 <tr >
                   <th >#</th>
                   <th>Department name</th>
                   <th >Appointment date</th>
                   <th >Taken</th>
                 </tr>
               </thead>
               <tbody>
                @foreach ($data as $data )
                     
               
                 <tr>
                   <th scope="row">{{$data->id}}</th>
                   <td>{{$data->department_name}}</td>
                   <td>{{$data->appointment_date}}</td>
                   @if ($data->taken ==1)
                   <td> you can’t book this</td>
                   @else
                   <td>
                     <form action="{{url('/bookAppointment')}}" method="POST">
                          @csrf
                          <input type="text" style="display: none" value="{{$data->id}}" name="appointment_id" >
                          <input type="text" style="display: none"  value="{{$data->department_name}}" name="department_name" >
                          <input type="text" style="display: none"  value="{{$data->appointment_date}}" name="appointment_date" >
                         
                          <input type="submit" value="Book" class="btn btn-primary">
                     </form>
                   </td>
                       
                   @endif
                   
                 </tr>
                 @endforeach
               </tbody>
             </table>
           

          @else


          <h2 class="text-center"> No dates have been set yet</h2>
               
          @endif

 
</div>


















    
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>