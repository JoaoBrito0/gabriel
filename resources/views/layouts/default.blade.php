@include('includes.head')

@include('includes.header')

  <!-- Start feature Area -->
    @yield('feature')
  <!-- End feature Area -->

  <!--================ Feature Product Area =================-->
    @yield('featured-products')
 <!--================ End Feature Product Area =================-->

 <!--================ Offer Area =================-->
    @yield('offers')
  <!--================ End Offer Area =================-->
    
  <!--================ New Product Area =================-->
    @yield('new-products')
  <!--================ End New Product Area =================-->

  <!--================ Inspired Product Area =================-->
    @yield('inspired-products')
  <!--================ End Inspired Product Area =================-->

  <!--================ Start Blog Area =================-->
    @yield('blog')

    @include('includes.footer')
