<!-- @extends('layouts.app')

@section('title', 'SubKriteria')

@section('contents')
    
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Sub Kriteria</h1>
</div>
<hr />
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table class="table table-hover" style="">
    <thead class="table text-white" style="background-color: #576CBC">
        <tr>
            {{-- <th>No</th> --}}
            <th>Kode Kriteria</th>
            <th>Kriteria</th>
            <th>Nama Sub</th>
            <th>Bobot</th>
            {{-- <th>Action</th> --}}
        </tr>
    </thead>
    <tbody>
        @if($Subkriteria->count() > 0)
            @foreach($Subkriteria as $rs)
                <tr>
                    {{-- <td class="align-middle">{{ $loop->iteration }}</td> --}}
                    <td class="align-middle">{{ $rs->code_kriteria }}</td>
                    <td class="align-middle">{{ $rs->kriteria}}</td>
                    <td class="align-middle">{{ $rs->nama_sub}}</td>
                    <td class="align-middle" >{{ $rs->bobot}}</td>
                    <td class="align-middle btn text-white" style="background-color: #059212">{{ $rs->type}}</td>
                     <td class="align-middle">
                         <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="#" type="button" class="btn btn-secondary">Detail</a>
                            <a href="#" type="button" class="btn btn-warning">Edit</a>
                            <form action="#" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td> -->
                <!-- </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Alternatif not found</td>
            </tr>
        @endif
    </tbody>
</table>


@endsection --> 