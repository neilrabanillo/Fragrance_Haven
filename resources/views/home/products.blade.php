<head>
  @include('home.css')
</head>

<section class="shop_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        @foreach($product as $products)

        <div class="col-sm-6 col-md-4 col-lg-3">
            
          <div class="box card text-white mb-3" style="max-width: 18rem;">
            <div class="card-header"></div>
            <div class="img-box"><img src="products/{{$products->image}}" alt=""></div>
            <div class="card-body detail-box">
              <h5 class="card-title pr-1">{{$products->title}}</h5>
              <h6>Price <span>₱{{$products->price}}</span></h6>
            </div>
            <div style="padding: 15px;">
              <a class="btn btn-outline-info text-info" href ="{{url('product_details', $products->id)}}"> Details</a>
              <a class="btn btn-info text-light" href ="{{url('add_cart', $products->id)}}">Add to Cart</a>
            </div>
          </div>
            
        </div>


        @endforeach


      </div>

    </div>
  </section>