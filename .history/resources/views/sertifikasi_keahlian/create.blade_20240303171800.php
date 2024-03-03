@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Pengalaman</h3>
                    </div>
                    <form action="/sertifikasi-keahlian" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-4">
                            <div class="col-md-6 my-3">
                                <div class="form-group mb-3">
                                    <label class="form-label">Nama Sertifikasi</label>
                                    <input type="text" name="posisi" class="form-control" id="namapengalaman">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Lembaga Penerbit</label>
                                    <input type="text" name="perusahaan" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">File Sertifikat</label>
                                    <input class="form-control" type="file" id="formFile" name="sertifikat_path" >
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="form-group my-3">
                                    <label class="form-label">Tanggal Terbit</label>
                                    <input type="date" name="tanggal_terbit" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Tanggal Expire</label>
                                    <input type="date" name="tanggal_expire" class="form-control">
                                </div>
                                .my-3
                                <div class="text-end">
                                    <a href="/sertifikasi-keahlian" class="btn btn-secondary">Cancel</a>
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
