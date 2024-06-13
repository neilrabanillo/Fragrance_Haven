<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style type="text/css">
        .table-responsive {
            margin-top: 20px;
        }

        .table th {
            background-color: #212F41;
            color: white;
        }

        .table td img {
            max-width: 150px;
            height: auto;
        }

        .status-in-progress {
            color: red;
        }

        .status-on-the-way {
            color: skyblue;
        }

        .status-delivered {
            color: yellow;
        }
        td{
            background-color: #202833;
        }
        .table th,
        .table td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>
<body>

@include('admin.header')

@include('admin.sidebar')
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="container-fluid p-5">
        <div class="d-flex justify-content-between align-items-center me-3 px-3">
            <h2 class="mb-0">Order Report</h2>
            <a class="btn btn-info" href="{{url('print_pdf')}}">Print Report</a>
        </div>
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Product Title</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th class="text-center">Change Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->rec_address}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->product->title}}</td>
                            <td>{{$data->product->price}}</td>
                            <td><img src="products/{{$data->product->image}}" alt="{{$data->product->title}}"></td>
                            <td>
                                @if($data->status == 'in progress')
                                    <span class="status-in-progress">{{$data->status}}</span>
                                @elseif($data->status == 'On the way')
                                    <span class="status-on-the-way">{{$data->status}}</span>
                                @else
                                    <span class="status-delivered">{{$data->status}}</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a class="btn btn-primary btn-sm mb-1" href="{{url('on_the_way', $data->id)}}">On the way</a>
                                <a class="btn btn-success btn-sm" href="{{url('delivered', $data->id)}}">Delivered</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript files-->
@include('admin.js')
</body>
</html>
