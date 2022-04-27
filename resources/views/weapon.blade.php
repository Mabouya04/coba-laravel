@extends('layout.main')

@section('container')
<article class="mb-5">
    <h2>{{ $weapon["namaWeapon"] }}</h2>
    <h5>{{ $weapon["tipe"] }}</h5>
    <p>{{ $weapon["deskripsi"] }}</p>
</article>

<a href="/weapons">Back to Weapons</a>

@endsection