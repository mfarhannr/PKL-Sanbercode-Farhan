@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update pel</h3>
                    </div>
                    <form action="/pel/{{ $pel->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row px-4">
                            <div class="col-md-6 my-3">
                                <div class="form-group mb-3">
                                    <label for="namapel" class="form-label">Tingkat pel</label>
                                    <input type="text" name="posisi" class="form-control" id="namapel"
                                        value="{{ $pel->posisi }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Perusahaan</label>
                                    <input type="text" name="perusahaan" class="form-control"
                                        value="{{ $pel->perusahaan }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control "
                                        value="{{ $pel->deskripsi }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">

                                <div class="form-group my-3">
                                    <label class="form-label">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" class="form-control"
                                        value="{{ $pel->tanggal_mulai }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_selesai" class="form-control"
                                        value="{{ $pel->tanggal_selesai }}">
                                </div>
                                <div class="text-end">
                                    <a href="/pel" class="btn btn-secondary">Cancel</a>
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
