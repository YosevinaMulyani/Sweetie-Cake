@extends('costumer.layout')
@section('content')
<div role="main" class="flex-shrink0" style="padding-top:10px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class=" card-header" style="background-color: white;">
                        <h1 class="text-center" style="color: #DB7093">Cart</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead" style="color:#DB7093;">
                                <tr>
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Foto</th>
                                    <th class="text-center" scope="col">Nama Barang</th>
                                    <th class="text-center" scope="col">Jumlah</th>
                                    <th class="text-center" scope="col">Harga</th>
                                    <th class="text-center" scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($cart as $carts)
                                <tr>
                                    <td class="text-center" scope="row">{{$i++}}</td>
                                    <td class="text-center">
                                        <img src="{{ url('/cake/'.$carts->gambar) }}" width="50px" height="50px">
                                    </td>
                                    <td class="text-center">{{$carts->nama}}</td>
                                    <td class="text-center">{{$carts->banyak}}</td>
                                    <td class="text-center">{{$carts->harga}}</td>
                                    <td class="text-center">
                                        <a class="text-center" href="/costumer/cart/delete/{{$carts->cartid}}">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/costumer/payment">
                            <button class="btn btn-mr" style="background-color:#DB7093; color:white;">
                                Bayar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop