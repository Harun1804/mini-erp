@extends('layouts.master')
@push('css-vendor')
    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
@endpush
@section('content')
    <livewire:pelanggan />
@endsection