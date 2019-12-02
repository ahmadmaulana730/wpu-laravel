@extends('layout/main')
@section('title','From Tambah Data Mahasiswa')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="/students">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="col">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="jurusan">jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="jurusan">
                    </div>
                    <div class="col">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection