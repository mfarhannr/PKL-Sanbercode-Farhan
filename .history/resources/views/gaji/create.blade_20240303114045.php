@extends('layouts.app')

@section('content')
    <div class="page-wrapper">

        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Akun</h3>
                    </div>
                    <form action="/gaji" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-0">
                            <div class="row px-4">
                                <div class="form-floating my-3 ps-2 col-4">
                                    <select name="karyawan_id" class="form-control" id="floatingInput" >
                                        @foreach ($karyawan as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingInput">Karyawan</label>
                                </div>
                                {{-- <div class="form-group my-3">
                                    <label for="namakeluarga" class="form-label">Pilih Karyawan</label>
                                    <select name="id_karyawan" class="form-control">
                                        @foreach ($karyawan as $karyawanData)
                                            <option value="{{ $karyawanData->id }}">{{ $karyawanData->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="number" class="form-control" id="floatingInput"
                                        placeholder="masukkan username" name="nip">
                                    <label for="floatingInput">NIP</label>
                                    @error('nip')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror --}}
                                <div class="form-floating my-3 ps-2 col-4">
                                    <input type="number" class="form-control" id="floatingInput"
                                        placeholder="masukkan username" name="tunjangan">
                                    <label for="floatingInput">Tunjangan</label>
                                    @error('tunjangan')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating my-3 ps-2 col-4">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Input"
                                        name="gaji_pokok">
                                    <label for="floatingInput">Gaji Pokok</label>
                                    @error('gaji_pokok')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating my-3 ps-2 col-4">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="Input"
                                        name="tanggal">
                                    <label for="floatingInput">Tanggal</label>
                                    @error('tanggal')
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
