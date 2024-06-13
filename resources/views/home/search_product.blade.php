<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-search-container {
            display: flex;
            justify-content: flex-end;
            padding-right: 20px;
            padding-bottom: 10px;
            margin-top: 20px;
        }

        .form-search {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 500px;
            background-color: #31363F;
            border-radius: 5px;
            padding: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-search .form-control {
            width: 100%;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
        }

        .form-search .btn {
            flex-shrink: 0;
            background-color: #289D97;
            border: none;
            border-radius: 5px;
            color: #fff;
        }

        .form-search .btn:hover {
            background-color: #227b79;
        }

    </style>
</head>
<body>

<div class="container-fluid form-search-container"> 
    <form action="{{ url('search_product') }}" method="get" class="form-search">
        @csrf
        <input type="search" name="search" class="form-control" placeholder="Search">
        <input type="submit" class="btn custom-btn" value="Search">
    </form>
</div>


<!-- JavaScript files-->
@include('admin.js')
</body>
</html>
