<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestBarList;

class RequestBar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'keperluan',
        'tgl_req',
        'status'
    ];

    public function requestBarList(){
        return $this->hasMany(RequestBarList::class, 'id_request_bar');
    }
}
