@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <h3 class="page-title">
                            Karyawan
                        </h3>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto">
                        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>Tambah Karyawan
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
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Foto</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>No Telephone</th>
                                        <th>Email</th>
                                        <th>jabatan</th>
                                        <th>Status</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($karyawan as $item)
                                        <tr>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $i }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->nip }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->nama }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->foto }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->jenis_kelamin }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->tempat_lahir }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->tanggal_lahir }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->alamat }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->nohp }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->email }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->jabatan }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->status }}</div>
                                                </div>
                                            </td>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $item->tanggal_masuk }}</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-list flex-nowrap">
                                                    <a href="{{ route('karyawan.edit', $item->id) }}"
                                                        class="btn btn-success mb-0 font-weight-bold text-xs">Edit</a>
                                                    <a href="{{ route('karyawan.showAndUpdate', $item->id) }}"
                                                        class="btn btn-primary mb-0 font-weight-bold text-xs">Show</a>
                                                    <form onsubmit="return confirm('sure to delete this data')"
                                                        action="/karyawan/{{ $item->id }}" method="post">
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
