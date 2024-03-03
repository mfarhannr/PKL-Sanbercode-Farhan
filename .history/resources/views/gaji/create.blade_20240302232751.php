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
                                <div class="form-floating my-3 ps-2 col-auto">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="masukkan username" name="nip">
                                    <label for="floatingInput">NIP</label>
                                    @error('nip')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating my-3 ps-2 col-auto">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="masukkan username" name="tunjangan">
                                    <label for="floatingInput">Tunjangan</label>
                                    @error('tunjangan')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating my-3 ps-2 col-auto">
                                    <input type="email" class="form-control" id="floatingPassword" placeholder="Password"
                                        name="gaji_pokok">
                                    <label for="floatingPassword">Gaji Pokok</label>
                                    @error('gaji_pokok')
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
