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
                    <form method="POST" action="{{route('admin.addpo.store')}}">
                      @csrf
                      <div class="row">
                        <div class="form-group col-md-4">
                            <div class="mb-3">
                                <label for="number_order" class="form-label">Nomor Order</label>
                                <input type="text" class="form-control" id="number_order" name="number_order" required>
                            </div>
                
                            <div class="mb-3">
                                <label for="platform" class form-label">Platform</label>
                                <input type="text" class="form-control" id="platform" name="platform" required>
                            </div>
                
                            <div class="mb-3">
                                <label for="delivery" class="form-label">Delivery To</label>
                                <input type="text" class="form-control" id="delivery" name="delivery" required>
                            </div>
                
                            <div class="mb-3">
                                <label for="bank_name" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" id="bank_name" name="bank_name" required>
                            </div>
                
                            <div class="mb-3">
                                <label for="account_number" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="account_number" name="account_number" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="mb-3">
                                <label for="account_name" class="form-label">Account Name</label>
                                <input type="text" class="form-control" id="account_name" name="account_name" required>
                            </div>
                
                            <div class="mb-3">
                                <label for="payment_type" class="form-label">Payment Type</label>
                                <input type="text" class="form-control" id="payment_type" name="payment_type" required>
                            </div>
                
                            <div class="mb-3">
                                <label for="payment_date" class="form-label">Payment Date</label>
                                <input type="text" class="form-control" id="payment_date" name="payment_date" required>
                            </div>
                
                            <div class="mb-3">
                                <label for="additional_information" class="form-label">Additional Information</label>
                                <input type="text" class="form-control" id="additional_information" name="additional_information" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="mb-3">
                                <label for="grandTotal" class="form-label">Grand Total</label>
                                <input type="text" class="form-control" id="grandTotal" name="grand_total" required disabled>
                            </div>
                            <div class="mb-3">
                                <label for="diajukan_oleh" class="form-label">Diajukan Oleh</label>
                                <input type="text" class="form-control" id="diajukan_oleh" name="diajukan_oleh" required>
                            </div>
                            <div class="mb-3">
                                <label for="diketahui_oleh" class="form-label">Diketahui Oleh</label>
                                <input type="text" class="form-control" id="diketahui_oleh" name="diketahui_oleh" required>
                            </div>
                            <div class="mb-3">
                                <label for="disetujui_oleh" class="form-label">Disetujui Oleh</label>
                                <select class="form-select form-select-sm mb-3" aria-label="Large select example" id="disetujui_oleh" name="disetujui_oleh" required>
                                    <option selected>Pilih</option>
                                    <option value="zahran">Zahran</option>
                                    <option value="Jinan">Jinan</option>
                                    <option value="Abi">Abi</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <h3>Input Barang PO</h3>
                        <br><br>
                        {{-- <div class="row">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="productNameInput" class="form-label">Product Name</label>
                                    <input type="text" class="form-control productNameInput" id="productNameInput" name="list_order[' + currentIndex + '][nama]">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="mb-3">
                                    <label for="unitInput" class="form-label">Unit</label>
                                    <input type="text" class="form-control unitInput" id="unitInput" name="list_order[' + currentIndex + '][unit]">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="mb-3">
                                    <label for="qtyInput" class="form-label">Qty</label>
                                    <input type="text" class="form-control qtyInput" id="qtyInput" name="list_order[' + currentIndex + '][qty]">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="priceInput" class="form-label">Price</label>
                                    <input type="text" class="form-control priceInput" id="priceInput" name="list_order[' + currentIndex + '][price]">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="mb-3">
                                    <label for="discInput" class="form-label">Disc</label>
                                    <input type="text" class="form-control discInput" id="discInput" name="list_order[' + currentIndex + '][disc]">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="ongkirInput" class="form-label">Ongkir</label>
                                    <input type="text" class="form-control ongkirInput" id="ongkirInput" name="list_order[' + currentIndex + '][ongkir]">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="totalInput" class="form-label">Total</label>
                                    <input type="text" class="form-control " id="totalInput" name="list_order[' + currentIndex + '][total]" readonly disabled>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="mb-3">
                                    <label for="submitButton" class="form-label">Submit</label>
                                    <br>
                                    <button type="button" class="badge text-bg-primary" id="submitButton">Add</button>
                                </div>
                            </div>
                            <hr><br>                            
                        </div> --}}
                        <div id="itemListContainer"></div>

                        <!-- Tombol untuk menambahkan input form barang PO -->
                                                
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-primary" id="addFormItem">Tambah Barang</button>
                        <button class="btn btn-success" type="submit">Submit All</button>
                    </div>
                  </form>
                  </div>
                </div>   
              </div>
            </div>
        </div>
    </div>
</div>
@endsection