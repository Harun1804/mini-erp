@extends('layouts.master')
@push('css-vendor')
    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
@endpush
@section('content')
    <livewire:detail-tagihan :id=$id />
@endsection