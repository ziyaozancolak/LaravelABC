@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('İşlem Sayfası') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <li class="nav-link"><a class="nav-link js-scroll-trigger" href="{{route('araceklemesayfasi')}}">{{__('Araç Ekle')}}</a></li></br>
                        <li class="nav-link"><a class="nav-link js-scroll-trigger" href="{{route('personeleklemesayfasi')}}">{{__('Personel Ekle')}}</a></li></br>
                        <li class="nav-link"><a class="nav-link js-scroll-trigger" href="{{route('aracata')}}">{{__('Personele Araç Ata')}}</a></li></br>
                </div>
            </div>
            <div class="card">
            <div class="card-header">{{ __('Görmek İstediğiniz Bilgilere Aşağıdan Ulaşabilirsiniz.') }}</div>
            <div class="card-body">
                </br>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                <a class="nav-link" href="{{route('araclari')}}" value="Personel Araçları" style="width:150px; height:50px;"> {{ __('Personel Araçları ') }} </a>
                    </li>
                    <li class="nav-item">
                <a class="nav-link" href="{{route('araclar')}}" value="Araçlar" style="width:100px; height:50px;">{{ __('Araçlar') }}</a>
                    </li>
                    <li class="nav-item">
                <a class="nav-link" href="{{route('listesi')}}" value="Personeller" style="width:100px; height:50px;"> {{ __('Personeller ') }} </a>
                    </li>
            </ul>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
