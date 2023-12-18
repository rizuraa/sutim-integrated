@extends('admin.layout')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">                
        <div class="col-md-12">                
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-black">Request Bar - {{$requestBar->nama}} </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><b>Request Bar</b>: {{$requestBar->tgl_req}}</p>
                            <p><b>Karyawan</b> : {{$requestBar->nama}}</p>
                            <p><b>Keperluan</b> : {{$requestBar->keperluan}}</p>
                            <p><b>Status</b> : {{$requestBar->status}}</p>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <tr>
                                    <th>Nomor</th>
                                    <th>nama</th>
                                    <th>unit</th>
                                    <th>qty</th>                                    
                                </th>
                                @foreach ($requestBar->RequestBarList as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>{{ $item->qty }}</td>                                    
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div> --}}
<p>test</p>
{{-- <h6 class="m-0 font-weight-bold text-black">Request Bar - {{$requestBar->nama}} </h6> --}}
@endsection