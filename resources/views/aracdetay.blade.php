@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Personele ait Araç Detaylarını Görebilirsiniz.') }}</div>
                
                </br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Personel Adı Soyadı</th>
                        <th scope="col">Plaka</th>
                        <th scope="col">Markası</th>
                        <th scope="col">Model Yılı</th>
                        <th scope="col">Modeli</th>
                        <th scope="col">Yakıt Tipi</th>
                        <th scope="col">KM</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <th scope="col">{{$personeladi}}</th>
                            <th scope="col">{{$aracbilgileri->plaka}}</th>
                            <th scope="col">{{$aracbilgileri->model}}</th>
                            <th scope="col">{{$aracbilgileri->marka}}</th>
                            <th scope="col">{{$aracbilgileri->modelyili}}</th>
                            <th scope="col">{{$aracbilgileri->yakittipi}}</th>
                            <th scope="col">{{$aracbilgileri->km}}</th>
                        </tr>
                      
                    </tbody>
                </table>
                 <ul class="navbar-nav ml-auto my-2 my-lg-0" style="display: flex; flex-direction: row;">
                    <li class="nav-item">
                        <li><a class="nav-link" href="{{route('araciade')}}" style="padding:10px; color:white; font-size:18px; border-radius:5px; background-color:darkorange; margin-left:10px;"> {{ __('Araç İade Al ') }} </a></br></li>  
                         <li><a class="nav-link" href="{{route('home')}}" style="padding:10px; color:white; font-size:18px; border-radius:5px; background-color:darkorange; margin-left:10px;"> {{ __('İşlemler Sayfasına Geri Dön') }} </a></li>
                    </li></ul>
                    
            </div>
        </div>
    </div>
</div>

@endsection