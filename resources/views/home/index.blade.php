<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
      @media (prefers-reduced-motion: no-preference) {
        * {
          scroll-behavior: smooth;
        }
      }
      .nav-item.active a {
        color: #31CCC1; 
        border-top: 1px solid #31CCC1;
      }

      .nav-item a {
        transition: background-color 0.3s, color 0.3s; /* Smooth transition */
      }
    </style>
</head>

<body>
  <div>
  @if (Route::has('login'))
  @auth
  @include('home.user_dashboard')
  @else
      <!-- header section starts-->
      <div class="sticky-top">
      @include('home.header')
    </div>
    <!-- end header section -->
    <!-- slider section -->
    @include('home.slider')
    <!-- end slider section -->
  
  <!-- end hero area -->
  

  <!-- shop section -->
  <div id="shop">
    @include('home.products')
  </div>

  <!-- end shop section -->

    <!-- why section -->
    <div id="why">
      @include('home.why')
    </div>
    <!-- end why section -->

    <!-- testimonials section -->
    <div id="testimonials">
      @include('home.testimonials')
    </div>
    <!-- end testimonials section -->

    <!-- contact section -->
    <div id="contact">
      @include('home.contact')
    </div>
    <!-- end contact section -->

   

  <!-- info section -->
    <div id="footer">
        @include('home.footer')
    </div>
  @endauth
  @endif


  </div>
</body>

</html>