<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StatController extends Controller
{
    function index()
    {
     $data = DB::table('embs')
       ->select(
        DB::raw('clase_tipo as clase'),
        DB::raw('count(*) as number'))
       ->groupBy('clase_tipo')
       ->get();
     $array[] = ['clase', 'Number'];


     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->clase, $value->number];
     }
     return view('stats.index')->with('clase', json_encode($array));
    }
}
