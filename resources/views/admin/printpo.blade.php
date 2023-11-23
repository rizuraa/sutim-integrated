<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Po - {{ $order->number_order }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            padding: 20px;
        }

        .card {
            margin-bottom: 20px;
        }

        h5, h1, h3 {
            color: #1a1a1a;
        }

        p {
            color: #000000;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #666;
            color: #fff;
        }

        hr {
            border-top: 1px solid #dee2e6;
        }

        .row {
            margin-bottom: 20px;
        }

        .col-md-6, .col-6 {
            width: 48%;
            float: left;
            margin-right: 2%;
        }

        .text-center {
            text-align: center;
        }
        
        .cover {
            display: flex;
            /* flex-direction: row; */
            flex-wrap: wrap;
        }
        .component {
            flex: 1;        
            padding: 10px;
            text-align: center;
            /* margin: 5px; */
        }
        .table-mod {
            width: 100%;
            border-collapse: collapse;
            margin: auto;
            background-color: #fff;
        }
        
        .table-mod th, .table-mod td {
            background-color: #fff;
            color: #000000;
            padding: 10px;
            text-align: center;
            border-bottom: 0px;
        }
        /* .col-4 {
            width: 33.33%;
            float: left;
            margin-right: 2%;
            text-align: center;
        }
        .clearfix {
            clear: both;
        } */    
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h5>Purchasing Order Detail</h5>
                <p>Detail PO - {{ $order->diajukan_oleh }}</p>
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="fw-bold">{{ $order->delivery }}</h5>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fw-bold">No PO : {{ $order->number_order }}</p>
                                <p class="fw-bold">Platform : {{ $order->platform }}</p>
                                <p class="fw-bold">Delivery to : {{ $order->delivery }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="fw-bold">Payment Date : {{ $order->payment_date }}</p>
                                <p class="fw-bold">Payment Type : {{ $order->payment_type }}</p>
                            </div>
                        </div>                    
                        <br><br><br><br><br>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                                <th scope="col">Disc</th>
                                <th scope="col">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->listOrder as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->disc }}</td>
                                        <td>{{ $item->total }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>                                                
                        <div class="row">
                            <div class="col-6">
                                <p>Bank Name : {{$order->bank_name}}</p>
                                <p>Account Number : {{$order->account_number}} </p>
                                <p>Account Name : {{$order->account_name}}</p>
                            </div>
                            <div class="col-6">
                                <p>Sub total : {{ $order->grand_total }}</p>
                                <hr>
                                <p>Grand Total: {{ $order->grand_total }}</p>
                            </div>
                        </div>           
                        <br><br><br><br><br><br>
                        <table class="table-mod">
                            <thead style="background-color: #fff; text-align: center;">
                                <tr style="background-color: #fff;">
                                    <th style="background-color: #fff; color: #000000; padding: 10px;">Diajukan Oleh</th>
                                    <th style="background-color: #fff; color: #000000; padding: 10px;">Diketahui Oleh</th>
                                    <th style="background-color: #fff; color: #000000; padding: 10px;">Disetujui Oleh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td><td></td><td></td>
                                </tr>
                                <tr>
                                    <td></td><td></td><td></td>
                                </tr>
                                <tr>
                                    <td></td><td></td><td></td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="padding: 10px;">{{$order->diajukan_oleh}}</td>
                                    <td style="padding: 10px;">{{$order->diketahui_oleh}}</td>
                                    <td style="padding: 10px;">{{$order->disetujui_oleh}}</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
