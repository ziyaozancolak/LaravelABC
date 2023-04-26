@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Aracını İade Alacağınız Personeli Seçiniz.') }}</div>
</br>

                    <form action="{{route('araciadesonuc')}}" method="post">
                        @csrf
                        
                        <div class="form-group">
                            <label for="personelsec">Personel Seç</label>
                            <select class="form-control" name="personel_id">
                                @foreach ($personelbilgileri as $key => $personelbilgileri)
                                <option value="{{$personelbilgileri->id}}">{{$personelbilgileri->adsoyad}}</option>
                                @endforeach
                            </select>
                        </div></br>
                            <button type="submit" class="btn btn-primary" style="margin:2px;">İade al</button>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection