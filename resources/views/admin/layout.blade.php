<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Admin</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #0b371eff;">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 mb-2 text-white min-vh-100 sticky-top">
                    <br>
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <img src="{{asset('assets/sutimputih.png')}}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="fs-5 d-none d-sm-inline">Sudut Timur</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.admin') }}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Home</span>
                            </a>
                        </li>                                                                        
                        <li>
                            <a href="{{ route('admin.po') }}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-collection text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Purchasing Order</span> 
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.bar') }}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-file-arrow-down text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Bar Request</span> </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.kitchen') }}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-file-arrow-down text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Kitchen Request</span> </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.product') }}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-file-arrow-down text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Stock Management</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/sutimputih.png')}}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">                                                    
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    {{-- Sign out --}}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    });
</script>
{{-- js untuk bagian input sementara list order --}}
<script>    
document.addEventListener('DOMContentLoaded', function () {
    var currentIndex = 0;

    var container = document.getElementById('itemListContainer');
    container.addEventListener('click', function (event) {
        if (event.target.classList.contains('deleteButton')) {
            deleteFormItem(event.target.getAttribute('data-index')); 
        }
    });

    var addButton = document.getElementById('addFormItem');
    addButton.addEventListener('click', function () {
        addFormItem();
    
        container.addEventListener('input', function (event) {
      if (
        event.target.classList.contains('qtyInput') ||
        event.target.classList.contains('priceInput') ||
        event.target.classList.contains('discInput') ||
        event.target.classList.contains('ongkirInput')
      ) {
        var index = event.target.closest('.row').querySelector('.deleteButton').getAttribute('data-index');
        calculateTotalAndAddItem(index);
        calculateGrandTotal();
      }
    });
    });

    function addFormItem() {
        var newItemDiv = document.createElement('div');
        newItemDiv.innerHTML = `
            <div class="row">
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="productNameInput" class="form-label">Product Name</label>
                        <input type="text" class="form-control productNameInput" name="list_order[${currentIndex}][nama]">
                    </div>
                </div>
                <!-- Tambah input form lainnya sesuai kebutuhan -->
                <div class="col-md-1">
                    <div class="mb-3">
                        <label for="unitInput" class="form-label">Unit</label>
                        <input type="text" class="form-control unitInput" name="list_order[${currentIndex}][unit]">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mb-3">
                        <label for="qtyInput" class="form-label">Qty</label>
                        <input type="text" class="form-control qtyInput" name="list_order[${currentIndex}][qty]">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="priceInput" class="form-label">Price</label>
                        <input type="text" class="form-control priceInput" name="list_order[${currentIndex}][price]">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mb-3">
                        <label for="discInput" class="form-label">Disc</label>
                        <input type="text" class="form-control discInput" name="list_order[${currentIndex}][disc]">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="ongkirInput" class="form-label">Ongkir</label>
                        <input type="text" class="form-control ongkirInput" name="list_order[${currentIndex}][ongkir]">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="totalInput" class="form-label">Total</label>
                        <input type="text" class="form-control totalInput" name="list_order[${currentIndex}][total]" readonly disabled>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="mb-3">
                        <label for="submitButton" class="form-label">Submit</label>
                        <br>
                        <button type="button" class="btn btn-danger deleteButton" data-index="${currentIndex}">Hapus</button>
                    </div>
                </div>
            </div>            
        `;
        
        container.appendChild(newItemDiv);
        currentIndex++;
    }

    function calculateTotalAndAddItem(index) {
      var qtyInput = document.querySelector(`.qtyInput[name="list_order[${index}][qty]"]`);
      var priceInput = document.querySelector(`.priceInput[name="list_order[${index}][price]"]`);
      var discInput = document.querySelector(`.discInput[name="list_order[${index}][disc]"]`);
      var ongkirInput = document.querySelector(`.ongkirInput[name="list_order[${index}][ongkir]"]`);
      var totalInput = document.querySelector(`.totalInput[name="list_order[${index}][total]"]`);

      var qty = parseFloat(qtyInput.value) || 0;
      var price = parseFloat(priceInput.value) || 0;
      var disc = parseFloat(discInput.value) || 0;
      var ongkir = parseFloat(ongkirInput.value) || 0;

      var total = qty * price * (1 - disc / 100) + ongkir;
      totalInput.value = total.toFixed(2);
    }

    function calculateGrandTotal() {
      var totalInputs = document.querySelectorAll('.totalInput');
      var grandTotalInput = document.getElementById('grandTotal');

      var grandTotal = 0;

      totalInputs.forEach(function (totalInput) {
        grandTotal += parseFloat(totalInput.value) || 0;
      });

      grandTotalInput.value = grandTotal.toFixed(2);
    }

    function deleteFormItem(index) {
        var deleteButton = document.querySelector(`.deleteButton[data-index="${index}"]`);
        var itemToRemove = deleteButton.closest('.row');
         itemToRemove.parentNode.removeChild(itemToRemove);
    }
});
</script>
</html>