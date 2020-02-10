<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  
  <body>
<div class="body">
    @include('partials._nav')    

      @include('partials._messages')
       

      @yield('content')

     
      @include('partials._footer')
  <a id="back-to-top"><i class="fa fa-chevron-up"></i></a>  
   <!-- end of .container --> 
</div>
        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>
