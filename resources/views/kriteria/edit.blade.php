@extends('layouts.app')

@section('title', 'Edit Kriteria')

@section('contents')
    <h1 class="mb-0">Edit Kriteria</h1>
    <hr />
    <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-3">
                <input type="text" name="code_kriteria" class="form-control" placeholder="Kode Kriteria" value="{{ $kriteria->code_kriteria }}">
            </div>
            <div class="col-md-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $kriteria->nama }}">
            </div>
            <div class="col-md-3">
                <select class="form-control @error('bobot') is-invalid @enderror" id="bobot" name="bobot" required>
                    <option value="">Bobot</option>
                    <option value="1" {{ old('bobot', $kriteria->bobot) == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ old('bobot', $kriteria->bobot) == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ old('bobot', $kriteria->bobot) == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ old('bobot', $kriteria->bobot) == '4' ? 'selected' : '' }}>4</option>
                    <option value="5" {{ old('bobot', $kriteria->bobot) == '5' ? 'selected' : '' }}>5</option>
                </select>
                @error('bobot')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <select class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required>
                    <option value="">Pilih kategori</option>
                    <option value="cost" {{ old('kategori', $kriteria->kategori) == 'cost' ? 'selected' : '' }}>Cost</option>
                    <option value="benefit" {{ old('kategori', $kriteria->kategori) == 'benefit' ? 'selected' : '' }}>Benefit</option>
                </select>
                @error('kategori')
                <span class="text-danger">{{ $message }}</span>
                @enderror 
            </div> 
        </div>
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
