<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-search {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .form-search .form-control {
            width: 300px;
            margin-right: 10px;
        }

        .table-responsive {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #212F41;
            color: #fff;
            font-weight: bold;
        }

        .table tbody tr td{
          background: #202833;
        }

        .table img {
            max-width: 100px;
            height: auto;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }

        .btn-edit {
            background-color: #28a745;
            color: #fff;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>

@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid page-content">
        <div class="container-fluid p-5">
            <div class="row">
                <h2 class="col-12 col-md-6">
                    Products
                </h2>
            <form action="{{url('product_search')}}" method="get" class="form-search col-12 col-md-6">
                @csrf
                <input type="search" name="search" class="form-control" placeholder="Search">
                <input type="submit" class="btn btn-success" value="Search">
            </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-info">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $products)
                        <tr>
                            <td>{{$products->title}}</td>
                            <td>{!!Str::limit($products->description, 50)!!}</td>
                            <td>{{$products->category}}</td>
                            <td>{{$products->price}}</td>
                            <td>{{$products->quantity}}</td>
                            <td><img src="products/{{$products->image}}" alt="{{$products->title}}"></td>
                            <td><a class="btn btn-edit" href="{{url('update_product', $products->id)}}">Edit</a></td>
                            <td><a class="btn btn-delete" onclick="confirmation(event)" href="{{url('delete_product', $products->id)}}">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{$product->onEachSide(1)->links()}}
            </div>
        </div>
</div>

<!-- JavaScript files-->
@include('admin.js')
</body>
</html>
