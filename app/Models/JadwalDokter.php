<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;
   
    protected $table = 'jadwal_praktek_dokter';
    protected $primaryKey = 'JadwalID';
    protected $fillable = ['DayID', 'PintuMasuk', 'DokterID', 'JamStart', 'JamFinish', 'Aktif', 'maxpasien', 'nofinish', 'qtyOnline'];

}
