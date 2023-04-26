@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Şirket Araçlarını Aşağıdan Görebilirsiniz.') }}</div>

</br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Plaka</th>
                        <th scope="col">Marka</th>
                        <th scope="col">Model</th>
                        <th scope="col">Yıl</th>
                        <th scope="col">Yakıt Tipi</th>
                        <th scope="col">KM</th>
                        <th scope="col">İşlem</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($araclar as $key => $araclar)
                        <tr>
                            <th scope="col">{{ $araclar->plaka }}</th>
                            <th scope="col">{{ $araclar->marka }}</th>
                            <th scope="col">{{ $araclar->model }}</th>
                            <th scope="col">{{ $araclar->modelyili }}</th>
                            <th scope="col">{{ $araclar->yakittipi }}</th>
                            <th scope="col">{{ $araclar->km }}</th>
                            <th scope="col"><a class="nav-link" href="{{route('aracsil')}}?id={{$araclar->id}}">Sil</a></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <ul class="navbar-nav ml-auto my-2 my-lg-0" style="display: flex; flex-direction: row;">
                    <li class="nav-item">
                        <li><a class="nav-link" href="{{route('aracsil')}}" style="padding:10px; color:white; font-size:18px; border-radius:5px; background-color:darkorange; margin-left:10px;"> {{ __('Araç Sil ') }} </a></br></li>  
                    </li></ul>
            </div>
        </div>
    </div>
</div>
@endsection