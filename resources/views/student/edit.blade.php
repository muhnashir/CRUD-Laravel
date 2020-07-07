@extends('layout.main')

@section('title','ubah data mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1 class="mt-3">Form ubah Mahasiswa</h1>
            <form method="POST" action="/students/{{ $student->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Mahasiswa</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="formGroupExampleInput" placeholder="Masukkan nama" name="nama" value="{{ $student->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nomor Induk Mahasiswa</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="formGroupExampleInput2" placeholder="Masukkan nomor induk" name="nrp" value="{{ $student->nrp }}">
                        @error('nrp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="formGroupExampleInput2" placeholder="Masukkan nomor induk" name="email" value="{{ $student->email }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="formGroupExampleInput2" placeholder="Masukkan jurusan" name="jurusan" value="{{ $student->jurusan }}">
                        @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
@endsection