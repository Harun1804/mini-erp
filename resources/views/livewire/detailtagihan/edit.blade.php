<div class="card">
    <div class="card-header">
        <div class="card-titl">Ubah Data Detail Tagihan</div>
    </div>
    <div class="card-body">
        <form method="post" wire:submit.prevent="update">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="pelangganID" class="form-label">Pelanggan</label>
                        <select class="form-select @error('pelangganID') is-invalid @enderror" aria-label="Default select example" id="pelangganID" wire:model="pelangganID">
                            <option selected>Pilih Pelanggan</option>
                            @foreach ($pelanggan as $p)
                                <option value="{{ $p->id }}">{{ $p->customer_name }}</option>
                            @endforeach
                        </select>
                        @error('pelangganID')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="payment_term" class="form-label">Payment Term</label>
                        <input type="text" class="form-control @error('payment_term') is-invalid @enderror" id="payment_term" placeholder="Payment Term" wire:model="payment_term"
                            autocomplete="off" value="{{ old('payment_term') }}" value="{{ old('payment_term') }}">
                        @error('payment_term')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="document" class="form-label">Document</label>
                        <input type="text" class="form-control @error('document') is-invalid @enderror" id="document" placeholder="Document" wire:model="document"
                            autocomplete="off" value="{{ old('document') }}" value="{{ old('document') }}">
                        @error('document')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="due_date" class="form-label">Due Date</label>
                        <input type="date" class="form-control @error('due_date') is-invalid @enderror" id="due_date" placeholder="Due Date" wire:model="due_date"
                            autocomplete="off" value="{{ old('due_date') }}" value="{{ old('due_date') }}">
                        @error('due_date')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Type" wire:model="type"
                            autocomplete="off" value="{{ old('type') }}">
                        @error('type')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="outstanding" class="form-label">Outstanding</label>
                        <input type="number" class="form-control @error('outstanding') is-invalid @enderror" id="outstanding" placeholder="Outstanding" wire:model="outstanding"
                            autocomplete="off" value="{{ old('outstanding') }}">
                        @error('outstanding')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0" wire:model="status">
                            <label class="form-check-label" for="inlineRadio1">Unreturn</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1" wire:model="status">
                            <label class="form-check-label" for="inlineRadio2">Return</label>
                        </div>
                        @error('status')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-sm btn-secondary">Change</button>
        </form>
    </div>
</div>
