<?php

namespace App\Models;

use App\Models\Tagihan;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailTagihan extends Model
{
    use HasFactory;

    protected $table = 'detail_tagihan';
    protected $fillable = [
        'tagihan_id',
        'pelanggan_id',
        'payment_term',
        'document',
        'due_date',
        'type',
        'outstanding',
        'status'
    ];

    public function tagihan()
    {
        return $this->belongsTo(Tagihan::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
