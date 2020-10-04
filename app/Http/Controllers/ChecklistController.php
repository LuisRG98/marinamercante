<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emb;
use App\File;
use QrCode;
use Storage;
use App\Checklist;
use DB;
use PDF;
use phpseclib\Crypt\RSA as Crypt_RSA;

class ChecklistController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:insp');
    }

    public function index()
    {
        return view('checklists.index',[
            'embs'=>Emb::all()
        ]);

        // return view('checklists.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $i=0;
        $c=0;

        $pntjs= $request->properties;

        foreach ($pntjs as $pntj)
        {
            $i=$i+1;
            if ($pntj['value']=='SI')
            {
                $c=$c+1;
            }
        }
        $pntj= ($c/$i)*100;


        $rsa = new Crypt_RSA();
        $rsa->setPrivateKeyFormat(Crypt_RSA::PRIVATE_FORMAT_PKCS1);
        $rsa->setPublicKeyFormat(Crypt_RSA::PUBLIC_FORMAT_PKCS1);
        define('CRYPT_RSA_EXPONENT', 65537);
        define('CRYPT_RSA_SMALLEST_PRIME', 64);
        extract($rsa->createKey());

        $q= QrCode::format('png')
                    ->size(200)->errorCorrection('H')
                    ->generate(md5($publickey));

        $output_file = '/public/img/img.png';
        Storage::disk('local')->put($output_file, $q);

        $emb = Emb::findOrFail(request('emb_id'));

        if ($pntj>=90)
        {
            $chek=new Checklist;
            $chek->m=request('m');
            $chek->properties=  $request->properties;
            $chek->d=request('d');
            $chek->emb_id=request('emb_id');
            $chek->clase_tipo=request('clase_tipo');
            $chek->estado='Aprobado';
            $chek->pntj=$pntj;
            $chek->save();

            $pdf=PDF::loadView('certs.seguridad',compact('emb'));
            Storage::put('public/'.md5($publickey).'.pdf', $pdf->output());

            $fileModel=new File;
            $fileModel->name= 'CertificadoSeguridad'.time().'.pdf';
            $fileModel->extension= 0;
            $fileModel->emb_id= request('emb_id');
            $fileModel->privatekey = $privatekey;
            $fileModel->publickey= md5($publickey);
            $fileModel->save();
            return redirect()->route('embs.index')->with('success', 'Inspección Guardada');

        }
        elseif ($pntj<90 and $pntj>=80)
        {
            $chek=new Checklist;
            $chek->m=request('m');
            $chek->properties=  $request->properties;
            $chek->d=request('d');
            $chek->emb_id=request('emb_id');
            $chek->clase_tipo=request('clase_tipo');
            $chek->estado='Con Observaciones';
            $chek->pntj=$pntj;
            $chek->save();


            $pdf=PDF::loadView('certs.seguridad',compact('emb'));
            Storage::put('public/'.md5($publickey).'.pdf', $pdf->output());

            $fileModel=new File;
            $fileModel->name= 'CertificadoSeguridad'.time().'.pdf';
            $fileModel->size= 0;
            $fileModel->emb_id= request('emb_id');
            $fileModel->privatekey = md5($privatekey);
            $fileModel->publickey= md5($publickey);
            $fileModel->save();
            return redirect()->route('embs.index')->with('success', 'Inspección Guardada');
        }
        elseif ($pntj<80)
        {
            $chek=new Checklist;
            $chek->m=request('m');
            $chek->properties=  $request->properties;
            $chek->d=request('d');
            $chek->emb_id=request('emb_id');
            $chek->clase_tipo=request('clase_tipo');
            $chek->estado='Reprobado';
            $chek->pntj=$pntj;
            $chek->save();
            return redirect()->route('embs.index')->with('info', 'Inspección Guardada');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $files = DB::table('checklists')->where('emb_id', $id)->pluck('properties');
        $files=Checklist::findOrFail($id);
        $i=0;
        foreach ($files->properties as $file)
        {
           $v[$i]= $file['value'];
           $i=$i+1;
        }

        $i=0;
        foreach ($files->m as $file)
        {
           $v2[$i]= $file['value'];
           $i=$i+1;
        }

        $i=0;
        foreach ($files->d as $file)
        {
           $v3[$i]= $file['value'];
           $i=$i+1;
        }

        return view('checklists.show',compact('files','v','v2','v3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emb = Emb::findOrFail($id);
        return view('checklists._form',compact('emb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lista($id)
    {
        $files = DB::table('checklists')->where('emb_id', $id)->get();
        return view('checklists.vistas.show',compact('files'));

    }
}
