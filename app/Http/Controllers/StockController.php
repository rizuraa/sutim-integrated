<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        $stock = Stock::all();        
        return view('admin.product', compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan melalui form
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'satuan' => 'required|string',
            'qty' => 'required|numeric',
        ]);

        // Simpan data baru ke dalam database
        $stock = new Stock();
        $stock->nama = $validatedData['nama'];
        $stock->satuan = $validatedData['satuan'];
        $stock->qty = $validatedData['qty'];
        $stock->save();

        // Redirect kembali ke halaman yang sama dengan pesan sukses
        return redirect()->route('admin.product')->with('status', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // Validasi data yang dikirimkan melalui form
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'satuan' => 'required|string',
            'qty' => 'required|numeric',
        ]);

        // Temukan data yang akan diperbarui berdasarkan ID
        $stock = Stock::findOrFail($id);

        // Perbarui data dengan data yang baru
        $stock->nama = $validatedData['nama'];
        $stock->satuan = $validatedData['satuan'];
        $stock->qty = $validatedData['qty'];
        $stock->save();

        // Redirect kembali ke halaman yang sama dengan pesan sukses
        return redirect()->route('admin.product')->with('status', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stock = Stock::findOrFail($id);

        // Hapus data
        $stock->delete();

        // Redirect kembali ke halaman daftar produk dengan pesan sukses
        return redirect()->route('admin.product')->with('status', 'Data berhasil dihapus.');
    }
}
