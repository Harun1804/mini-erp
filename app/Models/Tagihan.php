<?php

namespace App\Models;

use App\Models\DetailTagihan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tagihan extends Model
{
    use HasFactory;
    protected $table = 'tagihan';
    protected $fillable = [
        'daftar_tagihan_type',
        'daftar_tagihan_no',
        'daftar_tagihan_date',
        'tanggal_dokumen',
        'kode_perusahaan',
        'nama_perusahaan',
        'bisnis_area_kode',
        'bisnis_area',
        'code_kolektor',
        'kolektor',
        'no_shipment',
        'shiping_point',
        'tanggal_posting',
        'status_tagihan'
    ];

    public function detailTagihan()
    {
        return $this->hasOne(DetailTagihan::class);
    }
}
