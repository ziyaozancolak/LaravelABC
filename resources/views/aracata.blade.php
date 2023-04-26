@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Şirket Araçlarını Aşağıdan Görebilirsiniz.') }}</div>

</br>
                    <form action="{{route(('aracatamasonuc'))}}" method="post" style="padding:15px;">
                        @csrf
                        
                        <div class="form-group">
                            <label for="personelsec">Personel Seç</label>
                            <select class="form-control" name="personel_id">
                                @foreach ($personelbilgileri as $key => $personelbilgileri)
                                <option value="{{$personelbilgileri->id}}">{{$personelbilgileri->adsoyad}}</option>
                                @endforeach
                            </select>
                        </div></br>
                        <div class="form-group">
                            <label for="aracsec">Araç Seç</label>
                            <select class="form-control" name="arac_id">
                               @foreach ($aracbilgileri as $key => $aracbilgileri)
                                <option value="{{$aracbilgileri->id}}">{{$aracbilgileri->plaka}}</option>
                                @endforeach
                            </select>
                        </div></br>
                            <button type="submit" class="btn btn-primary" style="margin:2px;">Ata</button>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection