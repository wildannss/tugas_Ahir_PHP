<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

class BiodataController extends Controller
{
    function index(){
        $datas=Biodata::all();
        foreach($datas as $data){
            'nama : '.$data->nama;
            'no_hp : '.$data->no_hp;
            'alamat : '.$data->alamat;
            'hobi : '.$data->hobi;
            'foto : '.$data->foto;
        }
    }

    function store(Request $request){
        Biodata::create([
            'nama'      => $request->nama,
            'no_hp'     => $request->no_hp,
            'alamat'    => $request->alamat,
            'hobi'      => $request->hobi,
            'foto'      => $request->foto
        ]);
    }

    function delete($id){
        Biodata::where('id',$id)->delete();
    }

    function update(Request $request, $id){
        $data=[
            'nama'      => $request->nama,
            'no_hp'     => $request->no_hp,
            'alamat'    => $request->alamat,
            'hobi'      => $request->hobi,
            'foto'      => $request->foto
        ];
        Biodata::where('id',$id)->update($data);
    }
}
