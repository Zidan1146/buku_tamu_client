<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
class ClientController extends Controller
{
    
    function login(Request $request){
        $validated=$request->validate([
            "nama"=>"required",
            "instansi"=>"required",
            "hp"=>"required"
        ]);
        foreach($request->nama as $index1=>$nama){
            foreach($request->hp as $index2=>$hp){
                if($index1 == $index2){
                    Client::create([
                        "nama"=>$nama,
                        "instansi"=>$request->instansi,
                        "noTelepon"=>$hp
                    ]);
                }
            }
        }
        return redirect("/berhasil")->with("success","Data Berhasil Disimpan");
    }
    function logging(){
        return view('logging');
    }
}
