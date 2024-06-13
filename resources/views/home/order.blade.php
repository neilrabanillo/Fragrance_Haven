<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('home.css')
    @include('admin.css')
    <style>
        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
            padding: 20px; 
        }

        .container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            color: #fff; 
        }

        td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            color: #fff; 

        }

        th {
            background-color: #343a40;
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            color: #fff;
        }

        img {
            max-width: 100px;
            height: auto;
        }

    </style>
</head>
<body>


    @include('home.sidebar')
        <div class="page-content">
            
                <div class="container-fluid">

                    <div class="div_center">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Delivery Status</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $order)
                                <tr>
                                    <td>{{$order->product->title}}</td>
                                    <td>{{$order->product->price}}</td>
                                    <td>{{$order->status}}</td>
                                    <td><img src="products/{{$order->product->image}}" alt="{{$order->product->title}}"></td>
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