<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
class ClientController extends Controller
{
    
    function login(Request $request){
        $validated=$request->validate([
            "nama"=>"required",
            "instansi"=>"required"
        ]);
        foreach ($request->nama as $nama){
            Client::create([
                "nama"=>$nama,
                "instansi"=>$request->instansi,
                "created_at"=>now(),
                "updated_at"=>now()
            ]);

        }
        
        return back()->with("success","Data Berhasil Disimpan");
    }

    function logging(){
        $Jumat = Client::whereDate('created_at', '=', '2024-05-03')->count();
        $Sabtu = Client::whereDate('created_at', '=', '2024-05-04')->count();
        $Total = Client::count();
        return view('logging', compact('Jumat', 'Sabtu', 'Total'));
    }

    function aksi(Request $request){
        session(['nama' => $request->input('name')]);
        session(['pass' => $request->input('pass')]);
        return redirect(url('logging'));
    }
}
