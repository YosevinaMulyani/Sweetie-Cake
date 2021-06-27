@extends('costumer.layout')
@section('content')
@foreach($cake as $g)
<div class="container" style="padding-top: 50px;">
    <div style="width: 18rem; float: left; padding-right: 50px;">
        <img class=" card-img-top" src="{{ url('/cake/'.$g->gambar) }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"> {{$g->nama}}
            </h5>
            <p class="card-text">{{$g->keterangan}}</p>
        </div>
    </div>
    <div class="card" style="width: 18rem; float: left;">
        <ul class="list-group list-group-flush">
            <form method="post" action="/costumer/pesan">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $g->id }}">
                <input type="hidden" name="cakecode" value="{{ $g->cakecode }}">
                <input type="hidden" name="harga" value="{{ $g->harga }}">

                <li class="list-group-item">
                    Keterangan: {{$g->keterangan}}
                </li>
                <li class="list-group-item">
                    Harga: {{$g->harga}}
                </li>
                <li class="list-group-item">
                    Stok: {{$g->stok}}
                </li>
                <li class="list-group-item">
                    Pesan:
                    <input type="number" class="form-control" value="1" name="banyak">
                </li>
                <div class="card-body">
                    <button type="submit" class="btn" style="background-color:#DB7093; color:white">Pesan</button>
                </div>
            </form>
        </ul>
    </div>
</div>
@endforeach
@stop