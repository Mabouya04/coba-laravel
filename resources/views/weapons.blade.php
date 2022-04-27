@extends('layout.main')

@section('container')
    
    @foreach ($weapons as $weapon)
    <article class="mb-5">
        <h2><a href="/weapons/{{ $weapon->id }}">{{ $weapon->namaWeapon }}</a></h2>
        <h5>{{ $weapon->tipe }}</h5>
        <p>{{ $weapon->excerpt }} <a href="/weapons/{{ $weapon->id }}">Read more...</a></p>
    </article>
    @endforeach

@endsection