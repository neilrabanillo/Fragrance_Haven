<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        input[type="text"]{
            width: 400px;
            height: 5-px;
        }
    </style>
  </head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="div_deg">
                    <h1>Update Category</h1>

                    <form action="{{url('update_category', $data->id)}}" method="post">
                        @csrf
                        <input type="text" name="category" value="{{$data->category_name}}">
                        <input class="btn btn-primary" type="submit" value="Update Category">
                    </form>
                </div>

            </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.j')}}s"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>