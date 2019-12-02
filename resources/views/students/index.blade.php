@extends('layout/main')
@section('title','Daftar Mahasiswa')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <a href="/students/create" class="badge badge-primary my-3">Tambah Data Mahasiswa</a>
            @if (session('status'))
            <div class="alert alert-success ">
                {{session('status')}}
            </div>
            @endif
            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <div class=" container">
                        <a href="/students/{{$student->id}}" class="badge badge-info">detail</a>
                        <!-- <a href="/students/{{ $student->id }}" class="badge badge-info">Detail</a> -->
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection