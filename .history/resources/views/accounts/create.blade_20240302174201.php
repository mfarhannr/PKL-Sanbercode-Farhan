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

        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Akun</h3>
                    </div>
                    <form action="/admin-management" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-0">
                            <div class="row px-4">
                                <div class="form-floating my-3 ps-2 col-6">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="masukkan username" name="nama">
                                    <label for="floatingInput">Username</label>
                                    @error('nama')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating my-3 ps-2 col-6">
                                    <select class="form-select pt-2" name="role" aria-label="Default select example"
                                        placeholder="pilih role">
                                        <option value="">Pilih Role</option>
                                        <option value="admin">admin</option>
                                        <option value="siswa">siswa</option>
                                    </select>
                                    @error('role')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row px-4">
                                <div class="form-floating my-3 ps-2 col-6">
                                    <input type="email" class="form-control" id="floatingPassword" placeholder="Password"
                                        name="email">
                                    <label for="floatingPassword">Email Address</label>
                                    @error('email')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating my-3 ps-2 col-6">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                        name="password">
                                    <label for="floatingPassword">Password</label>
                                    @error('password')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="ps-4 mb-4">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
