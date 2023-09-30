@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="h3 mb-2 text-gray-800">Purchasing Order Detail</h1>
            <p class="mb-4">Detail PO - dari alan.</p>              
            <a href="#" class="btn btn-primary">Print Po </a>   
            <br><br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-black">Purchasing Order</h6>
                </div>
                <div class="card-body">
                    <h1 class="h5 class="fw-bold"">Sudut Timur - Tebet</h1>
                    <br>
                    <div>                        
                        <p class="fw-bold">No PO : 001/PO-SDT-TM-TBT/XI-23</p>
                        <p class="fw-bold">Platform : test</p>
                        <p class="fw-bold">Delivery to : Sudut Timur - Tebet</p>                        
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
                            <tr>
                                <td>1</td>
                                <td>Kopi</td>
                                <td>Kg</td>
                                <td>5 Kg</td>
                                <td>10.000</td>
                                <td>0%</td>
                                <td>50.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            
                        </div>
                        <div class="col-6">
                            <p>Sub total : 50.000</p>
                            <p>Ongkir: 20.000</p>
                            <p>Biaya Admin: 5.000</p>
                            <p>Discount: -</p>
                            <hr>
                            <p>Grand Total: 75.000</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
