@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Keluarga</h3>
                    </div>
                    <form action="/keluarga-karyawan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-4">
                            <div class="col-md-8 mb-3">
                                <div class="my-3">
                                    <label for="namakeluarga" class="form-label">Nama keluarga</label>
                                    <input type="text" name="nama" class="form-control" id="namakeluarga">
                                    @error('nama')
                                        <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">NIK</label>
                                    <input type="number" name="nik" class="form-control" placeholder="isi nik...">
                                </div>
                                 <div class="form-group mb-3">
                                    <label class="form-label">Hubungan</label>
                                    <input type="number" name="hubungan" class="form-control" placeholder="isi nik...">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Tanggal lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        placeholder="tanggal lahir...">
                                </div>
                                <div class="mb-3">
                                    <label for="kelaminSelect" class="form-label"> Jenis kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" id="kelaminSelect">
                                        <option selected="" value="">Pilih kelamin</option>
                                        <option selected="" value="L">Laki - laki</option>
                                        <option selected="" value="P">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" placeholder="asal sekolah...">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">No Telephone</label>
                                    <input type="number" name="nohp" class="form-control" placeholder="...">
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
                                            <input accept="image/*" type="file" name="foto" class="form-control mt-3"
                                                id="imageFile" onchange="previewImage()">
                                        </label>
                                        @error('foto')
                                            <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="kelaminSelect" class="form-label"> Jenis kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" id="kelaminSelect">
                                        <option selected="" value="">Pilih kelamin</option>
                                        <option selected="" value="L">Laki - laki</option>
                                        <option selected="" value="P">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="text-end">
                                    <a href="/keluarga" class="btn btn-secondary">Cancel</a>
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