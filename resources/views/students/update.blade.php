@extends('layout/main')
@section('title','From Tambah Data Mahasiswa')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="/students/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan Nama" value="{{$student->nama}}">
                        @error('nama')

                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="NRP" value="{{$student->nrp}}">
                        @error('nrp')

                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="jurusan">jurusan</label>
                        <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="jurusan" value="{{$student->jurusan}}">
                        @error('jurusan')

                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="email">email</label>
                        <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{$student->email}}">
                        @error('email')

                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection