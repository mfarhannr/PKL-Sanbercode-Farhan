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
                        <a href="{{ route('accounts.create')}}" class="btn btn-primary">
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
                                        <th>Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($accounts as $item)
                                        <tr>
                                            <td data-label="Name">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="font-weight-medium">{{ $i }}</div>
                                                </div>
                        </div>
                        </td>
                        <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                                <div class="font-weight-medium">{{ $item->name }}</div>
                            </div>
                    </div>
                    </td>
                    <td data-label="Name">
                        <div class="d-flex py-1 align-items-center">
                            <div class="font-weight-medium">{{ $item->role }}</div>
                        </div>
                </div>
                </td>
                <td data-label="Name">
                    <div class="d-flex py-1 align-items-center">
                        <div class="font-weight-medium">{{ $item->email }}</div>
                    </div>
            </div>
            </td>
            <td data-label="Name">
                <div class="d-flex py-1 align-items-center">
                    <div class="font-weight-medium">{{ $item->password }}</div>
                </div>
        </div>
        </td>
        <td>
            <div class="btn-list flex-nowrap">
                <form action="/accounts/{{ $item->id }}" method="POST" class="text-center">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger mb-0 font-weight-bold text-xs">
                        <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                        <span class="btn-inner--text"> Delete</span>
                    </button>
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
