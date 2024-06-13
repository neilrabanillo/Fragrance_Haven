<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        body {
            background-color: #202833;
            color: #fff;
        }

        .page-content {
            padding: 20px;
        }

        h1 {
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
        }

        .form-inline {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-inline .form-control {
            width: 300px;
            margin-right: 10px;
            height: 45px;
        }

        .form-inline .btn {
            height: 45px;
        }

        .table-responsive {
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            background-color: #212F41;
            color: #fff;
            font-weight: bold;

        }

        .table tbody tr {
            background-color: #202833;
            
        }

        .btn-success,
        .btn-danger {
            color: #fff;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content container-fluid">
        <div class="container mt-2">
            <h1 class="text-light text-center mb-4">Add Category</h1>
            <div class="d-flex justify-content-center mb-5">
                <form class="form-inline" action="{{url('add_category')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <input class="form-control me-2" type="text" name="category" placeholder="Category Name" required>
                        <input class="btn btn-info" type="submit" value="Add Category">
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $category)
                        <tr>
                            <td>{{$category->category_name}}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('edit_category', $category->id)}}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category', $category->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    @include('admin.js')
</body>
</html>
