<div class="row">
    @if (session('success'))
        <div class="col-md-12 px-4">
            <div class="alert alert-success">{{ session('success') }}</div>
        </div>
    @endif
    @if (!$editMode)
        @include('livewire.pelanggan.create')
    @else
        @include('livewire.pelanggan.edit')
    @endif
    <div class="col-md-12 px-4">
        <div class="card my-3">
            <div class="card-header">
                <div class="card-title">Data Customer</div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Customer Code</th>
                            <th>Customer Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($customers as $customer)
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" wire:click="edit({{ $customer->id }})">Edit</button>
                                <button type="button" class="btn btn-sm btn-danger" wire:click="destroy({{ $customer->id }})">Delete</button>
                            </td>
                            <td>{{ $customer->customer_code }}</td>
                            <td>{{ $customer->customer_name }}</td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="tengah">Belum Ada Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
