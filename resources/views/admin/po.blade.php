@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="h3 mb-2 text-gray-800">Purchasing Order</h1>
            <p class="mb-4">Tabel laporan purchasing order.</p>            
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-black">Laporan Purchasing Order</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive mb-4 style="margin-top: 10px"">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="mt-4">
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Order</th>                                    
                                    <th>Total Biaya</th>
                                    <th>Diajukan Oleh</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>001/PO-SDT-TM-TBT/XI-23</td>
                                    <td>1.000.000</td>
                                    <td>Sehan</td>
                                    <td>
                                        <a href="{{ route('admin.detailpo') }}" type="button" class="btn btn-success">Lihar Detail</a>
                                        <button type="button" class="btn btn-primary">Print</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>001/PO-SDT-TM-TBT/XI-23</td>
                                    <td>1.000.000</td>
                                    <td>Alan</td>
                                    <td>
                                        <a href="{{ route('admin.detailpo') }}" type="button" class="btn btn-success">Lihar Detail</a>
                                        <button type="button" class="btn btn-primary">Print</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
