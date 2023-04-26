<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AraclarModel;
use Illuminate\Support\Facades\DB;

class Aracislemleri extends Controller
{
    public function araceklemesayfasi(){

        return view('aracekle');
    }

    public function araclar(){

        $araclar= AraclarModel::all();
        
        return view('araclar',array('araclar'=> $araclar));
        
    }

    public function araceklemesonuc(Request $request){

        $plaka= $request->plaka;
        $marka= $request->aracmarka;
        $model= $request->aracmodel;
        $modelyili= $request->modelyili;
        $yakittipi= $request->yakittipi;
        $km= $request->arackm;

        AraclarModel::create([

            "plaka"=>$plaka,
            "marka"=>$marka,
            "model"=>$model,
            "modelyili"=>$modelyili,
            "yakittipi"=>$yakittipi,
            "km"=>$km,

        ]);

        $page = "http://localhost:8000/home";
        return "<h1>Araç Başarıyla eklendi. İşlem sayfasına yönlendiriliyorsunuz...</h1>".header("Refresh: 2; URL=". $page ."");
        
    }

    public function aracsil(Request $request){

        $arac_id=$request->id;

        AraclarModel::whereId($arac_id)->delete();

        $page = "http://localhost:8000/personel/araclari";
        return "<h1>Araç Silinmiştir. İşlem sayfasına yönlendiriliyorsunuz...</h1>".header("Refresh: 2; URL=". $page ."");
    
    }
}
