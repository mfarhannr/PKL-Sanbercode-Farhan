@extends('layouts.app')
@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <h3 class="page-title">
                            Karyawan
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card p-0">
                            <div class="card-body">
                                <div class="card shadow-none border text-center">
                                    <label class="form-label border-dashed cursor-pointer" id="label"
                                        style="border-radius:10px;" for="imageFile">
                                        Foto
                                        @if ($karyawan->foto)
                                            <img class="img-preview img-fluid mb-2 mx-auto"
                                                src="{{ asset('storage/' . $karyawan->foto) }}" alt="Foto Karyawan">
                                        @endif
                                        <img src="{{ asset('img/imageplus.png') }}" id="plusimg" class="img-fluid p-md-3"
                                            alt="">
                                        <input accept="image/*" type="file" name="foto" class="form-control mt-3"
                                            id="imageFile" onchange="previewImage()">
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Akun</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', auth()->user()->name) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label h3">Email</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{ old('email', auth()->user()->email) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label h3">Nama Karyawan</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $karyawan->nama }}"
                                        Karyawan">
                                </div>
                                <div class="form-group my-3">
                                    <label class="form-label">NIK</label>
                                    <input type="number" name="nik" class="form-control" value="{{ $karyawan->nik }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-6 mt-3 mt-md-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label h3">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="3" at anda">{{ $karyawan->alamat }}}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Tanggal lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        value="{{ $karyawan->tanggal_lahir }}">
                                </div>
                                <div class="mb-3">
                                    <label for="kota" class="form-label h3">Tempat lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        value="{{ $karyawan->tempat_lahir }}">
                                </div>
                                <div class="mb-3">
                                    <label for="negara" class="form-label">Tanggal Lahir</label>
                                    <input type="text" name="negara" class="form-control"
                                        value="{{ $karyawan->tanggal_lahir }}">
                                </div>
                                <div class="mb-3">
                                    <label for="kelaminSelect" class="form-label"> Jenis kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" id="kelaminSelect"
                                        value="{{ $karyawan->jenis_kelamin }}">
                                        <option selected="" value="Laki-laki">Laki-laki</option>
                                        <option selected="" value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">No Telephone</label>
                                    <input type="number" name="nohp" class="form-control"
                                        value="{{ $karyawan->nohp }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{ $karyawan->email }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control"
                                        value="{{ $karyawan->jabatan }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status" id="statusSelect"
                                        value="{{ $karyawan->alamat }}">
                                        <option selected="" value="Menikah">Menikah</option>
                                        <option selected="" value="Belum menikah">Belum Menikah</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Tanggal Masuk</label>
                                    <input type="text" name="tanggal_masuk" class="form-control"
                                        value="{{ $karyawan->tanggal_masuk }}">
                                </div>
                            </div>
                            <div class="card-footer bg-transparent mt-auto">
                                <div class="btn-list justify-content-end">
                                    <button type="submit" class="btn btn-primary"
                                        href="{{ route('karyawan.index') }}">
                                        Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
