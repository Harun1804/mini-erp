<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pelanggan as modelPelanggan;

class Pelanggan extends Component
{
    public $selectedID,$custName,$custCode;
    public $editMode = false;

    protected $rules = [
        'custCode' => 'required|unique:pelanggan,customer_code',
        'custName' => 'required',
    ];

    public function render()
    {
        $customers = modelPelanggan::latest()->get();
        return view('livewire.pelanggan.index',compact('customers'));
    }

    public function resetInput()
    {
        $this->custCode = null;
        $this->custName = null;
    }

    public function store()
    {
        $this->validate();
        modelPelanggan::create([
            'customer_code' => $this->custCode,
            'customer_name' => $this->custName,
        ]);
        session()->flash('success','Data Customer Ditambahkan');
        $this->resetInput();
    }

    public function edit(modelPelanggan $pelanggan)
    {
        $this->selectedID   = $pelanggan->id;
        $this->custCode     = $pelanggan->customer_code;
        $this->custName     = $pelanggan->customer_name;
        $this->editMode     = true;
    }

    public function update()
    {
        $pelanggan = modelPelanggan::findOrFail($this->selectedID);
        $pelanggan->update([
            'customer_code' => $this->custCode,
            'customer_name' => $this->custName,
        ]);
        $this->resetInput();
        $this->editMode     = false;
        session()->flash('success','Data Customer Diubah');
    }

    public function destroy($id)
    {
        modelPelanggan::destroy($id);
        session()->flash('success','Data Customer Dihapus');
    }
}
