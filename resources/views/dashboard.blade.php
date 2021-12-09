@extends('layouts.master')
@push('css-vendor')
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
@endpush
@section('content')
<div id="pelanggan" data-pelanggan="{{ $pelanggan }}"></div>
<div id="tagihan" data-tagihan="{{ $tagihan }}"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card mx-3">
            <div class="card-body">
                <div class="card-title">Overall statistics</div>
                <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                    <div class="px-2 pb-2 pb-md-0 text-center">
                        <div id="circles-1"></div>
                        <h6 class="fw-bold mt-3 mb-0">Pelanggan</h6>
                    </div>
                    <div class="px-2 pb-2 pb-md-0 text-center">
                        <div id="circles-2"></div>
                        <h6 class="fw-bold mt-3 mb-0">Tagihan</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js-vendor')
	<script src="{{ asset('assets/js/chart-circle/circles.min.js') }}"></script>
@endpush
@push('js-script')
<script>
    let pelanggan = document.querySelector('#pelanggan');
    let tagihan = document.querySelector('#tagihan');

    Circles.create({
        id: 'circles-1',
        radius: 45,
        value: 100,
        maxValue: 100,
        width: 7,
        text: pelanggan.dataset.pelanggan,
        colors: ['#f1f1f1', '#FF9E27'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    });

    Circles.create({
        id: 'circles-2',
        radius: 45,
        value: 100,
        maxValue: 100,
        width: 7,
        text: tagihan.dataset.tagihan,
        colors: ['#f1f1f1', '#2BB930'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    });
</script>
@endpush
