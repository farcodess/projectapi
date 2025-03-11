<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Hasil-Nilai') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-hasil-nilai />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header text-white text-center shadow-sm" style="background-color: #7BD3EA;">
                Nilai Siswa
            </div>
            @if (Session::has('success'))
                <span class="alert alert-success p-2">{{Session::get('success')}}</span>
            @endif
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
            @endif
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Rombel</th>
                            <th>Mapel</th>
                            <th>Guru</th>
                            <th>Nilai Harian</th>
                            <th>AH 1</th>
                            <th>AH 2</th>
                            <th>Ulangan Akhir</th>
                            <th>Nilai Keseluruhan</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @php
    // Ensure $all_siswa is an array or a collection
    if (!is_countable($all_siswa)) {
        $all_siswa = [];
    }
@endphp
@if (count($all_siswa) > 0)
    @foreach ($all_siswa as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nis}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->rombel}}</td>
            <td>{{$item->mapel}}</td>
            <td>{{$item->guru}}</td>
            <td style="text-align: center;">{{$item->nilaiharian}}</td>
            <td style="text-align: center;">{{$item->ah1}}</td>
            <td style="text-align: center;">{{$item->ah2}}</td>
            <td style="text-align: center;">{{$item->nilaiakhir}}</td>
            <td style="color: {{ $item->nilaikeseluruhan < 75 ? 'red' : 'green' }}; text-align: center;">
            {{ $item->nilaikeseluruhan }}
            </td>

            <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a></td>
            <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>    
    @endforeach
@else
    <tr>
        <td colspan="8">No User Found!</td>
    </tr>
@endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
