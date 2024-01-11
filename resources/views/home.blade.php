


    @include('project.header')


    @include('project.about')

    <div class="container-lg" style="margin: 0 auto ;">
        @if(Session::has('message'))
        <p class="alert {{Session::get('alert-class','alert-info')}}"  >{{Session::get('message')}}</p>
    @endif

    @include('project.departments')

   @include('project.news')

     
  @include('project.contact')        


   @include('project.footer')


