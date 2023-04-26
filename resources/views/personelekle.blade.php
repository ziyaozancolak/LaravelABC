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
                    
                    </div class="form">
                    <form action="{{route('personelekle')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="adsoyad">Personel Adı Soyadı</label>
                            <input type="text" class="form-control" name ="adsoyad" aria-describedby="plaka">
                        </div></br>
                        <div class="form-group">
                            <label for="yas">Yaş</label>
                            <input type="text" class="form-control" name="yas">
                        </div></br>
                        <div class="form-group">
                            <label for="mail">Mail</label>
                            <input type="text" class="form-control" name="mail">
                        </div></br>
                        
                        <div class="form-group">
                            <label for="ceptel">Cep Telefonu</label>
                            <input type="text" class="form-control" name="ceptel">
                        </div>
                        </br>
                            <button type="submit" class="btn btn-primary" style="margin:2px;">Ekle</button>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection