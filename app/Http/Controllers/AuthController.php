<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;
use Auth;
use File;
use App\User;
use Validator;

class AuthController extends Controller
{
    //
    public function Dashboard()
    {
        $instansi = Instansi::whereid(Auth::user()->id_instansi)->first()->nama_instansi;

        return view('auth\dashboard',compact('instansi'));
    }


     public function UploadBukti(Request $request)
     {
        $validator = Validator::make($request->all(), [
            'formBukti' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('validator', 'failed');
        }

            $d = User::whereid(Auth::user()->id)->first();

            $file = $request->file('formBukti');
            $extensi = $file->getClientOriginalExtension();
            $pin = mt_rand(00, 999);
            $nama_file = $d->id_instansi . '-' . $d->id . '-' . $pin . '.' . $extensi;
            $destinasi = public_path() . '/files/bukti/';

            if (!File::isDirectory($destinasi)) {
                File::makeDirectory($destinasi, 0775, true);
            }

            $file->move($destinasi, $nama_file);

            $p = User::whereid($d->id)->first();
            $p->bukti = $nama_file;
            $p->save();

            if ($p) {
                return redirect('dashboard');
            }
     }

     public function Anggota()
     {
         return view('auth\anggota');
     }

     public function DataAnggota()
     {
        if(Auth::user()->level == "Admin"){
            $d = User::where('level','!=','Admin')->join('instansi','instansi.id','users.id_instansi')->get();
            return $d;
        }else{
            return response()->json(['error' => 'Not authorized.'],403);
        }
     }
}
