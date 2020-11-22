@include('layouts.parts.header')

@include('layouts.parts.css')

@include('layouts.parts.nav')
<body>
    
    @yield('main')
      <!--========== start hero section =============-->
  
     
      @yield('aside')
      
      <!--========== start services section =============-->
      @yield('services')
      
      <!--========== start about us section =============-->
     
      <!--========== start portfolio section =============-->
      @yield('profile')
      
      <!--========== start Testimonial section =============-->
      
      <!--========== start Team section =============-->
      
      <!--========== start pricing section =============-->
      
      <!--========== start blogs section =============-->
      @yield('blogs')
      
      <!--========== start contact us section =============-->
      @yield('contact')
     
    </main>
    <!--========== start footer section =============-->
    @include('layouts.parts.footer')