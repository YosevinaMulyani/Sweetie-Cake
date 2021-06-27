@extends('admin.layout')
@section('content')
<div class="container">
    @foreach($cake as $cakes)
    <div class="card" style="width: 12rem; float: left; margin: 15px; margin-top: 50px;">
        <img class="card-img-top" src="{{ url('/cake/'.$cakes->gambar) }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$cakes->cakecode}}: {{$cakes->nama}}</h5>
            <p class="card-text">{{$cakes->keterangan}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$cakes->stok}}</li>
            <li class="list-group-item">{{$cakes->harga}}</li>
        </ul>
        <div class="card-body">
            <a href="/admin/cake/ubah/{{$cakes->cakecode}}" class="card-link">Ubah</a>
            <a href="/admin/cake/hapus/{{$cakes->id}}" class="card-link">hapus</a>
        </div>
    </div>
    @endforeach
</div>
@stop