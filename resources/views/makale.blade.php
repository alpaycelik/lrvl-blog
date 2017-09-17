@extends('master')

@section('icerik')
    <h1>{{ $makale->baslik }}</h1>
    <hr>
    {{ $makale->icerik }}
@endsection