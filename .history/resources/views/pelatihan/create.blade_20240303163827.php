@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Pelatihan</h3>
                    </div>
                    <form action="/pelatihan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-4">
                            <div class="col-md-6 my-3">
                                <div class="form-group mb-3">
                                    <label for="namapelatihan" class="form-label">Nama Pelatihan</label>
                                    <input type="text" name="nama_pelatihan" class="form-control" id="namapelatihan">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Perusahaan</label>
                                    <input type="text" name="penyelenggara" class="form-control" >
                                </div>
                                <div class="form-group my-3">
                                    <label class="form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control"
                                        >
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="form-group my-3">
                                    <label class="form-label">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" class="form-control"
                                        >
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_selesai" class="form-control"
                                        >
                                </div>
                                <div class="text-end">
                                    <a href="/pelatihan" class="btn btn-secondary">Cancel</a>
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
