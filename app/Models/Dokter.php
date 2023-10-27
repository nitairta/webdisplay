<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $primaryKey = 'ID';
    protected $fillable = ['Dokter', 'Nick', 'Ket', 'StatusDokter', 'StatusProfesi', 'drWhat', 
    'SpecialisID', 'Aktif', 'Pelaksana_LAB','PelaksRad','PintuMasuk','pjlab'];

}
