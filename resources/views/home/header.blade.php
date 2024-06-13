    <!-- header section strats -->
<header class="header_section sticky-top">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand d-flex align-items-center" href="{{url('home.index')}}" style="color: #289D97; text-decoration: none; font-size: 18px;">
          <img src="images/PFume.png" class="img-fluid rounded-circle" style="height: 50px; width: 50px; margin-right: 10px;">
          <span>
              <span style="display: block; line-height: 1; position: relative; top: px;">Fragrance</span>
              <span style="display: block; line-height: 1; position: relative; top: px;">Haven</span>
          </span>
      </a>


      <!-- Navbar toggler button for mobile -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links and user options -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#why">Why Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials">Testimonial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
        </ul>
        <div class="user_option" style="height: 42px;">
          @if (Route::has('login'))

          @auth
          <a class="text-white" href="{{url('my_orders')}}">My Orders</a>
          <a class="text-white" href="{{url('my_cart')}}"><i class="fa fa-shopping-bag" aria-hidden="true"></i>[{{$count}}]</a>
          <form style="padding: 15px;" method="POST" action="{{ route('logout') }}">
              @csrf
              <input class="btn btn-info" type="submit" value="Log Out"> 
          </form>

          @else
          <a class="btn btn-info" href="{{url('/login')}}" style="border-radius: 25px;">
            <span class="p-5">Login<span>
          </a>
          <a class="btn btn-outline-info" href="{{url('/register')}}" style="border-radius: 25px;">
            <span class="p-3">Register</span>
          </a>

          @endauth
          @endif
        </div>
      </div>
    </div>
  </nav>
</header>

    <!-- end header section -->

    <script>
      document.addEventListener('DOMContentLoaded', (event) => {
        const buttons = document.querySelectorAll('.nav-item');

        buttons.forEach(button => {
          button.addEventListener('click', () => {
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
          });
        });
      });
    </script>
