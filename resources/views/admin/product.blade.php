@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white" style="background-color: #274E13;">{{ __('Product Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                                        
                    <b>{{ __('Halaman Untuk control stock gudang') }}</b>
                </div>
            </div>
        </div>        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Input list order') }}</div>
                    <div class="card-body">                        
                        <form action="{{ route('admin.product.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Name Stock</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan Unit</label>
                                <input type="text" class="form-control" id="satuan" name="satuan" required>
                            </div>
                            <div class="mb-3">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="text" class="form-control" id="qty" name="qty" required>
                            </div>                    
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">                
                <div class="card">
                    <div class="card-header">{{ __('Data Stock') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Stock</th>                                
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($stock->count() > 0)
                                    @foreach ($stock as $data)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->satuan }}</td>
                                            <td>{{ $data->qty }}</td>
                                            <td>
                                                <a href="" class="badge text-bg-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$data->id}}">Ubah</a>
                                                {{-- <a href="" class="badge text-bg-danger">Hapus</a> --}}
                                                <form action="{{ route('admin.product.destroy', $data->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge text-bg-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                        {{-- MODAL EDIT --}}
                                        <div class="modal fade" id="editModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Data Stock</h1>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.product.update', $data->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="editNama" class="form-label">Name Stock</label>
                                                            <input type="text" class="form-control" id="editNama" name="nama" value="{{$data->nama}}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editSatuan" class="form-label">Satuan Unit</label>
                                                            <input type="text" class="form-control" id="editSatuan" name="satuan" value="{{$data->satuan}}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editQty" class="form-label">Qty</label>
                                                            <input type="text" class="form-control" id="editQty" name="qty" value="{{$data->qty}}" required>
                                                        </div>                    
                                                        <div class="d-grid gap-2">
                                                            <button type="submit" class="btn btn-success">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        {{-- END MODAL EDIT --}}
                                    @endforeach                
                                @else
                                    <tr>
                                        <td class="text-center" colspan="5">Stock kosong</td>
                                    </tr>
                                @endif                
                            </tbody>
                        </table>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div>
@endsection
