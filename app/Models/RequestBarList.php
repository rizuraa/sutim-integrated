<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestBar;

class RequestBarList extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'unit',
        'qty'        
    ];

    public function RequestBar(){
        return $this->belongsTo(RequestBar::class, 'id_request_bar');
    }
}
