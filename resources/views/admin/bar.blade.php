@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">                
        <div class="col-md-12">                
            @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif            
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
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requestBar as $item)                
                                    <tr>
                                        <td>{{$loop->iteration}}</td>                                        
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->keperluan}}</td>
                                        <td>{{$item->tgl_req}}</td>
                                        <td>                                            
                                            @if ($item->status==="pending")
                                                <span class="badge text-bg-warning">{{$item->status}}</span>
                                            @else
                                                <span class="badge text-bg-success">{{$item->status}}</span>
                                            @endif                                            
                                        </td>
                                        <td>
                                            <a href="{{route('bar.request.detail', ['id' => $item->id])}}" class="btn btn-primary">Detail</a>
                                            <a href="{{route('admin.bar.approve', ['id' => $item->id])}}" class="btn btn-success">Setujui</a>
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
