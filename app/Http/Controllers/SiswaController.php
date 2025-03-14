<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
class SiswaController extends Controller
{
    public function loadAllSiswa(){
    $all_siswa = Siswa::all();

    
    if (Auth::user()->usertype == 'guru') {
        return view('guru.hasil-nilai', compact('all_siswa'));
    } elseif (Auth::user()->usertype == 'admin') {
        return view('admin.hasil-nilai', compact('all_siswa'));
    } elseif (Auth::user()->usertype == 'user') {
        return view('user.hasil-nilai-siswa', compact('all_siswa'));
    } else {
        return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}

    
    public function loadAddSiswaForm(){
        return view('guru.nilai');
    }
    
    public function AddSiswa(Request $request){
        


        try {
            $new_nilai = new Siswa;
            $new_nilai->nis = $request->nis;
            $new_nilai->nama = $request->nama;
            $new_nilai->rombel = $request->rombel;
            $new_nilai->mapel = $request->mapel;
            $new_nilai->guru = $request->guru;
            $new_nilai->nilaiharian = $request->nilaiharian;
            $new_nilai->ah1 = $request->ah1;
            $new_nilai->ah2 = $request->ah2;
            $new_nilai->nilaiakhir = $request->nilaiakhir;
            $new_nilai->nilaikeseluruhan = ($request->nilaiharian * 0.1) + ($request->ah1 * 0.2) + ($request->ah2 * 0.2) + ($request->nilaiakhir * 0.5);
            $new_nilai->save();
    
            return redirect('/hasil-nilai')->with('success', 'Nilai Siswa Added Successfully');
        } catch (\Exception $e) {
            return redirect('/input-nilai')->with('fail', $e->getMessage());
        }
    }
    public function loadEditForm($id){
        $siswa = Siswa::find($id);

        return view('guru.edit-siswa', compact('siswa'));
    }
    
   public function EditSiswa(Request $request){
    $request->validate([
        'nama' => 'required|string',
        'rombel' => 'required|string',
        'mapel' => 'required|string',
        'guru' => 'required|string',
        'nilaiharian' => 'required|integer',
        'ah1' => 'required|integer',
        'ah2' => 'required|integer',
        'nilaiakhir' => 'required|integer',
    ]);

    try {
        $update_siswa = Siswa::where('id', $request->siswa_id)->update([
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'mapel' => $request->mapel,
            'guru' => $request->guru,
            'nilaiharian' => $request->nilaiharian,
            'ah1' => $request->ah1,
            'ah2' => $request->ah2,
            'nilaiakhir' => $request->nilaiakhir,
            'nilaikeseluruhan' => ($request->nilaiharian * 0.1) + ($request->ah1 * 0.2) + ($request->ah2 * 0.2) + ($request->nilaiakhir * 0.5),
        ]);

        return redirect('/hasil-nilai')->with('success', 'Nilai Updated Successfully');
    } catch (\Exception $e) {
        return redirect('/edit/siswa/' . $request->siswa_id)->with('fail', $e->getMessage());
    }
}

    //list student
    public function index() { // menampilkan keseluruhan data
      $Nilai = Siswa::latest()->paginate(5);
      return new PostResource($Nilai);
     }
  



}
