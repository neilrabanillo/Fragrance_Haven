<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <div class="position-fixed">
        <!-- Sidebar Header-->
          <div class="brand-text brand-big visible text-uppercase d-flex align-items-center">
              <img src="/images/PFume.png" class="img-fluid rounded-circle " style="height: 50px; width: 50px;">
              <span class="font-size: 18px;" style="color: #289D97">
                <span style="display: block; line-height: 1; position: relative;">Fragrance</span>
                <span style="display: block; line-height: 1; position: relative;">Haven</span>
              </span>
            </div>
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admincss/img/NEIL ID.png')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{Auth::user()->name}}</h1>
            <p>{{Auth::user()->usertype}}</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading" style="color: #289D97">Dashboard</span>
        <ul class="list-unstyled">
                <li class="nav-item"><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>
                <li class="nav-item">
                  <a href="{{url('my_cart')}}"> <i class="fa fa-shopping-cart"></i>My Cart <span style="font-size: 10px; color: red">{{$count}}</span></a>
                </li>
                <li class="nav-item">
                  <a href="{{url('my_orders')}}"> <i class="fa fa-shopping-bag"></i>My Orders </a>
                </li>
                <li class="nav-item">
                  <a href=""> <i class="fa fa-gear"></i>Settings </a>
                </li>
                <li class="nav-item">
                  <a href=""> <i class="fa fa-user"></i>My Profile </a>
                </li>

                
            <!-- Log out               -->
            <vr class="vr-5">
              <hr>
            <div class="text-center">
            <div class="list-inline-item logout ">                   
              <form method="POST" action="{{ route('logout') }}">
              @csrf
               <input class="btn btn-danger" type="submit" value="Logout">
              </form>
            </div>
            </div>
</div>
      </nav>
      
