<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function loadAllSiswa()
    {
        $all_siswa = User::all();
        return view('admin.akun', compact('all_siswa'));
    }

    public function loadEditForm($id){
        $siswa = User::find($id);

        return view('admin.edit-akun', compact('siswa'));
    }
        
  
    
    public function EditSiswa(Request $request){
       
        $request->validate([
            'nama' => 'required|string',
            'usertype' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        try {
            
            $update_siswa = User::where('id',$request->siswa_id)->update([
                'nama' => $request->name,
                'usertype' => $request->usertype,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            return redirect('/admin.akun')->with('success','Nilai Updated Successfully');
            } catch (\Exception $e) {
                return redirect('/edit/akun')->with('fail',$e->getMessage());
            }
    
    }
    
    public function deleteSiswa($id){
        try {
            User::where('id', $id)->delete();
            return redirect('/admin.akun')->with('success', 'Siswa Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('/admin.akun')->with('fail', $e->getMessage());
        }


    } 
    
    //list student
    public function index() { // menampilkan keseluruhan data
      $Nilai = User::latest()->paginate(5);
      return new PostResource($Nilai);
     }
  

}

