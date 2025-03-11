<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input-Nilai') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-input-nilai />
            </div>
        </div>
        
    </div>
        <div class="container">
            <div class="card">
                <div class="card-header">Add Nilai Siswa</div>
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
                        
                          {{-- <div class="mb-3">
                              <label for="formGroupExampleInput2" class="form-label">Nama</label>
                              <select name="nama" class="form-control" id="formGroupExampleInput2">
                                  <option value="">Pilih Nama</option>
                                  @foreach($all_siswa as $user)
                                      <option value="{{ $user->id }}" {{ old('nama') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                  @endforeach
                              </select>
                              @error('nama')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div> --}}

                          

                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nama</label>
                            <input type="text" value="{{ old('nama') }}" name="nama" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Name">
                            @error('nama')
                            <span class="text-danger">{{$message}}</span>
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
                            <label for="formGroupExampleInput2" class="form-label">Mapel</label>
                            <select name="mapel" value="{{ old('mapel') }}" class="form-select" id="autoSizingSelect">
                              <option selected>Choose Your Mapel...</option>
                              <option value="Matematika">Matematika</option>
                              <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            </select>
                            @error('mapel')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div> 
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Guru</label>
                            <input type="text" value="{{ old('guru') }}" name="guru" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Guru">
                            @error('guru')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nilai Harian</label>
                            <input type="text" value="{{ old('nilaiharian') }}" name="nilaiharian" class="form-control" id="formGroupExampleInput2" placeholder="Enter Nilai Harian">
                            @error('nilaiharian')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Assessment Harian 1</label>
                            <input type="text" value="{{ old('ah1') }}" name="ah1" class="form-control" id="formGroupExampleInput2" placeholder="Enter Assesmen Harian 1">
                            @error('ah1')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Assessment Harian 2</label>
                            <input type="text" value="{{ old('ah2') }}" name="ah2" class="form-control" id="formGroupExampleInput2" placeholder="Enter Assesmen Harian 2">
                            @error('ah2')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Ulangan Akhir</label>
                            <input type="text" value="{{ old('nilaiakhir') }}" name="nilaiakhir" class="form-control" id="formGroupExampleInput2" placeholder="Enter Nilai Ulangan Akhir">
                            @error('nilaiakhir')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <button type="sumbit" class="btn btn-primary">Save</button>
                 
                    </form>
                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
