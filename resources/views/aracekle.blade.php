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
                    <form action="{{route('araceklemesonuc')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Plaka">Plaka</label>
                            <input type="text" class="form-control" name ="plaka" aria-describedby="plaka">
                        </div></br>
                        <div class="form-group">
                            <label for="aracmarka">Araç Markası</label>
                            <input type="text" class="form-control" name="aracmarka">
                        </div></br>
                        <div class="form-group">
                            <label for="aracmodel">Araç Modeli</label>
                            <input type="text" class="form-control" name="aracmodel">
                        </div></br>
                        
                        <div class="form-group">
                            <label for="modelyili">Araç Model Yılı</label>
                            <input type="text" class="form-control" name="modelyili">
                        </div></br>
                        <div class="form-group">
                            <label for="yakıttipi">Yakıt Tipi</label>
                            <select class="form-control" name="yakittipi">
                                <option>Benzin</option>
                                <option>Dizel</option>
                                <option>Elektrik</option>
                            </select>
                        </div></br>
                        <div class="form-group">
                            <label for="km">Araç KM</label>
                            <input type="text" class="form-control" name="arackm">
                        </div></br>
                            <button type="submit" class="btn btn-primary" style="margin:2px;">Ekle</button>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection