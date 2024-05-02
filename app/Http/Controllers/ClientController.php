<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Client;
use App\Models\Log as LogModel;
use Illuminate\Http\Request;
class ClientController extends Controller
{

    function login(Request $request){
        // $isAdminActive = Admin::where('status', 'active')->exists();

        // if(!$isAdminActive){
        //     return redirect('/error');
        // }

        $request->validate([
            "nama"=>"required",
            "instansi"=>"required"
        ]);
        foreach ($request->nama as $nama){
            Client::create([
                "nama"=>$nama,
                "instansi"=>$request->instansi
            ]);

            LogModel::create([
                "ip" => $request->ip(),
                "tag" => "ADD",
                "message" => "Data $nama with {$request->instansi} Created"
            ]);
        }

        return back()->with("success","Data Berhasil Disimpan");
    }

    function logging(){
        // $isAdminActive = Admin::where('status', 'active')->exists();

        // if(!$isAdminActive){
        //     return redirect('/error');
        // }

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
