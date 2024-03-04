@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Karyawan</h3>
                    </div>
                    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row px-4">
                            <div class="col-md-8 mb-3">
                                <div class="form-group my-3">
                                    <label class="form-label">NIK</label>
                                    <input type="number" name="nik" class="form-control"  value="{{ $karyawan->nik }}">
                                    @error('nik')
                                        <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="namaKaryawan" class="form-label">Nama Karyawan</label>
                                    <input type="text" name="nama" class="form-control" id="namaKaryawan" value="{{ $karyawan->nama }}">
                                    @error('nama')
                                        <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Tempat lahir</label>
                                    <input type="string" name="tempat_lahir" class="form-control" value="{{ $karyawan->tempat_lahir }}"
                                        >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Tanggal lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ $karyawan->tanggal_lahir }}"
                                        >
                                </div>
                                <div class="mb-3">
                                    <label for="kelaminSelect" class="form-label"> Jenis kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" id="kelaminSelect" value="{{ $karyawan->jenis_kelamin }}" >
                                        <option selected="" value="Laki-laki">Laki-laki</option>
                                        <option selected="" value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control"  value="{{ $karyawan->alamat }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Status</label>
                                     <select class="form-select" name="status" id="statusSelect" value="{{ $karyawan->alamat }}">
                                        <option selected="" value="Menikah">Menikah</option>
                                        <option selected="" value="Belum menikah">Belum Menikah</option>
                                    </select>
                                </div>
                                 <div class="form-group mb-3">
                                    <label class="form-label">Tanggal Masuk</label>
                                    <input type="text" name="tanggal_masuk" class="form-control"  value="{{ $karyawan->tanggal_masuk }}">
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="my-3">
                                    <div class="card shadow-none border text-center">
                                        <label class="form-label border-dashed cursor-pointer" id="label"
                                            style="border-radius:10px;" for="imageFile">Masukkan Foto
                                            <img class="img-preview img-fluid mb-2 mx-auto">
                                            <img src="{{ asset('img/imageplus.png') }}" id="plusimg"
                                                class="img-fluid p-md-3" alt="">
                                            <input accept="image/*" type="file" name="foto" class="form-control mt-3" value="{{ $karyawan->foto }}"
                                                id="imageFile" onchange="previewImage()">
                                        </label>
                                        @error('foto')
                                            <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">No Telephone</label>
                                    <input type="number" name="nohp" class="form-control"  value="{{ $karyawan->nohp }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control"  value="{{ $karyawan->email }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control"  value="{{ $karyawan->jabatan }}">
                                </div>
                                
                                <div class="text-end">
                                    <a href="/karyawan" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
