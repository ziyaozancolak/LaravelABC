<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonelModel;
use App\Models\AraclarModel;

class Aracata extends Controller{

    public function aracata()
        {
            $personelbilgileri= PersonelModel::all();
            $aracbilgileri =AraclarModel::all();

            return view('aracata',compact('personelbilgileri','aracbilgileri'));
        }

        public function aracatamasonuc(Request $request){

            $personel_id=$request->personel_id;
            $arac_id=$request->arac_id;

            PersonelModel::whereId($personel_id)->update([
                "personelaraci"=>$arac_id,
            ]);


        $page = "http://localhost:8000/personel/araclari";
        return "<h1>Personel'e Araç Ataması Başarı ile Yapıldı. İşlem sayfasına yönlendiriliyorsunuz...</h1>".header("Refresh: 2; URL=". $page ."");
        
        }
        
}