@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Pendidikan</h3>
                    </div>
                    <form action="/pendidikan/{{ $pendidikan->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row px-4">
                            <div class="col-md-6 my-3">
                                <div class="form-group mb-3">
                                    <label for="namapendidikan" class="form-label">Tingkat Pendidikan</label>
                                    <input type="text" name="tingkat_pendidikan" class="form-control" id="namapendidikan" value="{{ $pendidikan->tingkat_pendidikan }}" > 
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Nama Sekolah</label>
                                    <input type="text" name="nama_sekolah" class="form-control" value="{{ $pendidikan->nama_sekolah }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="form-group my-3">
                                    <label class="form-label">Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control " value="{{ $pendidikan->jurusan }}"
                                        >
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Tahun Lulus</label>
                                    <input type="number" name="tahun_lulus" class="form-control"
                                        >
                                </div>
                                <div class="text-end">
                                    <a href="/pendidikan" class="btn btn-secondary">Cancel</a>
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
