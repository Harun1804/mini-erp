<?php

namespace App\Http\Livewire;

use App\Models\DetailTagihan as ModelsDetailTagihan;
use App\Models\Pelanggan;
use App\Models\Tagihan;
use Livewire\Component;

class DetailTagihan extends Component
{
    public $pelangganID,$selectedID,$payment_term,$document,$due_date,$type,$outstanding,$status;
    public $tagihan,$pelanggan;
    public $formMode = false,$editMode = false;

    protected $rules = [
        'pelangganID' => 'required',
        'payment_term' => 'required',
        'document' => 'required',
        'due_date' => 'nullable|date',
        'type' => 'required',
        'outstanding' => 'required',
        'status' => 'nullable',
    ];

    public function render()
    {
        $detailTagihan = ModelsDetailTagihan::with('pelanggan')->latest()->where('tagihan_id',$this->tagihan->id)->get();
        return view('livewire.detailtagihan.index',compact('detailTagihan'));
    }

    public function mount($id)
    {
        $this->tagihan = Tagihan::findOrFail($id);
        $this->pelanggan = Pelanggan::all();
    }

    public function resetInput()
    {
        $this->pelangganID = null;
        $this->payment_term = null;
        $this->document = null;
        $this->due_date = null;
        $this->type = null;
        $this->outstanding = null;
        $this->status = null;
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
        $this->validate();
        ModelsDetailTagihan::create([
            'tagihan_id' => $this->tagihan->id,
            'pelanggan_id' => $this->pelangganID,
            'payment_term' => $this->payment_term,
            'document' => $this->document,
            'due_date' => $this->due_date,
            'type' => $this->type,
            'outstanding' => $this->outstanding
        ]);
        $this->resetInput();
        session()->flash('success','Data Berhasil Di Tambahkan');
    }

    public function edit(ModelsDetailTagihan $detail)
    {
        $this->selectedID = $detail->id;
        $this->pelangganID = $detail->pelanggan_id;
        $this->payment_term = $detail->payment_term;
        $this->document = $detail->document;
        $this->due_date = $detail->due_date;
        $this->type = $detail->type;
        $this->outstanding = $detail->outstanding;
        $this->status = $detail->status;
        $this->formMode = true;
        $this->editMode = true;
    }

    public function update()
    {
        $this->validate();
        $detail = ModelsDetailTagihan::findOrFail($this->selectedID);
        $detail->update([
            'tagihan_id' => $this->tagihan->id,
            'pelanggan_id' => $this->pelangganID,
            'payment_term' => $this->payment_term,
            'document' => $this->document,
            'due_date' => $this->due_date,
            'type' => $this->type,
            'outstanding' => $this->outstanding,
            'status' => $this->status
        ]);
        $this->editMode = false;
        $this->formMode = false;
        $this->resetInput();
        session()->flash('success','Data Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        ModelsDetailTagihan::destroy($id);
        session()->flash('success','Data Berhasil Di Hapus');
    }
}
