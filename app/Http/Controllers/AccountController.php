<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function loadAllAkun()
    {
        $all_siswa = User::all();
        return view('admin.akun', compact('all_siswa'));
    }

    public function loadEditAkun($id){
        $siswa = User::find($id);

        return view('admin.edit-akun', compact('siswa'));
    }
        
  
    
    public function EditAkun(Request $request){
       
        $request->validate([
            'name' => 'required|string',
            'usertype' => 'required|string',
            'email' => 'required|string',
           
        ]);
        try {
            
            $update_siswa = User::where('id',$request->siswa_id)->update([
                'name' => $request->name,
                'usertype' => $request->usertype,
                'email' => $request->email,
                
            ]);
            return redirect('/akun')->with('success','Akun Updated Successfully');
            } catch (\Exception $e) {
                return redirect('/edit/akun/')->with('fail',$e->getMessage());
            }
    
    }
    
    public function deleteAkun($id){
        try {
            User::where('id', $id)->delete();
            return redirect('/akun')->with('success', 'Akun Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('/akun')->with('fail', $e->getMessage());
        }


    } 
    
    //list student
    public function index() { // menampilkan keseluruhan data
      $Nilai = User::latest()->paginate(5);
      return new PostResource($Nilai);
     }
  

}

