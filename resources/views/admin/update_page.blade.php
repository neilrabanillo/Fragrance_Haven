<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: #202833;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
            color: #fff;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #212F41;
            border: 1px solid #212F41;
            border-radius: 5px;
            color: #fff;
        }

        .current-image {
            display: block;
            margin: 10px 0;
            max-width: 150px;
            border-radius: 10px;
        }

        .form-section {
            margin-bottom: 30px;
        }

        .form-section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }

        @media (max-width: 576px) {
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

@include('admin.header')
@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Update Product</h2>
            <div class="form-container">
                <form action="{{url('edit_product', $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-section">
                        <div class="form-group">
                            <label class="form-label">Product Title</label>
                            <input type="text" name="title" class="form-control" value="{{$data->title}}" placeholder="Enter product title">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Product Description</label>
                            <textarea name="description" class="form-control" placeholder="Enter product description">{{$data->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Product Price</label>
                            <input type="text" name="price" class="form-control" value="{{$data->price}}" placeholder="Enter product price">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Quantity</label>
                            <input type="text" name="quantity" class="form-control" value="{{$data->quantity}}" placeholder="Enter quantity">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-control">
                                <option value="{{$data->category}}">{{$data->category}}</option>
                                @foreach($category as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="form-section-title">Images</div>
                        <div class="form-group">
                            <label class="form-label">Current Image</label>
                            <img src="/products/{{$data->image}}" alt="Current Product Image" class="current-image">
                        </div>
                        <div class="form-group">
                            <label class="form-label">New Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-update btn-lg btn-block" value="Update Product">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript files-->
@include('admin.js')
</body>
</html>
