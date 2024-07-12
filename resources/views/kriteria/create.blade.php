@extends('layouts.app')
  
@section('title', 'Create Alternatif')
  
@section('contents')
    <h1 class="mb-0">Add Kriteria </h1>
    <hr />
    <form action="{{ route('kriteria.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="code_kriteria" class="form-control" placeholder="Kode Kriteria">
            </div>
            <div class="col">
                <input type="text" name="kriteria" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <select class="form-control @error('bobot') is-invalid @enderror" id="bobot" name="bobot" required>
                    <option value="">Bobot</option>
                    <option value="1" {{ old('bobot') == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ old('bobot') == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ old('bobot') == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ old('bobot') == '4' ? 'selected' : '' }}>4</option>
                    <option value="5" {{ old('bobot') == '5' ? 'selected' : '' }}>5</option>
                </select>
                @error('bobot')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <select class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required>
                    <option value="">Pilih kategori</option>
                    <option value="cost" {{ old('kategori') == 'cost' ? 'selected' : '' }}>Cost</option>
                    <option value="benefit" {{ old('kategori') == 'benefit' ? 'selected' : '' }}>Benefit</option>
                </select>
                @error('kategori')
                <span class="text-danger">{{ $message }}</span>
                @enderror 
            </div> 
        </div>
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
