@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="h3 mb-2 text-gray-800">Purchasing Order Detail</h1>
            <p class="mb-4">Detail PO - {{ $order->diajukan_oleh }}</p>
            <a href="#" class="btn btn-primary">Print Po</a>
            <br><br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-black">Purchasing Order</h6>
                </div>
                <div class="card-body">
                    <h1 class="h5 class="fw-bold"">{{ $order->delivery }}</h1>
                    <br>
                    <div>
                        <p class="fw-bold">No PO : {{ $order->number_order }}</p>
                        <p class="fw-bold">Platform : {{ $order->platform }}</p>
                        <p class="fw-bold">Delivery to : {{ $order->delivery }}</p>
                    </div>
                    <br>
                    <hr>
                    <br>
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
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            
                        </div>
                        <div class="col-6">
                            <p>Sub total : {{ $order->grand_total }}</p>                            
                            <hr>
                            <p>Grand Total: {{ $order->grand_total }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
