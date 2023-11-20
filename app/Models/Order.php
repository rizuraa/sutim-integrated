<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ListOrder;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_order',
        'platform',
        'delivery',
        'bank_name',
        'account_number',
        'account_name',
        'payment_type',
        'payment_date',
        'additional_information',
        'grand_total',
        'diajukan_oleh',
        'diketahui_oleh',
        'disetujui_oleh',
        'status'
    ];

    public function listOrder(){
        return $this->hasMany(ListOrder::class, 'id_order');
    }
}
