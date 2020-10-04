<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Emb;
use Alert;
use App\File;
use phpseclib\Crypt\RSA as Crypt_RSA;

class SolicitudController extends Controller
{
    public function index()
    {
        $solicitudes=DB::table('files')->where('emb_id', null)->get();
        return view('solicitudes.show',compact('solicitudes'));
    }


    public function store(Request $request)
    {
        if($request->hasFile('file'))
        {
            foreach ($request->file as $file)
            {
                $filename=$file->getClientOriginalName();
                $filesize=$file->extension();
                $file->storeAs('public',$filename);

                $rsa = new Crypt_RSA();
                $rsa->setPrivateKeyFormat(Crypt_RSA::PRIVATE_FORMAT_PKCS1);
                $rsa->setPublicKeyFormat(Crypt_RSA::PUBLIC_FORMAT_PKCS1);
                define('CRYPT_RSA_EXPONENT', 65537);
                define('CRYPT_RSA_SMALLEST_PRIME', 64);
                extract($rsa->createKey());

                $fileModel=new File;
                $fileModel->name= $filename;
                $fileModel->extension= $filesize;
                $fileModel->emb_id= null;
                $fileModel->privatekey =md5($privatekey);
                $fileModel->publickey  =md5($publickey);
                $fileModel->save();
            }
        }
        return redirect()->route('home')->with('success', 'Archivo Almacenado');
    }

    // public function show($id)
    // {
    //     $solicitudes=DB::table('files')->where('emb_id', null)->get();
    //     return view('solicitudes.show',compact('solicitudes'));
    // }

    public function show($id)
    {
    	$files = File::findOrFail($id);
        return response()->file(Storage_path('app/public/'.$files->name));
    }

    public function edit($id)
    {
    	$embs =Emb::all();
    	$i=$id;
    	return view('embs.index',compact('embs','i'));
    }

    public function asig($id,$id2)
    {

        $soli =File::where('id', $id2)->get();

		$soli->toQuery()->update([
		    'emb_id' => $id,
		]);

        return redirect()->route('usuarios.index')->with('success', 'Datos Actualizados');
    }
}
