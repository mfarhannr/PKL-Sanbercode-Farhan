@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div id="alert">
                    @include('layouts.components.alert')
                </div>
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <h3 class="page-title">
                            Data Pelatihan
                        </h3>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto">
                        <a href="{{ route('pelatihan.create') }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>Tambah Pelatihan
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        @if (Auth::check())
                                            @if (Auth::user()->role == 'admin')
                                                <th>ID AKun</th>
                                            @endif
                                        @endif
                                        <th>Nama Pelatihan</th>
                                        <th>Penyelenggara</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($pelatihan as $item)
                                        <tr>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $i }}</div>
                                                </div>
                                            </td>
                                             @if (Auth::check())
                                                @if (Auth::user()->role == 'admin')
                                                    <td data-label="Name">
                                                        <div class="d-flex py-1 align-items-center">
                                                            <div class="font-weight-medium">{{ $item->user_id }}</div>
                                                        </div>
                                                    </td>
                                                    {{-- <td data-label="Name">
                                                        <div class="d-flex py-1 align-items-center">
                                                            <div class="font-weight-medium">{{ $item->nama_karyawan }}</div>
                                                        </div>
                                                    </td> --}}
                                                @endif
                                            @endif
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->nama_pelatihan }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->penyelenggara }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->tanggal_mulai }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->tanggal_selesai }}</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-list flex-nowrap">
                                                    <a href="{{ route('pelatihan.edit', $item->id) }}"
                                                        class="btn btn-success mb-0 font-weight-bold text-xs">Edit</a>
                                                    <form onsubmit="return confirm('sure to delete this data')"
                                                        action="/pelatihan/{{ $item->id }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger mb-0 font-weight-bold text-xs">
                                                            Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
