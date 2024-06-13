<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    @include('home.css')
  </head>
  <body>
    @include('home.sidebar')
    <div class="page-content">
        @include('home.search_product')
       <div class="page-header">
          <div class="container-fluid">

          @include('home.products')

          </div>
      </div>
    </div>
    @include('admin.js')
  </body>
</html>