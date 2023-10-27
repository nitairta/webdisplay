<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JadwalDokter;
use App\Models\Dokter;
use App\Models\PintuMasuk;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    /*public function tampiljadwal()
    {
        $jadwal = jadwaldokter::select('*')
                ->get();
                
        return view('pages.home', ['jadwal' => $jadwal]);
    }
    findOrFail($DayID=3)
*/
    public function index(Request $request)
    {
        
        $jadwal = DB::table('jadwal_praktek_dokter')
                ->join('dokter','dokter.ID','=','jadwal_praktek_dokter.DokterID')
                ->join('pintumasuk','pintumasuk.ID','=','jadwal_praktek_dokter.pintumasuk')
                ->join('hari_linux','hari_linux.ID','=','jadwal_praktek_dokter.DayID')
                ->select('dokter.Dokter','pintumasuk.PintuMasuk','jadwal_praktek_dokter.JamStart','jadwal_praktek_dokter.JamFinish','jadwal_praktek_dokter.Aktif')
                ->where('hari_linux.hari',Carbon::now()->locale('id')->isoFormat('dddd'))
                ->get();
                
        //$today = Carbon::now()->isoFormat('dddd, D MMM Y');
        return view('pages.home',[
        'jadwal'=>$jadwal]);
    }

    public function getCreatedAtAttribute()
    {
    return \Carbon\Carbon::parse($this->attributes['created_at'])
       ->format('d, M Y H:i');
    }

}
