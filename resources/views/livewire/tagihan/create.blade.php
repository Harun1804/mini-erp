<div class="card">
    <div class="card-header">
        <div class="card-titl">Tambah Data Tagihan</div>
    </div>
    <div class="card-body">
        <form method="post" wire:submit.prevent="store">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="daftar_tagihan_no" class="form-label">Daftar Tagihan No</label>
                        <input type="text" class="form-control @error('daftar_tagihan_no') is-invalid @enderror" id="daftar_tagihan_no" placeholder="Tagihan No" wire:model="daftar_tagihan_no"
                            autocomplete="off" value="{{ old('daftar_tagihan_no') }}">
                        @error('daftar_tagihan_no')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="daftar_tagihan_type" class="form-label">Daftar Tagihan Type</label>
                        <input type="text" class="form-control @error('daftar_tagihan_type') is-invalid @enderror" id="daftar_tagihan_type" placeholder="Tagihan Type" wire:model="daftar_tagihan_type"
                            autocomplete="off" value="{{ old('daftar_tagihan_type') }}">
                        @error('daftar_tagihan_type')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="daftar_tagihan_date" class="form-label">Daftar Tanggal Tagihan</label>
                        <input type="date" class="form-control @error('daftar_tagihan_date') is-invalid @enderror" id="daftar_tagihan_date" placeholder="Tanggal Tagihan" wire:model="daftar_tagihan_date"
                            autocomplete="off" value="{{ old('daftar_tagihan_date') }}">
                        @error('daftar_tagihan_date')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="tanggal_dokumen" class="form-label">Tanggal Dokumen</label>
                        <input type="date" class="form-control @error('tanggal_dokumen') is-invalid @enderror" id="tanggal_dokumen" placeholder="Tanggal Dokumen" wire:model="tanggal_dokumen"
                            autocomplete="off" value="{{ old('tanggal_dokumen') }}">
                        @error('tanggal_dokumen')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kode_perusahaan" class="form-label">Kode Perusahaan</label>
                        <input type="text" class="form-control @error('kode_perusahaan') is-invalid @enderror" id="kode_perusahaan" placeholder="Kode Perushaan" wire:model="kode_perusahaan"
                            autocomplete="off" value="{{ old('kode_perusahaan') }}">
                        @error('kode_perusahaan')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan" placeholder="Nama Perushaan" wire:model="nama_perusahaan"
                            autocomplete="off" value="{{ old('nama_perusahaan') }}">
                        @error('nama_perusahaan')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="bisnis_area_kode" class="form-label">Kode Bisnis Area</label>
                        <input type="text" class="form-control @error('bisnis_area_kode') is-invalid @enderror" id="bisnis_area_kode" placeholder="Kode Area Bisnis" wire:model="bisnis_area_kode"
                            autocomplete="off" value="{{ old('bisnis_area_kode') }}">
                        @error('bisnis_area_kode')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="bisnis_area" class="form-label">Bisnis Area</label>
                        <input type="text" class="form-control @error('bisnis_area') is-invalid @enderror" id="bisnis_area" placeholder="Bisnis Area" wire:model="bisnis_area"
                            autocomplete="off" value="{{ old('bisnis_area') }}">
                        @error('bisnis_area')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="code_kolektor" class="form-label">Kode Kolektor</label>
                        <input type="text" class="form-control @error('code_kolektor') is-invalid @enderror" id="code_kolektor" placeholder="Kode Kolektor" wire:model="code_kolektor"
                            autocomplete="off" value="{{ old('code_kolektor') }}">
                        @error('code_kolektor')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kolektor" class="form-label">Kolektor</label>
                        <input type="text" class="form-control @error('kolektor') is-invalid @enderror" id="kolektor" placeholder="Nama Kolektor" wire:model="kolektor"
                            autocomplete="off" value="{{ old('kolektor') }}">
                        @error('kolektor')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="no_shipment" class="form-label">No Shipment</label>
                        <input type="text" class="form-control @error('no_shipment') is-invalid @enderror" id="no_shipment" placeholder="No Shipment" wire:model="no_shipment"
                            autocomplete="off" value="{{ old('no_shipment') }}">
                        @error('no_shipment')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="shiping_point" class="form-label">Shiping Point</label>
                        <input type="text" class="form-control @error('shiping_point') is-invalid @enderror" id="shiping_point" placeholder="Shiping Point" wire:model="shiping_point"
                            autocomplete="off" value="{{ old('shiping_point') }}">
                        @error('shiping_point')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal_posting" class="form-label">Tanggal Posting</label>
                        <input type="date" class="form-control @error('tanggal_posting') is-invalid @enderror" id="tanggal_posting" placeholder="Tanggal Posting" wire:model="tanggal_posting"
                            autocomplete="off" value="{{ old('tanggal_posting') }}">
                        @error('tanggal_posting')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="status_tagihan" class="form-label">Status Tagihan</label>
                        <input type="text" class="form-control @error('status_tagihan') is-invalid @enderror" id="status_tagihan" placeholder="Status Tagihan" wire:model="status_tagihan"
                            autocomplete="off" value="{{ old('status_tagihan') }}">
                        @error('status_tagihan')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-sm btn-success">Submit</button>
        </form>
    </div>
</div>
