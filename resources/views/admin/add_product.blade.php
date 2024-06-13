<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
      <div class="container-fluid">
     
          <h1 class="text-center text-white">Add Product</h1>


        <div class="d-flex justify-content-center mt-5">
          <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data" class="w-50" autocomplete="off">
            @csrf
            <div class="form-group">
              <label for="title" class="text-white">Product Title</label>
              <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="description" class="text-white">Product Description</label>
              <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <label for="price" class="text-white">Product Price</label>
              <input type="number" id="price" name="price" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="quantity" class="text-white">Product Quantity</label>
              <input type="number" id="quantity" name="quantity" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="category" class="text-white">Product Category</label>
              <select id="category" name="category" class="form-control" required>
                <option>Select Category</option>
                @foreach($category as $category)
                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="image" class="text-white">Image</label>
              <input type="file" id="image" name="image" class="form-control-file" required>
            </div>
            <div class="form-group text-center">
              <input type="submit" class="btn btn-success" value="Add Product">
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>
