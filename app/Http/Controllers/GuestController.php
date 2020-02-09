<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use DB;
use Hash;
use File;
use App\Instansi;
use App\User;

class GuestController extends Controller
{
    public function Index()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('guest.register');
        }
    }

    public function Masuk(Request $request)
    {
        if (Auth::attempt(['email' => $request->get('emaillogin'), 'password' => $request->get('passwordlogin')])) {
            $user = User::find(Auth::id());
            //cek password harus enskripsi lagi atau tidak
            if (Hash::needsRehash($user->password)) {
                $password = Hash::make($request->get('passwordlogin'));
                $user->password = $password;
                $user->save();
            }
                return redirect('/dashboard');
        } else {
            return redirect('/')->with('login', 'error');
        }
    }

    public function Daftar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pasfoto' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
            'nama' => 'required|string|max:25',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
            'kode' => 'required|integer',
            'jns_kel' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'tempatlahir' => 'required|string',
            'tanggallahir' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('validator', 'failed');
        }

            $d = new User();
            $d->name = $request->get('nama');
            $d->email = $request->get('email');
            $d->id_instansi = $request->get('kode');
            $d->alamat = $request->get('alamat');
            $d->telepon = $request->get('telepon');
            $d->jns_kel = $request->get('jns_kel');
            $d->tempatlahir = $request->get('tempatlahir');
            $d->tanggallahir = $request->get('tanggallahir');
            $d->password = Hash::make($request->get('password'));
            $d->save();

            $file = $request->file('pasfoto');
            $extensi = $file->getClientOriginalExtension();
            $pin = mt_rand(00, 999);
            $nama_file = $d->id_instansi . '-' . $d->id . '-' . $pin . '.' . $extensi;
            $destinasi = public_path() . '/files/pasfoto/';

            if (!File::isDirectory($destinasi)) {
                File::makeDirectory($destinasi, 0775, true);
            }

            $file->move($destinasi, $nama_file);

            $p = User::whereid($d->id)->first();
            $p->foto = $nama_file;
            $p->save();

            if ($p) {
                Auth::loginUsingId($d->id);
                return redirect('dashboard');
            }else{
                return redirect()->route('home');
            }
    }

    public function DataInstansi()
    {
        $d = Instansi::all();
        return $d;
    }

    public function TambahInstansi(Request $request)
    {
        $d = new Instansi();
        $d->nama_instansi = $request->get('nama');
        $d->singkatan_instansi = $request->get('pendek');
        $d->save();

        if($d){
            return 1;
        }else{
            return "";
        }
    }

    public function Keluar()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
