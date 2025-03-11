<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Nilai siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Nilai Siswa</div>
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
            @endif
            <div class="card-body">
                <form action="{{ route('EditSiswa')}}" method="post">
                    @csrf
                    <input type="hidden" name="siswa_id" id="" value="{{$siswa->id}}">
                    <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nis</label>
                    <input type="text" name="nis" value="{{$siswa->nis}}" class="form-control" id="formGroupExampleInput" placeholder="Enter Full Name" readonly>
                    @error('nis')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('nama')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Rombel</label>
                        <input type="text" name="rombel" class="form-control" value="{{$siswa->rombel}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('rombel')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                       <label for="formGroupExampleInput2" class="form-label">Mapel</label>
                       <select name="mapel" class="form-select" id="autoSizingSelect">
                       <option value="Matematika" {{ $siswa->mapel == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                       <option value="Bahasa Indonesia" {{ $siswa->mapel == 'Bahasa Indonesia' ? 'selected' : '' }}>Bahasa Indonesia</option>
                       </select>
                       @error('mapel')
                       <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Guru</label>
                        <input type="text" name="guru" class="form-control" value="{{$siswa->guru}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('guru')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nilai Harian</label>
                        <input type="text" name="nilaiharian" class="form-control" value="{{$siswa->nilaiharian}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('nilaiharian')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Assesment Harian 1</label>
                        <input type="text" name="ah1" class="form-control" value="{{$siswa->ah1}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('ah1')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Assesment Harian 2</label>
                        <input type="text" name="ah2" class="form-control" value="{{$siswa->ah2}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('ah2')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Ulangan Akhir</label>
                        <input type="text" name="nilaiakhir" class="form-control" value="{{$siswa->nilaiakhir}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('nilaiakhir')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
                
            </div>
        </div>
    </div>
</body>
</html>