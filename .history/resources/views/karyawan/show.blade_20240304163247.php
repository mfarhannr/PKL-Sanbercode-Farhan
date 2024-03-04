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
    <div class="my-2">
        <form action="{{ route('karyawan.show', $karyawan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card p-0">
                        <div class="card-body">
                            <div class="card shadow-none border text-center">
                                <label class="form-label border-dashed cursor-pointer" id="label"
                                    style="border-radius:10px;" for="imageFile">Masukkan Foto
                                    <img class="img-preview img-fluid mb-2 mx-auto">
                                    <img src="{{ asset('img/imageplus.png') }}" id="plusimg" class="img-fluid p-md-3"
                                        alt="">
                                    <input accept="image/*" type="file" name="foto" class="form-control mt-3"
                                        value="{{ $karyawan->foto }}" id="imageFile" onchange="previewImage()">
                                </label>
                                @error('foto')
                                    <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Akun</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', auth()->user()->name) }}" placeholder="Your Full Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label h3">Email</label>
                                <input type="text" name="email" class="form-control"
                                    value="{{ old('email', auth()->user()->email) }}" placeholder="Your email">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label h3">Nama Karyawan</label>
                                <input type="text" name="email" class="form-control" value="{{ $karyawan->nama }}"
                                    placeholder="Nama Karyawan">
                            </div>
                            <div class="form-group my-3">
                                <label class="form-label">NIP</label>
                                <input type="number" name="nip" class="form-control" placeholder="isi nip..."
                                    value="{{ $karyawan->nip }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-6 mt-3 mt-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="alamat" class="form-label h3">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat anda">{{ $karyawan->alamat }}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label h3">Tempat lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control"
                                    value="{{ $karyawan->tempat_lahir }}" placeholder="Tempat Lahir">
                            </div>
                            <div class="mb-3">
                                <label for="negara" class="form-label">Tanggal Lahir</label>
                                <input type="text" name="negara" class="form-control"
                                    value="{{ $karyawan->tanggal_lahir }}" placeholder="Tanggal Lahir">
                            </div>
                            <div class="mb-3">
                                <label for="kelaminSelect" class="form-label"> Jenis kelamin</label>
                                <select class="form-select" name="jenis_kelamin" id="kelaminSelect"
                                    value="{{ $karyawan->jenis_kelamin }}">
                                    <option selected="Pilih kelamin" value="">Pilih kelamin</option>
                                    <option selected="" value="Laki-laki">Laki-laki</option>
                                    <option selected="" value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">No Telephone</label>
                                <input type="number" name="nohp" class="form-control" placeholder="..."
                                    value="{{ $karyawan->nohp }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="..."
                                    value="{{ $karyawan->email }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" placeholder="..."
                                    value="{{ $karyawan->jabatan }}">
                            </div>
                        </div>
                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection
