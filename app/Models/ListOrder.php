<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class ListOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'unit',
        'qty',
        'price',
        'disc',
        'ongkir',
        'total',
    ];

    public function order(){
        return $this->belongsTo(Order::class, 'id_order');
    }
}
