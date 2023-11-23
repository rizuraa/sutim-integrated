@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="h3 mb-2 text-gray-800">Purchasing Order</h1>
            <p class="mb-4">Tabel laporan purchasing order.</p>
            <a href="{{ route('admin.addpo') }}" class="btn btn-success mb-3">Tambah Data</a>
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
                                @foreach ($orders as $key => $order)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $order->number_order }}</td>
                                        <td>{{ $order->grand_total }}</td>
                                        <td>{{ $order->diajukan_oleh }}</td>
                                        <td>
                                            {{-- <a href="{{ route('admin.detailpo') }}" type="button" class="btn btn-success">Lihat Detail</a> --}}
                                            <a href="{{ route('admin.detailpo', ['id' => $order->id]) }}" type="button" class="btn btn-success">Lihat Detail</a>
                                            <a href="{{route('admin.detailpo.print', ['id' => $order->id])}}" class="btn btn-primary">print</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
