<div class="row">
    <div class="col-md-12 px-4">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (!$formMode)
        <button type="button" class="btn btn-sm btn-primary" wire:click="create">Tambah Tagihan</button>
    @else
        <button type="button" class="btn btn-sm btn-danger mb-3" wire:click="closeCreate">Tutup Form Tagihan</button>
        @if (!$editMode)
        @include('livewire.tagihan.create')
    @else
        @include('livewire.tagihan.edit')
    @endif
    @endif
    </div>
    <div class="col-md-12 px-4">
        <div class="card my-3">
            <div class="card-header">
                <div class="card-title">Daftar Data Tagihan</div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Daftar Tagihan Type</th>
                            <th>Daftar Tagihan Date</th>
                            <th>Business Area</th>
                            <th>Collector Code</th>
                            <th>Collector</th>
                            <th>Shipment No</th>
                            <th>Shipment Point</th>
                            <th>Print Counter</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bills as $bill)
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" wire:click="edit({{ $bill->id }})">Edit</button>
                                <button type="button" class="btn btn-sm btn-danger" wire:click="destroy({{ $bill->id }})">Delete</button>
                            </td>
                            <td>{{ $bill->daftar_tagihan_type }}</td>
                            <td>{{ $bill->daftar_tagihan_date }}</td>
                            <td>{{ $bill->bisnis_area }}</td>
                            <td>{{ $bill->code_kolektor }}</td>
                            <td>{{ $bill->kolektor }}</td>
                            <td>{{ $bill->no_shipment }}</td>
                            <td>{{ $bill->shiping_point }}</td>
                            <td></td>
                            <td>{{ $bill->status_tagihan }}</td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="tengah">Belum Ada Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
