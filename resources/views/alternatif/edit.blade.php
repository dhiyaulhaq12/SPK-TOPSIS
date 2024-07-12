@extends('layouts.app')

@section('title', 'Edit Alternatif')

@section('contents')
    <h1 class="mb-0">Edit Alternatif</h1>
    <hr />
    <form action="{{ route('alternatif.update', $alternatif->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="code_alternatif" class="form-control" placeholder="Kode Alternatif" value="{{ $alternatif->code_alternatif }}">
            </div>
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $alternatif->nama }}">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
