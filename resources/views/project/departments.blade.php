 <!-- TEAM -->



 @if ($data->count()>0)
 <section id="team" data-stellar-background-ratio="1">
     <div class="container">
     
          <div class="row">
          
 
               <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                         <h2 class="wow fadeInUp" data-wow-delay="0.1s"> Doctors</h2>
                    </div>
               </div>
 
               <div class="clearfix"></div>
 
               @foreach ($data as $data )
                    
             
               <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp " style="margin-bottom: 10px"  data-wow-delay="0.2s">
                         <img src="{{Storage::url($data->image)}}" style="margin: 0 auto; aspect-ratio:3/2" width="300px" height="300" class="img-responsive" alt="">
 
                              <div class="team-info ">
                                   <h3  style="text-align: center">{{$data->name}}</h3>
                                   <p style="text-align: center">{{$data->content}}</p>
 
                                   <form style="margin-left: 70px ; margin-bottom: 10px" action="{{url('/showAppointment')}}" method="post">
                                    @csrf
                                  
                                    <input type="text" name="department_id" value="{{$data->id}}" style="display: none">
                                    <input type="submit" value="show Appointment" style="margin: auto" class="btn btn-success">
                               </form>
                                 
                              </div>
 
                              
                    </div>
               </div>
 
               @endforeach
               
          </div>
     </div>
 </section>
     
 @else



 <section id="team" data-stellar-background-ratio="1">
     <div class="container">
     
          <div class="row">
          
 
               <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                         <h2 class="wow fadeInUp" data-wow-delay="0.1s"> Docotors</h2>
                    </div>
               </div>
 
               <div class="clearfix"></div>
               <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp " style="margin-bottom: 10px"  data-wow-delay="0.2s">
                         <img src="https://images.pexels.com/photos/6749769/pexels-photo-6749769.jpeg?auto=compress&cs=tinysrgb&w=600" style="margin: 0 auto; " width="300px" height="300" class="img-responsive" alt="">
 
                              <div class="team-info ">
                                   <h3  style="text-align: center">Ophthalmology</h3>
                                   <p style="text-align: center">Dr\Nada Sabry</p>
 
                                   <form style="margin-left: 70px ; margin-bottom: 10px" action="{{url('/showAppointment')}}" method="post">
                                        @csrf
                                      
                                   
                                        <input type="submit" value="show Appointment" style="margin: auto" class="btn btn-success">
                                   </form>
                                 
                              </div>
 
                              
                    </div>
               </div>




               <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp " style="margin-bottom: 10px"  data-wow-delay="0.2s">
                         <img src="https://images.pexels.com/photos/5998451/pexels-photo-5998451.jpeg?auto=compress&cs=tinysrgb&w=600" style="margin: 0 auto; " width="300px" height="300" class="img-responsive" alt="">
 
                              <div class="team-info ">
                                   <h3  style="text-align: center">Pediatrics</h3>
                                   <p style="text-align: center">Dr\Nehal Ali</p>
 
                                   <form style="margin-left: 70px ; margin-bottom: 10px" action="{{url('/showAppointment')}}" method="post">
                                        @csrf
                                      
                                   
                                        <input type="submit" value="show Appointment" style="margin: auto" class="btn btn-success">
                                   </form>
                                 
                              </div>
 
                              
                    </div>
               </div>
 


               <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp " style="margin-bottom: 10px"  data-wow-delay="0.2s">
                         <img src="https://images.pexels.com/photos/4769130/pexels-photo-4769130.jpeg?auto=compress&cs=tinysrgb&w=600" style="margin: 0 auto; " width="300px" height="300" class="img-responsive" alt="">
 
                              <div class="team-info ">
                                   <h3  style="text-align: center">General surgery</h3>
                                   <p style="text-align: center">Dr\Ahmed Gad</p>
 
                                   <form style="margin-left: 70px ; margin-bottom: 10px" action="{{url('/showAppointment')}}" method="post">
                                        @csrf
                                      
                                   
                                        <input type="submit" value="show Appointment" style="margin: auto" class="btn btn-success">
                                   </form>
                                 
                              </div>
 
                              
                    </div>
               </div>
 
               
               
          </div>
     </div>
 </section>
     






      
 @endif

