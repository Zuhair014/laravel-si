@extends('layouts.app')

@section('title', 'Prodi Sistem Informasi - UNJA')

@section('content')
    <p>
        Hallo ini bagian body, nama : {{ $data['name'] }}, email : {{ $data['email'] }} 
    </p>
@endsection