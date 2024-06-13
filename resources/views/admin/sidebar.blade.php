<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admincss/img/NEIL ID.png')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Jonel</h1>
            <p>Seller</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading" style="color: #289D97">Admin Dashboard</span>
        <ul class="list-unstyled">
                <li class="nav-item"><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Dashboard </a></li>
                <li class="nav-item">
                  <a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category </a>
                </li>

                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Products</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li class="nav-item"><a href="{{url('add_product')}}">Add Product</a></li>
                    <li class="nav-item"><a href="{{url('view_product')}}">View Products</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="{{url('view_orders')}}"> <i class="fa fa-cart-plus"></i>Orders </a>
                </li>
            <!-- Log out               -->
            <hr>
            <div class="text-center">
            <div class="list-inline-item logout ">                   
              <form method="POST" action="{{ route('logout') }}">
              @csrf
               <input class="btn btn-danger" type="submit" value="Logout">
              </form>
            </div>
            </div>
      </nav>
      
