<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    @include('home.css')
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #202833;
            color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: #212F41;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
        }

        th {
            font-size: 18px;
            color: #fff;
            border-bottom: 1px solid #dee2e6;

        }

        td {
            border-bottom: 1px solid gray;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-container .btn {
            flex: 1;
            margin-right: 10px;
        }

        .total {
            text-align: right;
            margin-top: 30px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #212F41!important;
            border-radius: 5px;
            color: #fff;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            color: #fff;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    @include('home.sidebar')
    <div class="container p-5">
        <h3 class="p-3">My Cart</h3>
        <div class="card">
            <div class="table-container">
                <table>
                    <tr>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Remove</th>
                    </tr>
                    <?php $totalPrice = 0; ?>
                    @foreach($cart as $cartItem)
                    <tr>
                        <td>{{$cartItem->product->title}}</td>
                        <td>{{$cartItem->product->price}}</td>
                        <td><img width="100" src="/products/{{$cartItem->product->image}}"></td>
                        <td><a class="btn btn-danger" href="{{url('delete_cart', $cartItem->id)}}">Remove</a></td>
                    </tr>
                    <?php $totalPrice += $cartItem->product->price; ?>
                    @endforeach
                </table>
            </div>
            <div class="total">Total: ₱ {{$totalPrice}}</div>
        </div>
        <div class="card p-5">
            <form action="{{url('confirm_order')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Receiver</label>
                    <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                    <label>Receiver Address</label>
                    <textarea class="form-control" name="address">{{Auth::user()->address}}</textarea>
                </div>
                <div class="form-group">
                    <label>Receiver Phone</label>
                    <input class="form-control" type="text" name="phone" value="{{Auth::user()->phone}}">
                </div>
                <div class="btn-container">
                    <input class="btn btn-primary" type="submit" value="Cash On Delivery">
                    <a class="btn btn-success">Pay using Card</a>
                </div>
            </form>
        </div>
    </div>

    @include('admin.js')
</body>

</html>
