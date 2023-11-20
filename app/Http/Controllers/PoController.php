<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ListOrder;

class PoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addpo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'number_order' => 'required',
            'platform' => 'required',
            'delivery' => 'required',
            'bank_name' => 'required',
            'account_number' => 'required',
            'account_name' => 'required',
            'payment_type' => 'required',
            'payment_date' => 'required',
            'additional_information' => 'required',
            'grand_total' => 'required',
            'diajukan_oleh' => 'required',
            'diketahui_oleh' => 'required',
            'disetujui_oleh' => 'required',
            'list_order' => 'required|array|min:1',
            'list_order.*.nama' => 'required',
            'list_order.*.unit' => 'required',
            'list_order.*.qty' => 'required|numeric',
            'list_order.*.price' => 'required|numeric',
            'list_order.*.disc' => 'required|numeric',
            'list_order.*.ongkir' => 'required|numeric',
        ]);

        // Simpan data Order
        $order = new Order();
        $order->number_order = $request->input('number_order');
        $order->platform = $request->input('platform');
        $order->delivery = $request->input('delivery');
        $order->bank_name = $request->input('bank_name');
        $order->account_number = $request->input('account_number');
        $order->account_name = $request->input('account_name');
        $order->payment_type = $request->input('payment_type');
        $order->payment_date = $request->input('payment_date');
        $order->additional_information = $request->input('additional_information');
        $order->grand_total = $request->input('grand_total');
        $order->diajukan_oleh = $request->input('diajukan_oleh');
        $order->diketahui_oleh = $request->input('diketahui_oleh');
        $order->disetujui_oleh = $request->input('disetujui_oleh');
        $order->status = 'pending'; // Atur status sesuai kebutuhan
        $order->save();

        // Simpan data ListOrder
        $listOrderData = $request->input('list_order');
        foreach ($listOrderData as $itemData) {
            $listOrder = new ListOrder();
            $listOrder->nama = $itemData['nama'];
            $listOrder->unit = $itemData['unit'];
            $listOrder->qty = $itemData['qty'];
            $listOrder->price = $itemData['price'];
            $listOrder->disc = $itemData['disc'];
            $listOrder->ongkir = $itemData['ongkir'];
            $listOrder->total = ($itemData['qty'] * $itemData['price']) - $itemData['disc'] + $itemData['ongkir'];
            $order->listOrder()->save($listOrder);
        }

        // Redirect ke halaman yang sesuai atau kirimkan respons sukses
        return redirect()->route('admin.po')->with('success', 'Order berhasil dibuat');
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
