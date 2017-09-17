@extends('master')

@section('icerik')
    <h2>Makale Düzenle</h2>
    <hr>
    <form action="{{ action('MakaleController@makaleGuncelle', $makale->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="baslik">Başlık</label>
            <input type="text" name="baslik" class="form-control" value="{{ old('baslik', $makale->baslik) }}">
        </div>
        <div class="form-group">
            <label for="icerik">İçerik</label>
            <textarea name="icerik" id="" cols="30" rows="10"class=" form-control">{{ old('icerik', $makale->icerik) }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Güncelle</button>
        </div>
    </form>
@endsection