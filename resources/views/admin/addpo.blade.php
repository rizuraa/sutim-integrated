@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="mb-4"> Input Data Purchasing Order </h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">{{ __('Input Detail Order') }}</div>
                        <div class="card-body">                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor Order</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">*Sesuaikan</div>
                            </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Platform</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Delivery To</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Account Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>                              
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Payment Type</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Payment Date</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Additional Information</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Biaya Admin</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Grand Total</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Diajukan Oleh</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Diketahui Oleh</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Disetujui Oleh    </label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
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
                        <div class="card-header">{{ __('Input list order') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p>input data keperluan order</p>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-success btn-sm float-sm-end" data-bs-toggle="modal" data-bs-target="#cekDataModal">
                                        Cek List Data
                                    </button>
                                </div>
                            </div>                                                        
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Unit</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Qty</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Price</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Disc</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Total</label>
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
            </div>
        </div>
    </div>
</div>

{{-- modal yang sudah di inputkan --}}
<div class="modal fade" id="cekDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Data Yang Sudah Di Input untuk Po</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
                    <th scope="col">Action</th>
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
                        <td>
                            <a href="" class="badge text-bg-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection