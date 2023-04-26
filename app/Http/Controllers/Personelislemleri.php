<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonelModel;
use App\Models\AraclarModel;

class Personelislemleri extends Controller
{
    public function personeleklemesayfasi(){

        return view('personelekle');
    }

    public function personelaraclistele(){

        $veriler= PersonelModel::with('araclar')->get();
        return view('personelaraclari',compact('veriler'));
    }

    public function personellistele(){

        $personeller = PersonelModel::all();

        return view('personellistesi',array('personeller'=> $personeller));

    }

    public function personelekle(Request $request){

    
            $adsoyad= $request->adsoyad;
            $yas= $request->yas;
            $mail=$request->mail;
            $ceptel=$request->ceptel;

            PersonelModel::create([
                
                'adsoyad'=>$adsoyad,
                'yas'=>$yas,
                'mail'=>$mail,
                'ceptel'=>$ceptel  

            ]);

            $page = "http://localhost:8000/home";
            return "<h1>Personel Başarıyla eklendi. İşlem sayfasına yönlendiriliyorsunuz...</h1>".header("Refresh: 2; URL=". $page ."");        

    }

    public function araciade(){

        $personelbilgileri= PersonelModel::all();

        return view('araciade',compact('personelbilgileri'));

    }

    public function araciadesonuc(Request $request){

        $personel_id=$request->personel_id;

        PersonelModel::whereId($personel_id)->update([
            "personelaraci"=>0,
        ]);
        $page = "http://localhost:8000/personel/araclari";
        return "<h1>Personel üzerindeki araç başarı ile geri alındı. İşlem sayfasına yönlendiriliyorsunuz...</h1>".header("Refresh: 2; URL=". $page ."");
    
    }

    public function aracdetay(Request $request){

        $personelid = $request->id;

        $personeladi= PersonelModel::find($personelid)->adsoyad;
        $personelaracid=PersonelModel::find($personelid)->personelaraci;

        $aracbilgileri=AraclarModel::find($personelaracid);
        
        return view('aracdetay',compact("personeladi","aracbilgileri"));


    }


    public function showall(){

        return response()->json(PersonelModel::all());;

    }
    
    public function show($id){
        
        return response()->json(PersonelModel::find($id));;
        
    }

    public function save(Request $request){

            $personel=PersonelModel::create($request->all());

            return response()->json($personel);
        
    }

    public function update(Request $request, $id){
            $personel=PersonelModel::find($id);
            $personel->update($request->all());

            return response()->json($personel);
        
    }

    public function delete($id){
        PersonelModel::find($id)->delete();

        return response()->json("Personel Silinmiştir.");
        
    }

}
