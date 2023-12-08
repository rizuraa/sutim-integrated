@extends('bar.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">                
        <div class="col-md-12">                
            @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            <a href="{{route('bar.request.form')}}" class="btn btn-success mb-4">Request Now</a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-black">Laporan Request Bar</h6>
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
                                        <a href="{{route('admin.bar.detail')}}" class="btn btn-primary">Detail</a>
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
