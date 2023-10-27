<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PintuMasuk extends Model
{
    use HasFactory;

    protected $table = 'pintumasuk';
    protected $primaryKey = 'ID';
    protected $fillable = ['PintuMasuk', 'Karcis', 'Antrian_perdokter', 'antrian_perjadwal', 'BPJS_POLI', 'akun', 
    'antrian_initial', 'polikhusus', 'view_and'];

}
