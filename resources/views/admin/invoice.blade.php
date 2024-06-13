<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .report-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .report-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #212F41;
            text-transform: uppercase;
        }

        .report-date {
            text-align: center;
            font-size: 16px;
            margin-bottom: 20px;
            color: #666;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .table th {
            background-color: #212F41;
            color: #fff;
            font-weight: bold;
        }

        .table td img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .status-in-progress {
            background-color: #ffc107;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }

        .status-on-the-way {
            background-color: #17a2b8;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }

        .status-delivered {
            background-color: #28a745;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }

        .summary-section {
            margin-top: 30px;
            text-align: left;
            background-color: #f8f9fa;
            color: #212F41;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .summary-section h4 {
            color: #212F41;
            margin-bottom: 15px;
        }

        .summary-section p,
        .summary-section strong {
            margin: 5px 0;
            font-size: 16px;
        }

        .summary-section strong {
            display: block;
            margin-top: 10px;
            font-size: 18px;
        }

        @media (max-width: 768px) {
            .table td img {
                max-width: 70px;
            }
        }
    </style>
</head>
<body>
    <div class="report-container">
        <h3 class="report-title">Business Report</h3>
        <div class="report-date">{{ date('F j, Y') }}</div>

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
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalDelivered = 0;
                        $totalDeliveredPrice = 0;
                        $inProgressCount = 0;
                        $onTheWayCount = 0;
                    @endphp
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
                                @php $inProgressCount++; @endphp
                                <span class="status-in-progress">{{$data->status}}</span>
                            @elseif($data->status == 'On the way')
                                @php $onTheWayCount++; @endphp
                                <span class="status-on-the-way">{{$data->status}}</span>
                            @elseif($data->status == 'Delivered')
                                @php 
                                    $totalDelivered++;
                                    $totalDeliveredPrice += $data->product->price;
                                @endphp
                                <span class="status-delivered">{{$data->status}}</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="summary-section">
            <h4>Summary</h4>
            <p>Total Products In Progress: {{$inProgressCount}}</p>
            <p>Total Products On The Way: {{$onTheWayCount}}</p>
            <p>Total Delivered Orders: {{$totalDelivered}}</p>
            <strong>Total Price of Delivered Products: P {{$totalDeliveredPrice}}.00</strong>
        </div>
    </div>
</body>
</html>
