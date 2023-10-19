@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="mb-4"> Input Data Purchasing Order </h3>
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-3">
                  <div class="card-header">{{ __('Input Detail Order') }}</div>
                  <div class="card-body">
                    <h4>Input PO Detail</h4>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nomor Order</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>                          
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
                      </div>
                  
                      <div class="col-md-4">
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
                      </div>
                  
                      <div class="col-md-4">
                        {{-- <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Biaya Admin</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" required>
                        </div>
                  
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Grand Total</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" required>
                        </div> --}}                  
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Diajukan Oleh</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" required>
                        </div>
                  
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Diketahui Oleh</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" required>
                        </div>
                  
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Disetujui Oleh</label>
                          {{-- <input type="text" class="form-control" id="exampleInputPassword1" required>   --}}
                          <select class="form-select form-select-sm mb-3" aria-label="Large select example">                            
                            <option selected>Pilih</option>
                            <option value="zahran">Zahran</option>
                            <option value="Jinan">Jinan</option>
                            <option value="Abi">Abi</option>
                          </select>
                        </div>                        
                      </div>                      
                      <hr>
                      {{-- BARANG PO --}}
                      <h3>Input Barang PO</h3>
                      <br><br>
                      <div class="row">
                        <div class="col-md-2">
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productNameInput">
                          </div>
                        </div>
                        <div class="col-md-1">
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Unit</label>
                            <input type="text" class="form-control" id="unitInput">
                          </div>
                        </div>
                        <div class="col-md-1">
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Qty</label>
                            <input type="text" class="form-control" id="qtyInput">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Price</label>
                            <input type="text" class="form-control" id="priceInput">
                          </div>
                        </div>
                        <div class="col-md-1">
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Disc</label>
                            <input type="text" class="form-control" id="discInput">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Ongkir</label>
                            <input type="text" class="form-control" id="ongkirInput">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Total</label>
                            <input type="text" class="form-control" id="totalInput" readonly>
                          </div>
                        </div>
                        <div class="col-md-1">
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Submit</label>
                            <br>
                            <button type="submit" class="badge text-bg-primary" id="submitButton">Add</button>                            
                          </div>
                        </div>
                        <br><br><hr><br>
                        <table class="table">
                          <thead>
                              <tr class="text-center">
                                  <th scope="col">No</th>
                                  <th scope="col">Product Name</th>                                
                                  <th scope="col">Unit</th>
                                  <th scope="col">Qty</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Disc</th>
                                  <th scope="col">Ongkir</th>
                                  <th scope="col">Total</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody id="itemList">
                          </tbody>
                      </table>
                      </div>
                    </div>                    
                    <div class="d-grid gap-2">
                      <button class="btn btn-success" type="button">Submit All</button>
                    </div>
                  </div>
                </div>   
              </div>
            </div>
        </div>
    </div>
</div>
@endsection