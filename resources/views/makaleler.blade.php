@extends('master')

@section('icerik')
    @if(!$makaleler->isEmpty())
        @foreach($makaleler as $makale)
            <div style="margin-bottom:2rem; border-bottom:1px solid #eee;">
                <a href="{{ action('MakaleController@makaleDetay', $makale->slug) }}">{{ $makale->baslik }}</a>
                <a href="makale-duzenle/{{ $makale->id }}" style="color:#aaa;">Düzenle</a>
            </div>
        @endforeach
    @else
        <div class="alert alert-warning">Henüz makale eklenmedi..!</div>
    @endif
@endsection