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
        $requestBarListData = $request->input('request_list_bar');
        foreach ($requestBarListData as $itemData) {
            $requestBarList = new RequestBarList();
            $requestBarList->nama = $itemData['nama'];
            $requestBarList->unit = $itemData['unit'];
            $requestBarList->qty = $itemData['qty'];
            $requestBarList->requestBar()->associate($requestBar);
            $requestBarList->save();
        }
    
        return redirect()->route('bar.requestForm')->with('success', 'Order berhasil dibuat');
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
