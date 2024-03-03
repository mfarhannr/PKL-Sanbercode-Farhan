@extends('layouts.app')

@section('content')
     @foreach ($karyawan as $karyawan)
            <li>{{ $karyawan->nama }}</li>
        @endforeach
@endsection
