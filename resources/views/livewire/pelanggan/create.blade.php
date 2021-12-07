<div class="col-md-12 px-4">
    <div class="card">
        <div class="card-header">
            <div class="card-titl">Tambah Data Pelanggan</div>
        </div>
        <div class="card-body">
            <form method="post" wire:submit.prevent="store">
                @csrf
                <div class="mb-3">
                    <label for="custCode" class="form-label">Customer Code</label>
                    <input type="text" class="form-control" id="custCode"
                        placeholder="Customer Code" wire:model="custCode" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="custName" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="custName"
                        placeholder="Customer Code" wire:model="custName" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>