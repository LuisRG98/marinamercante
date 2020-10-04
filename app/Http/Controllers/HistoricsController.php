<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emb;
use App\File;
use App\Historic;
use App\Checklist;
use Alert;

class HistoricsController extends Controller
{
	public function index()
    {
        return view('embs.index',[
            'embs'=>Emb::all()
        ]);
    }

    public function show($id)
    {
        $emb = Emb::findOrFail($id);
        $imgs = File::select('*')->where('emb_id',$id)->get();
        $i=0;
        foreach ($imgs as $file)
        {
            if ($file->extension=='jpeg'|| $file->extension=='jpg' || $file->extension=='png')
            {
                $v[$i]= $file->name;
                $i=$i+1;;
            }

        }
        $historic=Historic::select('*')->where('id_emb','P-2009628')->get();

        if($historic=='[]')
        {
        	return 'holi';
        }
        else
        {
        	return view('historics.index',compact('historic','i','v'));
        }

    }
}
