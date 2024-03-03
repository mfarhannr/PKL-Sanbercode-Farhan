@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Akun</h3>
                    </div>
                    <form action="/karyawan" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row px-4">
                            <div class="col-md-8 mb-3">
                                        <div class="my-3">
                                            <label for="namaKaryawan" class="form-label">Nama Karyawan</label>
                                            <input type="text" name="name" class="form-control" id="namaKaryawan">
                                            @error('name')
                                                <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">NIP</label>
                                            <input type="number" name="nip" class="form-control"
                                                placeholder="isi nisn...">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label">Tempat lahir</label>
                                            <input type="string" name="tempat_lahir" class="form-control"
                                                placeholder="tempat lahir...">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Tanggal lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control"
                                                placeholder="tanggal lahir...">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control"
                                                placeholder="asal sekolah...">
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
                                                    <input accept="image/*" type="file" name="foto"
                                                        class="form-control mt-3" id="imageFile" onchange="previewImage()">
                                                </label>
                                                @error('gambar')
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
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a href="/film" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            {{-- <div class="my-3">
                                <div class="form-label">Sertifikat</div>
                                <input type="file" name="foto" class="form-control">
                                @error('foto')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Nama Karyawan</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="masukkan nama lengkap...">
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">NIP</label>
                                <input type="number" name="nisn" class="form-control" placeholder="isi nisn...">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Tempat lahir</label>
                                <input type="string" name="place" class="form-control" placeholder="tempat lahir...">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Tanggal lahir</label>
                                <input type="date" name="birthday" class="form-control"
                                    placeholder="tanggal lahir...">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label"> Jenis Kelamin</label>

                                <input class="form-radio-input" type="radio" name="jenis_kelamin" value="L"
                                    checked="">
                                <span class="form-radio-sign">Laki - Laki</span>
                                </label>
                                <label class="form-radio-label ml-3 mb-3">
                                    <input class="form-radio-input" type="radio" name="jenis_kelamin" value="P">
                                    <span class="form-radio-sign">Perempuan</span>
                                </label>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="asal sekolah...">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label"> Jenis Kelamin</label>

                                <input class="form-radio-input" type="radio" name="gender" value="0"
                                    checked="">
                                <span class="form-radio-sign">Laki - Laki</span>
                                </label>
                                <label class="form-radio-label ml-3 mb-3">
                                    <input class="form-radio-input" type="radio" name="gender" value="1">
                                    <span class="form-radio-sign">Perempuan</span>
                                </label>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Tempat lahir</label>
                                <input type="string" name="place" class="form-control" placeholder="tempat lahir...">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Tanggal lahir</label>
                                <input type="date" name="birthday" class="form-control"
                                    placeholder="tanggal lahir...">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">No Telephone</label>
                                <input type="number" name="nohp" class="form-control" placeholder="...">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Agama</label>
                                <select type="text" class="form-select tomselected ts-hidden-accessible"
                                    id="select-users" value="" tabindex="1">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Alamat Rumah</label>
                                <input type="text" name="address" class="form-control" placeholder="alamat rumah...">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">No Telephone</label>
                                <input type="number" name="nohp" class="form-control" placeholder="...">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Riwayat Penyakit</label>
                                <input type="text" name="disease" class="form-control"
                                    placeholder="jika tidak ada riwayat penyakit maka isi - ">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Nama Orangtua</label>
                                <input type="text" name="parents_name" class="form-control"
                                    placeholder="masih ada/almarhum">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Pekerjaan Orangtua</label>
                                <input type="text" name="parents-occupation" class="form-control" placeholder="...">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Kontak Orang Tua</label>
                                <input type="number" name="parents_contact" class="form-control" placeholder="...">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Prestasi yang Pernah Diraih</label>
                                <input type="text" name="achievement" class="form-control" placeholder="...">
                            </div>

                            <div class="mb-3">
                                <div class="form-label">Sertifikat</div>
                                <input type="file" name="file" class="form-control">
                                @error('file')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="#">
                                <button class="btn btn-red">Kembali</button>
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="row px-4">
                                <div class="form-floating my-3 ps-2 col-6">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="masukkan username" name="name">
                                    <label for="floatingInput">Username</label>
                                    @error('name')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating my-3 ps-2 col-6">
                                    <select class="form-select pt-2" name="role" aria-label="Default select example"
                                        placeholder="pilih role">
                                        <option value="">Pilih Role</option>
                                        <option value="admin">admin</option>
                                        <option value="siswa">siswa</option>
                                    </select>
                                    @error('role')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row px-4">
                                <div class="form-floating my-3 ps-2 col-6">
                                    <input type="email" class="form-control" id="floatingPassword"
                                        placeholder="Password" name="email">
                                    <label for="floatingPassword">Email Address</label>
                                    @error('email')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating my-3 ps-2 col-6">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" name="password">
                                    <label for="floatingPassword">Password</label>
                                    @error('password')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div> --}}
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
