@extends('admin.layout')
@section('content')
<div class="container">
    @foreach($cake as $cakes)
    <div class="card" style="float: left; margin: 15px; margin-top: 50px;">
        <form action="/admin/cake/ubah" method="post">
            {{csrf_field('')}}
            <div class="card-body">
                <h5 class="card-title">
                    <input class="list-group-item" name="cakecode" value="{{$cakes->cakecode}}"></input>
                    <input class="list-group-item" name="nama" value="{{$cakes->nama}}"></input>
                </h5>
                <p class="card-text">
                    <input class="list-group-item" name="keterangan" value="{{$cakes->keterangan}}"></input>
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <input class="list-group-item" name="stok" value="{{$cakes->stok}}">
                    <input class="list-group-item" name="harga" value="{{$cakes->harga}}">
                </li>
            </ul>
            <div class="card-body">
                <button type="submit" class="btn" style="background-color:#DB7093; color:white;"> Ubah</button>
            </div>
        </form>
    </div>
    @endforeach
</div>
@stop