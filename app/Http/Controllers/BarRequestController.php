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
            'list_order.*.nama' => 'required',
            'list_order.*.unit' => 'required',
            'list_order.*.qty' => 'required|numeric',
        ]);

        // request form bar
        $requestBar = new RequestBar();
        $requestBar->nama = $request->input('nama');
        $requestBar->keperluan = $request->input('keperluan');
        $requestBar->tgl_req = $request->input('tgl_req');
        $requestBar->status = 'pending';

        // request list form bar 
        $requestBarList = $request->input('request_list_bar');
        foreach ($requestBarList as $itemData) {
            $listOrder = new RequestBarList();
            $listOrder->nama = $itemData['nama'];
            $listOrder->unit = $itemData['unit'];
            $listOrder->qty = $itemData['qty'];
        }
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
