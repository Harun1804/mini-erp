<?php

namespace App\Http\Livewire;

use App\Models\DetailTagihan;
use App\Models\Pelanggan;
use App\Models\Tagihan as ModelsTagihan;
use Livewire\Component;

class Tagihan extends Component
{
    public $daftar_tagihan_type,$daftar_tagihan_no,$daftar_tagihan_date,$tanggal_dokumen,$kode_perusahaan,
    $nama_perusahaan,$bisnis_area_kode,$bisnis_area,$code_kolektor,$kolektor,
    $no_shipment,$shiping_point,$tanggal_posting,$status_tagihan;

    public $selectedID;

    public $formMode = false,$editMode = false;
    public function render()
    {
        $bills = ModelsTagihan::latest()->get();
        return view('livewire.tagihan.index',compact('bills'));
    }

    public function resetInput()
    {
        $this->daftar_tagihan_type = null;
        $this->daftar_tagihan_no = null;
        $this->daftar_tagihan_date = null;
        $this->tanggal_dokumen = null;
        $this->kode_perusahaan = null;
        $this->nama_perusahaan = null;
        $this->bisnis_area_kode = null;
        $this->bisnis_area = null;
        $this->code_kolektor = null;
        $this->kolektor = null;
        $this->no_shipment = null;
        $this->shiping_point = null;
        $this->tanggal_posting = null;
        $this->status_tagihan = null;
    }

    public function create()
    {
        $this->resetInput();
        $this->formMode = true;
    }

    public function closeCreate()
    {
        $this->formMode = false;
    }

    public function store()
    {
        ModelsTagihan::create([
            'daftar_tagihan_type' => $this->daftar_tagihan_type,
            'daftar_tagihan_no' => $this->daftar_tagihan_no,
            'daftar_tagihan_date' => $this->daftar_tagihan_date,
            'tanggal_dokumen' => $this->tanggal_dokumen,
            'kode_perusahaan' => $this->kode_perusahaan,
            'nama_perusahaan' => $this->nama_perusahaan,
            'bisnis_area_kode' => $this->bisnis_area_kode,
            'bisnis_area' => $this->bisnis_area,
            'code_kolektor' => $this->code_kolektor,
            'kolektor' => $this->kolektor,
            'no_shipment' => $this->no_shipment,
            'shiping_point' => $this->shiping_point,
            'tanggal_posting' => $this->tanggal_posting,
            'status_tagihan' => $this->status_tagihan
        ]);

        session()->flash('success','Data Tagihan Berhasil Dibuat');
        $this->resetInput();
    }

    public function edit(ModelsTagihan $tagihan)
    {
        $this->selectedID = $tagihan->id;
        $this->daftar_tagihan_type = $tagihan->daftar_tagihan_type;
        $this->daftar_tagihan_no = $tagihan->daftar_tagihan_no;
        $this->daftar_tagihan_date = $tagihan->daftar_tagihan_date;
        $this->tanggal_dokumen = $tagihan->tanggal_dokumen;
        $this->kode_perusahaan = $tagihan->kode_perusahaan;
        $this->nama_perusahaan = $tagihan->nama_perusahaan;
        $this->bisnis_area_kode = $tagihan->bisnis_area_kode;
        $this->bisnis_area = $tagihan->bisnis_area;
        $this->code_kolektor = $tagihan->code_kolektor;
        $this->kolektor = $tagihan->kolektor;
        $this->no_shipment = $tagihan->no_shipment;
        $this->shiping_point = $tagihan->shiping_point;
        $this->tanggal_posting = $tagihan->tanggal_posting;
        $this->status_tagihan = $tagihan->status_tagihan;

        $this->formMode = true;
        $this->editMode = true;
    }

    public function update()
    {
        $tagihan = ModelsTagihan::findOrFail($this->selectedID);
        $tagihan->update([
            'daftar_tagihan_type' => $this->daftar_tagihan_type,
            'daftar_tagihan_no' => $this->daftar_tagihan_no,
            'daftar_tagihan_date' => $this->daftar_tagihan_date,
            'tanggal_dokumen' => $this->tanggal_dokumen,
            'kode_perusahaan' => $this->kode_perusahaan,
            'nama_perusahaan' => $this->nama_perusahaan,
            'bisnis_area_kode' => $this->bisnis_area_kode,
            'bisnis_area' => $this->bisnis_area,
            'code_kolektor' => $this->code_kolektor,
            'kolektor' => $this->kolektor,
            'no_shipment' => $this->no_shipment,
            'shiping_point' => $this->shiping_point,
            'tanggal_posting' => $this->tanggal_posting,
            'status_tagihan' => $this->status_tagihan
        ]);
        session()->flash('success','Data Tagihan Berhasil Diubah');
        $this->resetInput();
        $this->closeCreate();
    }

    public function destroy($id)
    {
        ModelsTagihan::destroy($id);
        session()->flash('success','Data Tagihan Berhasil Dihapus');
        $this->resetInput();
    }
}
