@extends('layouts.app')

@section('content')
    {{-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Tambah Akun</h5>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action="/admin-management" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-3">

                                        <div class="form-group col-12 col-sm-6">
                                            <label for="example-text-input" class="form-control-label">Nama</label>
                                            <input class="form-control" type="text" name="name"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('username')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label for="example-text-input" class="form-control-label">Email</label>
                                            <input class="form-control" type="email" name="email"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('email')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-12 col-sm-6">
                                            <label for="example-text-input" class="form-control-label">Password</label>
                                            <input class="form-control" type="password" name="password"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('password')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label for="example-text-input" class="form-control-label">Role</label>
                                            <select class="form-control" name="role" id="choices-button"
                                                placeholder="Departure">
                                                <option value="admin">admin</option>
                                                <option value="siswa">siswa</option>
                                            </select>
                                            @error('role')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-dark btn-sm ms-auto mt-4hh">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <div class="page-wrapper">
                <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <h3 class="page-title">
                            Manajemen Akun
                        </h3>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none"> 
                            {{-- <span class="d-none d-sm-inline">
                                <a href="#" class="btn">
                                    New view
                                </a>
                            </span> --}}
                            <a href="/accounts/create" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                data-bs-target="#modal-report">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 5l0 14"></path>
                                    <path d="M5 12l14 0"></path>
                                </svg>
                                Tambah Akun
                            </a>
                            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                                data-bs-target="#modal-report" aria-label="Create new report">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 5l0 14"></path>
                                    <path d="M5 12l14 0"></path>
                                </svg>
                            </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container">
                <div class="row">
                    <div class="form-floating mb-3 col-6">
                        <input type="text" class="form-control" id="floatingInput" placeholder="masukkan ">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3 col-6">
                        <input type="role" class="form-control" id="floatingInput" placeholder="role">
                        <label for="floatingInput">Email address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating mb-3 col-6">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3 col-6">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
