<?php

namespace App\Http\Controllers;

use App\Models\Siswa; 
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function loadAllSiswa(){
        $all_siswa = Siswa::all();
        return view('siswa', compact('all_siswa'));
    }
    
    public function loadAddSiswaForm(){
        return view('add-siswa');
    }
    
    public function AddSiswa(Request $request){
        $request->validate([
            'nis' => 'required|integer|unique:siswa',
            'nama' => 'required|string',
            'jk' => 'required|string',
            'rombel' => 'required|string',
            'rayon' => 'required|string',
        ]);
        try {
            $new_siswa = new Siswa;
            $new_siswa->nis = $request->nis;
            $new_siswa->nama = $request->nama;
            $new_siswa->jk = $request->jk;
            $new_siswa->rombel = $request->rombel;
            $new_siswa->rayon = $request->rayon;
            $new_siswa->save();
        
            return redirect('/siswa')->with('success', 'Siswa Added Successfully');
        } catch (\Exception $e) {
            return redirect('/add/siswa')->with('fail', $e->getMessage());
        }
    }
    
    public function loadEditForm($id){
        $siswa = Siswa::find($id);

        return view('edit-siswa', compact('siswa'));
    }
    
    public function EditSiswa(Request $request){
       
        $request->validate([
            'nis' => 'required|integer|unique:siswa',
            'nama' => 'required|string',
            'jk' => 'required|string',
            'rombel' => 'required|string',
            'rayon' => 'required|string',
        ]);
        try {
            
            $update_siswa = Siswa::where('id',$request->siswa_id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            ]);
            return redirect('/siswa')->with('success','User Updated Successfully');
            } catch (\Exception $e) {
                return redirect('/edit/siswa')->with('fail',$e->getMessage());
            }
    
    }
    
    public function deleteSiswa($id){
        try {
            Siswa::where('id', $id)->delete();
            return redirect('/siswa')->with('success', 'Siswa Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('/siswa')->with('fail', $e->getMessage());
        }
    }
}
