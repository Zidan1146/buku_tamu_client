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
        return view('logging');
    }
}
