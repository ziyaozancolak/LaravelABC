<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Abcmain extends Controller
{
    public function abcmain(){

        $data["baslik1"]="ABC Şirketine Hoşgeldiniz!";
        $data["baslik2"]="Personel ve araçları görüntülemek için lütfen giriş yapınız.";
        $data["loginbaslik1"]="Personel ve araçları görüntülemek için işlem sayfasına devam ediniz.";
        return view('anasayfa',$data);

    }
}
