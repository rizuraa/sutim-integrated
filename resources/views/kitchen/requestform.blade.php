@extends('kitchen/layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">                
        <div class="col-md-12">                            
            <h3 class="mb-4"> Request Form Kitchen </h3>
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-3">
                  <div class="card-header">{{ __('Input Form Request') }}</div>
                  <div class="card-body">
                    {{-- Card Body --}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="number_order" class="form-label">Nama Staff</label>
                                <input type="text" class="form-control" id="nama_staff" name="nama_staff" required>
                            </div>                
                            <div class="mb-3">
                                <label for="platform" class form-label">Keperluan</label>
                                <input type="text" class="form-control" id="keperluan" name="keperluan" required>
                            </div>
                
                            <div class="mb-3">
                                <label for="delivery" class="form-label">tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection