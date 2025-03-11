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
            <div class="card-header">Edit Account</div>
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
            @endif
            <div class="card-body">
                <form action="{{ route('EditSiswa')}}" method="post">
                    @csrf
                    <input type="hidden" name="siswa_id" id="" value="{{$siswa->id}}">
                  
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}" id="formGroupExampleInput2" placeholder="Enter Nama">
                        @error('nama')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Usertype</label>
                        <input type="text" name="usertype" class="form-control" value="{{$siswa->usertype}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('usertype')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$siswa->email}}" id="formGroupExampleInput2" placeholder="Enter Rombel">
                        @error('email')
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