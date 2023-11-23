@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="h3 mb-2 text-gray-800">Kitchen Request</h1>
            <p class="mb-4">Tabel laporan request dari kitchen</p>            
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-black">Laporan Request Kitchen</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive mb-4 style="margin-top: 10px"">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="mt-4">
                                <tr>
                                    <th>No</th>                                    
                                    <th>Oleh</th>
                                    <th>tanggal</th>
                                    <th>Kepentingan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>                            
                                <tr>
                                    <td>1</td>
                                    <td>Zahran</td>
                                    <td>19 - nov - 2023</td>
                                    <td>nasgor</td>
                                    <td>
                                        <a href="" class="btn btn-primary">Detail</a>
                                        <a href="" class="btn btn-success">Setujui</a>
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
