<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestBar;
use App\Models\RequestBarList;

class BarRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requestBar = RequestBar::all();
        return view('bar.request', compact('requestBar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bar.requestForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keperluan' => 'required',
            'tgl_req' => 'required',            
            'request_list_bar.*.nama' => 'required',
            'request_list_bar.*.unit' => 'required',
            'request_list_bar.*.qty' => 'required|numeric',
        ]);
    
        // request form bar
        $requestBar = new RequestBar();
        $requestBar->nama = $request->input('nama');
        $requestBar->keperluan = $request->input('keperluan');
        $requestBar->tgl_req = $request->input('tgl_req');
        $requestBar->status = 'pending';
        $requestBar->save();
    
        // request list form bar 
        $requestListBar = $request->input('request_list_bar');
        foreach ($requestListBar as $itemData) {
            $requestListBar = new RequestBarList();
            $requestListBar->nama = $itemData['nama'];
            $requestListBar->unit = $itemData['unit'];
            $requestListBar->qty = $itemData['qty'];
            $requestListBar->requestBar()->associate($requestBar);
            $requestListBar->save();
        }
    
        return redirect()->route('bar.request.form')->with('success', 'Order berhasil dibuat');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $requestBar = RequestBar::findOrFail($id);
        return view('bar.detailRequest', compact('requestBar'));
    }

    // bar admin 
    public function adminShow()
    {
        $requestBar = RequestBar::all();
        return view('admin.bar', compact('requestBar'));
    }

    public function detailBarAdmin(string $id)
    {
        $requestBar = RequestBar::findOrFail($id);                
        return view('admin.bardetail', compact('requestBar'));
    }

    public function approval(string $id)
    {
        $requestBar = RequestBar::findOrFail($id);
        if ($requestBar) {
            // Jika $requestBar ditemukan
            $requestBar->status = 'disetujui';
            $requestBar->save();
            return view('admin.bar', compact('requestBar'));
        } else {            
            return redirect()->back();
        }
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
