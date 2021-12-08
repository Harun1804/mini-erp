<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'total_dokumen',
        'total_dokumen_kembali',
        'total_giro',
        'tanggal_posting',
        'status_tagihan'
    ];
}
