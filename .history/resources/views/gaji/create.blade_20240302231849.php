@extends('layouts.app')

@section('content')
    <div class="page-wrapper">

        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Akun</h3>
                    </div>
                    <form action="/accounts" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-0">
                            <div class="row px-4">
                                <div class="form-floating my-3 ps-2 col-6">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="masukkan username" name="name">
                                    <label for="floatingInput">Username</label>
                                    @error('name')
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
