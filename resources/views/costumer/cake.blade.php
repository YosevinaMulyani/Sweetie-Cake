@section('content')
@extends('costumer.layout')
<div class="container">
    @foreach($cake as $cakes)
    <div class="card" style="width: 12rem; float: left; margin: 15px; margin-top: 50px;">
        <img class="card-img-top" src="{{ url('/cake/'.$cakes->gambar) }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$cakes->nama}}</h5>
            <p class="card-text">{{$cakes->keterangan}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$cakes->stok}}</li>
            <li class="list-group-item">{{$cakes->harga}}</li>
        </ul>
        <div class="card-body">
            <a href="/costumer/requestform/{{$cakes->id}}" class="card-link">Pesan</a>
        </div>
    </div>
    @endforeach
</div>
@stop