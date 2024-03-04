@extends('layouts.app')

@section('content')
<div id="alert">
    @include('layouts.components.alert')
</div>
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="alert alert-success alert-dismissible" role="alert">
            <div class="d-flex">
                <div>
                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l5 5l10 -10"></path>
                    </svg>
                </div>
                <div>
                    {{ Session::get('success') }}
                </div>
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Keluarga</h3>
                    </div>
                    <form action="/keluarga-karyawan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-4">
                            <div class="col-md-6 mb-3">
                                <div class="form-group my-3">
                                    <label for="namakeluarga" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="namakeluarga">
                                    @error('nama')
                                        <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Hubungan</label>
                                    <input type="text" name="hubungan" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="form-group my-3">
                                    <label class="form-label">Tanggal lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        >
                                </div>
                                <div class="mb-3">
                                    <label for="kelaminSelect" class="form-label"> Jenis kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" id="kelaminSelect">
                                        <option selected="" value="Laki-laki">Laki - laki</option>
                                        <option selected="" value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control"
                                        >
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
