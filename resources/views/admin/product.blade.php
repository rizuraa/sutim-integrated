@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                                        
                    <b>{{ __('Halaman Untuk controll stock gudang') }}</b>
                </div>
            </div>
        </div>        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Input list order') }}</div>
                    <div class="card-body">                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Name Stock</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Satuan Unit</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Qty</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>                    
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary">
                                Submit
                            </button>
                          </div>
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
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Kopi</td>
                                    <td>Kg</td>
                                    <td>5 Kg</td>
                                    <td>
                                        <a href="" class="badge text-bg-primary" data-bs-toggle="modal" data-bs-target="#editModal">Ubah</a>
                                        <a href="" class="badge text-bg-danger">Hapus</a>
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
{{-- edit modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Data Stock</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name Stock</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Satuan Unit</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Qty</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>                    
            <div class="d-grid gap-2">
                <button class="btn btn-success">
                    Submit
                </button>
            </div>
        </div>
      </div>
    </div>
@endsection
