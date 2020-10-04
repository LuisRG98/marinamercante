<?php

namespace App\Http\Controllers;

use App\Emb;
use App\File;
use App\User;
use App\Historic;
use Carbon\Carbon;
use Alert;
use PDF;
use DB;
use QrCode;
use Storage;
use App\Http\Requests\SaveEmbRequest;
use Illuminate\Http\Request;
use phpseclib\Crypt\RSA as Crypt_RSA;

class EmbsController extends Controller
{
    public function index()
    {
        return view('embs.index',[
            'embs'=>Emb::all()
        ]);
    }

    public function create()
    {
        $anio = (Carbon::now()->year)%100;
        $co=Emb::orderBy('id', 'desc')
               ->take(1)
               ->get();
        $co=$co->pluck('id')->implode(', ')+1;
        $mes = (Carbon::now()->month);
        if ($mes<10) $mes='0'.$mes;
        $reg='A-'.$anio.''.$mes.''.$co;

        return view('embs.create',compact('reg'));
    }

    public function store(Request $request)
    {

        $emb=Emb::create( $request->all());
        $encargado=User::findOrFail($request->user_id);

        $historic=new Historic;

        $historic->id_emb=$request->id_emb;
        $historic->user_id=$request->user_id;
        $historic->user_name=$encargado->name. $encargado->lastname1 .$encargado->lastname2;
        $historic->nom_prop=$request->nom_prop;
        $historic->ant_prop=$request->ant_prop;
        $historic->nom_emb=$request->nom_emb;
        $historic->asc_cop=$request->asc_cop;
        $historic->num_cert=$request->num_cert;
        $historic->clase_tipo=$request->clase_tipo;
        $historic->serv_emb=$request->serv_emb;
        $historic->base_op=$request->base_op;
        $historic->matricula=$request->matricula;
        $historic->eslora=$request->eslora;
        $historic->manga=$request->manga;
        $historic->puntal=$request->puntal;
        $historic->trb=$request->trb;
        $historic->trn=$request->trn;
        $historic->sist_prop=$request->sist_prop;
        $historic->num_mot=$request->num_mot;
        $historic->marca=$request->marca;
        $historic->php=$request->php;
        $historic->francobordo=$request->francobordo;
        $historic->men_pel=$request->men_pel;
        $historic->num_max=$request->num_max;
        $historic->material=$request->material;
        $historic->anio=$request->anio;
        $historic->save();


        $files = DB::table('embs')->where('id_emb', $request->input('id_emb'))->get();
        foreach ($files as $file)
        {
           $a= $file->id;
        }

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


        $pdf=PDF::loadView('certs.registro',compact('emb'));
        Storage::put('public/'.md5($publickey).'.pdf', $pdf->output());

        $fileModel=new File;
        $fileModel->name= 'CertificadoRegistro'.$a.'.pdf';
        $fileModel->extension= 0;
        $fileModel->emb_id= $a;
        $fileModel->privatekey =md5($privatekey);
        $fileModel->publickey= md5($publickey);
        $fileModel->save();

        return redirect()->route('embs.index')->with('success', 'Embarcación Registrada');

    }

    public function show($id)
    {
        $emb = Emb::findOrFail($id);
        $i=0;
        $v=null;
        $files = DB::table('files')->where('emb_id', $id)->get();
        foreach ($files as $file)
        {
            if ($file->extension=='jpeg'|| $file->extension=='jpg' || $file->extension=='png')
            {
                $v[$i]= $file->name;
                $i=$i+1;;
            }

        }
        return view('embs.show',compact('emb','i','v'));
    }

    public function edit($id)
    {
        $emb = Emb::findOrFail($id);
        return view('embs.edit',compact('emb'));
    }

    public function update(SaveEmbRequest $request, $id)
    {
        $emb = Emb::findOrFail($id);;
        $emb->update($request->all());

        $encargado=User::findOrFail($request->user_id);
        $historic=new Historic;

        $historic->id_emb=$request->id_emb;
        $historic->user_id=$request->user_id;
        $historic->user_name=$encargado->name.' '.$encargado->lastname1.' '.$encargado->lastname2;
        $historic->nom_prop=$request->nom_prop;
        $historic->ant_prop=$request->ant_prop;
        $historic->nom_emb=$request->nom_emb;
        $historic->asc_cop=$request->asc_cop;
        $historic->num_cert=$request->num_cert;
        $historic->clase_tipo=$request->clase_tipo;
        $historic->serv_emb=$request->serv_emb;
        $historic->base_op=$request->base_op;
        $historic->matricula=$request->matricula;
        $historic->eslora=$request->eslora;
        $historic->manga=$request->manga;
        $historic->puntal=$request->puntal;
        $historic->trb=$request->trb;
        $historic->trn=$request->trn;
        $historic->sist_prop=$request->sist_prop;
        $historic->num_mot=$request->num_mot;
        $historic->marca=$request->marca;
        $historic->php=$request->php;
        $historic->francobordo=$request->francobordo;
        $historic->men_pel=$request->men_pel;
        $historic->num_max=$request->num_max;
        $historic->material=$request->material;
        $historic->anio=$request->anio;
        $historic->save();

        return redirect()->route('embs.index')->with('success', 'Embarcación Actualizada');
    }

    public function destroy($id)
    {
        //
    }

    public function preview(Request $request)
    {
        return view('embs.preview');
    }
    public function preview2(Request $request)
    {
        if ($request->input('r1')=='si' && $request->input('r2')=='si' && $request->input('r3')=='si')
        {
            $anio = (Carbon::now()->year)%100;
            $co=Emb::orderBy('id', 'desc')
                   ->take(1)
                   ->get();
            $co=$co->pluck('id')->implode(', ')+1;
            $mes = (Carbon::now()->month);
            if ($mes<10) $mes='0'.$mes;
            $reg=$request->cuenca.'-'.$anio.''.$mes.''.$co;

        return view('embs.create',compact('reg'));
        }
       else
       {
            return redirect()->route('embs.index')->with('info','No se cumplen con todos los requisitos');
       }

    }

    public function edi()
    {
        return view('embs.edi',[
            'embs'=>Emb::all()
        ]);
    }
}
