<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Add New Siswa</div>
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{ Session::get('fail') }}</span>
                
            @endif
            <div class="card-body">
                <form action="{{ route('AddSiswa')}}"  method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nis</label>
                        <input type="text" value="{{ old('nis') }}" name="nis" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Nis">
                        @error('nis')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nama</label>
                        <input type="text" value="{{ old('nama') }}" name="nama" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Name">
                        @error('nama')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Jk</label>
                        <select name="jk" value="{{ old('jk') }}" class="form-select" id="autoSizingSelect">
                          <option selected>Choose Your Gender...</option>
                          <option value="L">L</option>
                          <option value="P">P</option>
                        </select>
                        @error('jk')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div> 
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Rombel</label>
                        <input type="text" value="{{ old('rombel') }}" name="rombel" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Rombel">
                        @error('rombel')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div> 
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Rayon</label>
                        <input type="text" value="{{ old('rayon') }}" name="rayon" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Rayon">
                        @error('rayon')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <button type="sumbit" class="btn btn-primary">Save</button>
             
                </form>
              
            </div>
        </div>
    </div>
</body>
</html>