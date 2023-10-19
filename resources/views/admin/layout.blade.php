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
     var items = [];

// Mendapatkan elemen input
var productNameInput = document.getElementById('productNameInput');
var unitInput = document.getElementById('unitInput');
var qtyInput = document.getElementById('qtyInput');
var priceInput = document.getElementById('priceInput');
var discInput = document.getElementById('discInput');
var ongkirInput = document.getElementById('ongkirInput');
var totalInput = document.getElementById('totalInput');

// Event listener untuk menghitung total saat input berubah
productNameInput.addEventListener('input', calculateTotal);
unitInput.addEventListener('input', calculateTotal);
qtyInput.addEventListener('input', calculateTotal);
priceInput.addEventListener('input', calculateTotal);
discInput.addEventListener('input', calculateTotal);
ongkirInput.addEventListener('input', calculateTotal);

// Menambahkan event listener ke tombol "Add"
var addButton = document.getElementById('submitButton');
addButton.addEventListener('click', function () {
    var productName = productNameInput.value;
    var unit = unitInput.value;
    var qty = parseFloat(qtyInput.value) || 0;
    var price = parseFloat(priceInput.value) || 0;
    var disc = parseFloat(discInput.value) || 0;
    var ongkir = parseFloat(ongkirInput.value) || 0;

    var total = (qty * price * (1 - disc / 100)) + ongkir;

    items.push({ productName, unit, qty, price, disc, ongkir, total });

    refreshItemList();
});

// Fungsi untuk menghitung total dan menampilkan dalam input "Total"
function calculateTotal() {
    var qty = parseFloat(qtyInput.value) || 0;
    var price = parseFloat(priceInput.value) || 0;
    var disc = parseFloat(discInput.value) || 0;
    var ongkir = parseFloat(ongkirInput.value) || 0;

    var total = (qty * price * (1 - disc / 100)) + ongkir;
    totalInput.value = total.toFixed(2);
}

// Fungsi untuk menampilkan item-item dalam tabel
function refreshItemList() {
    var itemList = document.getElementById('itemList');
    itemList.innerHTML = '';

    for (var i = 0; i < items.length; i++) {
        var item = items[i];
        var row = document.createElement('tr');
        row.innerHTML = '<td class="text-center">' + (i + 1) + '</td>' +
            '<td class="text-center">' + item.productName + '</td>' +
            '<td class="text-center">' + item.unit + '</td>' +
            '<td class="text-center">' + item.qty + '</td>' +
            '<td class="text-center">' + item.price + '</td>' +
            '<td class="text-center">' + item.disc + '</td>' +
            '<td class="text-center">' + item.ongkir + '</td>' +
            '<td class="text-center">' + item.total.toFixed(2) + '</td>' +
            '<td class="text-center"><button class="btn btn-danger" onclick="deleteItem(' + i + ')">Delete</button></td>';
        itemList.appendChild(row);
    }
}

// Fungsi untuk menghapus item dari daftar sementara
function deleteItem(index) {
    items.splice(index, 1);
    refreshItemList();
}
  </script>
</html>