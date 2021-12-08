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
                        <input type="text" class="form-control" id="daftar_tagihan_no" placeholder="Tagihan No" wire:model="daftar_tagihan_no"
                            autocomplete="off" value="{{ old('daftar_tagihan_no') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="daftar_tagihan_type" class="form-label">Daftar Tagihan Type</label>
                        <input type="text" class="form-control" id="daftar_tagihan_type" placeholder="Tagihan Type" wire:model="daftar_tagihan_type"
                            autocomplete="off" value="{{ old('daftar_tagihan_type') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="daftar_tagihan_date" class="form-label">Daftar Tanggal Tagihan</label>
                        <input type="date" class="form-control" id="daftar_tagihan_date" placeholder="Tanggal Tagihan" wire:model="daftar_tagihan_date"
                            autocomplete="off" value="{{ old('daftar_tagihan_date') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="tanggal_dokumen" class="form-label">Tanggal Dokumen</label>
                        <input type="date" class="form-control" id="tanggal_dokumen" placeholder="Tanggal Dokumen" wire:model="tanggal_dokumen"
                            autocomplete="off" value="{{ old('tanggal_dokumen') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kode_perusahaan" class="form-label">Kode Perusahaan</label>
                        <input type="text" class="form-control" id="kode_perusahaan" placeholder="Kode Perushaan" wire:model="kode_perusahaan"
                            autocomplete="off" value="{{ old('kode_perusahaan') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="nama_perusahaan" placeholder="Nama Perushaan" wire:model="nama_perusahaan"
                            autocomplete="off" value="{{ old('nama_perusahaan') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="bisnis_area_kode" class="form-label">Kode Bisnis Area</label>
                        <input type="text" class="form-control" id="bisnis_area_kode" placeholder="Kode Area Bisnis" wire:model="bisnis_area_kode"
                            autocomplete="off" value="{{ old('bisnis_area_kode') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="bisnis_area" class="form-label">Bisnis Area</label>
                        <input type="text" class="form-control" id="bisnis_area" placeholder="Bisnis Area" wire:model="bisnis_area"
                            autocomplete="off" value="{{ old('bisnis_area') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="code_kolektor" class="form-label">Kode Kolektor</label>
                        <input type="text" class="form-control" id="code_kolektor" placeholder="Kode Kolektor" wire:model="code_kolektor"
                            autocomplete="off" value="{{ old('code_kolektor') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kolektor" class="form-label">Kolektor</label>
                        <input type="text" class="form-control" id="kolektor" placeholder="Nama Kolektor" wire:model="kolektor"
                            autocomplete="off" value="{{ old('kolektor') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="no_shipment" class="form-label">No Shipment</label>
                        <input type="text" class="form-control" id="no_shipment" placeholder="No Shipment" wire:model="no_shipment"
                            autocomplete="off" value="{{ old('no_shipment') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="shiping_point" class="form-label">Shiping Point</label>
                        <input type="text" class="form-control" id="shiping_point" placeholder="Shiping Point" wire:model="shiping_point"
                            autocomplete="off" value="{{ old('shiping_point') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal_posting" class="form-label">Tanggal Posting</label>
                        <input type="date" class="form-control" id="tanggal_posting" placeholder="Tanggal Posting" wire:model="tanggal_posting"
                            autocomplete="off" value="{{ old('tanggal_posting') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="status_tagihan" class="form-label">Status Tagihan</label>
                        <input type="text" class="form-control" id="status_tagihan" placeholder="Status Tagihan" wire:model="status_tagihan"
                            autocomplete="off" value="{{ old('status_tagihan') }}">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-sm btn-success">Submit</button>
        </form>
    </div>
</div>
