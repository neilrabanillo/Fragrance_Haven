<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    @include('home.css')
    <style type="text/css">
        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        .detail-box{
            padding: 15px;
        }
    </style>
  </head>
  <body>
  @if (Route::has('login'))
  @auth
    @include('home.sidebar')
    <div class="page-content">
        @include('home.search_product')
       <div class="page-header">
          <div class="container-fluid">

            <!--Products Details Start-->
  <section class="shop_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      </div>
      <div class="row">

        <div class="col-md-12">
          <div class="box">
            
          <div class="row">
    <!-- Left Column -->
    <div class="col-md-6">
        <div class="div_center">
            <img width="400" src="/products/{{$data->image}}" alt="">
        </div>
    </div>
    <!-- Right Column -->
    <div class="col-md-6">
        <div class="detail-box">
            <h6>{{$data->title}}</h6>
            <h6>
                Price
                <span>₱ {{$data->price}}</span>
            </h6>
        </div>

        <div class="detail-box">
            <h6>Category: {{$data->category}}</h6>
            <h6>
                Available Quantity
                <span>{{$data->quantity}}</span>
            </h6>
        </div>
        <hr>

<div class="detail-box">
    <p>{{$data->description}}</p>
</div>
    </div>
</div>



            
          </div>
        </div>



      </div>

    </div>
  </section>
  <!--Product Details End-->

  @else

  <div class="page-content p-5 m-auto w-100">
          <div class="container-fluid">
       <div class="page-header pt-5 mt-5">


            <!--Products Details Start-->
      <section class="">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Latest Products
            </h2>
          </div>
          </div>
          <div class="row">

        <div class="col-md-12">
          <div class="box">
            
          <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <div class="div_center">
                    <img width="400" src="/products/{{$data->image}}" alt="">
                </div>
            </div>
            <!-- Right Column -->
            <div class="col-md-6">
              <div class="detail-box">
                  <h6>{{$data->title}}</h6>
                  <h6>
                      Price
                      <span>₱ {{$data->price}}</span>
                  </h6>
              </div>

              <div class="detail-box">
                  <h6>Category: {{$data->category}}</h6>
                  <h6>
                      Available Quantity
                      <span>{{$data->quantity}}</span>
                  </h6>
              </div>
        <hr>

        <div class="detail-box">
            <p>{{$data->description}}</p>
        </div>
            </div>
        </div>



            
          </div>
        </div>



      </div>

    </div>
  </section>
  <!--Product Details End-->

  @endauth
  @endif


          </div>
      </div>
    </div>
    @include('admin.js')
  </body>
</html>






