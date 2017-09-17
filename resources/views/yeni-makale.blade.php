@extends('master')

@section('icerik')
    <form action="{{ action('MakaleController@makaleEkle') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="baslik">Başlık</label>
            <input type="text" name="baslik" class="form-control" value="{{ old('baslik') }}">
        </div>
        <div class="form-group">
            <label for="icerik">İçerik</label>
            <textarea name="icerik" id="" cols="30" rows="10"class=" form-control">{{ old('icerik') }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Kaydet</button>
        </div>
    </form>
@endsection