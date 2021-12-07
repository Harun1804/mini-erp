<div class="col-md-12 px-4">
    <div class="card">
        <div class="card-header">
            <div class="card-titl">Edit Data Pelanggan</div>
        </div>
        <div class="card-body">
            <form method="post" wire:submit.prevent="update">
                @csrf
                <div class="mb-3">
                    <label for="custCode" class="form-label">Customer Code</label>
                    <input type="text" class="form-control" id="custCode"
                        placeholder="Customer Code" wire:model="custCode" autocomplete="off" value="{{ old('custCode',$custCode) }}">
                </div>
                <div class="mb-3">
                    <label for="custName" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="custName"
                        placeholder="Customer Code" wire:model="custName" autocomplete="off" value="{{ old('custName',$custName) }}">
                </div>
                <button type="submit" class="btn btn-sm btn-success">Change</button>
            </form>
        </div>
    </div>
</div>