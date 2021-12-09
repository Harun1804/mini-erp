<div class="row">
    <div class="col-md-12 px-4">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    </div>
    <div class="col-md-6 px-4">
        <div class="card mb-3">
            <div class="card-header">
                <div class="card-title">Daftar Tagihan Cash</div>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>Daftar Tagihan No</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->daftar_tagihan_no }}"></td>
                    </tr>
                    <tr>
                        <td>Dokument Date</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->tanggal_dokumen }}"></td>
                    </tr>
                    <tr>
                        <td>Company Code</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->kode_perusahaan }}"></td>
                        <td>{{ $tagihan->nama_perusahaan }}</td>
                    </tr>
                    <tr>
                        <td>Business Area</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->bisnis_area_kode }}"></td>
                        <td>{{ $tagihan->bisnis_area }}</td>
                    </tr>
                    <tr>
                        <td>Collector</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->code_kolektor }}"></td>
                        <td>{{ $tagihan->kolektor }}</td>
                    </tr>

                    @if ($tagihan->detailTagihan != null)
                    <tr>
                        <td>Total Document</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->detailTagihan->where('tagihan_id',$tagihan->id)->count() }}"></td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->detailTagihan->where('tagihan_id',$tagihan->id)->sum('outstanding') }}"></td>
                    </tr>
                    <tr>
                        <td>Total Document Return</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->detailTagihan->where('tagihan_id',$tagihan->id)->where('status','1')->count() }}"></td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->detailTagihan->where('tagihan_id',$tagihan->id)->where('status','1')->sum('outstanding') }}"></td>
                    </tr>
                    <tr>
                        <td>Total Giro Receipt</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->detailTagihan->sum('outstanding') - $tagihan->detailTagihan->where('status','1')->sum('outstanding') }}"></td>
                    </tr>
                    @else
                    <tr>
                        <td>Total Document</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="0"></td>
                        <td><input type="text" class="form-control" disabled value="0"></td>
                    </tr>
                    <tr>
                        <td>Total Document Return</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="0"></td>
                        <td><input type="text" class="form-control" disabled value="0"></td>
                    </tr>
                    <tr>
                        <td>Total Giro Receipt</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="0"></td>
                    </tr>
                    @endif

                    <tr>
                        <td>Posting Date</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->tanggal_posting }}"></td>
                    </tr>
                    <tr>
                        <td>Status Daftar Tagihan</td>
                        <td> : </td>
                        <td><input type="text" class="form-control" disabled value="{{ $tagihan->status_tagihan }}"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 px-4">
        @if ($formMode)
            @if ($editMode)
                @include('livewire.detailtagihan.edit')
            @else
                @include('livewire.detailtagihan.create')
            @endif
        @endif
    </div>
    <div class="col-md-12 px-4">
        <div class="card my-3">
            <div class="card-header">
                <a href="{{ route('tagihan') }}" class="btn btn-sm btn-success">Save</a>
                @if ($formMode)
                    <button type="button" class="btn btn-sm btn-danger" wire:click="closeCreate">Close</button>
                @else
                    <button type="button" class="btn btn-sm btn-primary" wire:click="create">Add</button>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Customer Code</th>
                            <th>Customer Name</th>
                            <th>Payment Term</th>
                            <th>Document</th>
                            <th>Due Date</th>
                            <th>Type</th>
                            <th>Outstanding</th>
                            <th>Status</th>
                            <th>Flag</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($detailTagihan as $dt)
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning" wire:click="edit({{ $dt->id }})">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger" wire:click="destroy({{ $dt->id }})">Delete</button>
                                </td>
                                <td>{{ $dt->pelanggan->customer_code }}</td>
                                <td>{{ $dt->pelanggan->customer_name }}</td>
                                <td>{{ $dt->payment_term }}</td>
                                <td>{{ $dt->document }}</td>
                                <td>{{ $dt->due_date }}</td>
                                <td>{{ $dt->type }}</td>
                                <td>{{ $dt->outstanding }}</td>
                                <td>
                                    @if ($dt->status == 0)
                                        
                                    @else
                                        Return
                                    @endif
                                </td>
                                <td></td>
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
