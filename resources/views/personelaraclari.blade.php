@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Personel Araçlarını Aşağıdan Görebilirsiniz.') }}</div>

                </br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Personel Adı Soyadı</th>
                            <th scope="col">Aracı</th>
                            <th scope="col">İletişim Numarası</th>
                            <th scope="col">Araç Detayları</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($veriler as $veriler)
                        <tr>
                            <th scope="col">{{$veriler->adsoyad}}</th>
                            <th scope="col">@if ($veriler->personelaraci == 0)Araçsız
                                @else {{$veriler->araclar->plaka}}
                                @endif</th>
                            <th scope="col">{{$veriler->ceptel}}</th>
                            @if ($veriler->personelaraci == 0) <th scope="col"><a>---</a></th> @else
                            <th scope="col"><a class="nav-link" href="{{route('aracdetay')}}?id={{$veriler->id}}">Gör</a></th>@endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <ul class="navbar-nav ml-auto my-2 my-lg-0" style="display: flex; flex-direction: row;">
                    <li>
                        <a class="nav-link" href="{{route('araciade')}}" style="padding:10px; color:white; font-size:18px; border-radius:5px; background-color:darkorange; margin-left:10px;"> {{ __('Araç İade Al ') }} </a></br>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('aracata')}}" style="padding:10px; color:white; font-size:18px; border-radius:5px; background-color:darkorange; margin-left:10px;"> {{ __('Araç Ata') }} </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection