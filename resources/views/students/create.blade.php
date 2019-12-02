@extends('layout/main')
@section('title','From Tambah Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="/student">
                @crsf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan NAma" name="nama" value="{{old('nama')}}">
                    @error
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>