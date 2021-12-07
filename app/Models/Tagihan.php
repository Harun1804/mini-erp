<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;
    protected $table = 'tagihan';
    protected $fillable = [
        'daftar_tagihan_no',
        'tanggal_dokumen',
        'kode_perusahaan',
        'bisnis_area',
        'kolektor',
        'no_shipment',
        'total_dokumen',
        'total_dokumen_kembali',
        'total_giro',
        'tanggal_posting',
        'status_tagihan'
    ];
}
