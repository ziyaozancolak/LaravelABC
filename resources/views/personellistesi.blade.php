@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Personel Listesini Aşağıdan Görebilirsiniz.') }}</div>


                </br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Adı Soyadı</th>
                        <th scope="col">Yaş</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Cep Telefonu</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($personeller as $key => $personeller)
                        <tr>
                            <th scope="col">{{ $personeller->adsoyad }}</th>
                            <th scope="col">{{ $personeller->yas }}</th>
                            <th scope="col">{{ $personeller->mail }}</th>
                            <th scope="col">{{ $personeller->ceptel }}</th>
                        </tr>
                        @endforeach
                    </tbody>


                </table>
                
                
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
