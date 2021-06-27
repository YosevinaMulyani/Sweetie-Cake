@section('content')
@extends('admin.layout')
<div class="container">
    <div role="main" class="flex-shrink0" style="padding-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class=" card-header" style="background-color: white;">
                            <h1 class="text-center" style="color: #DB7093">Daftar Pelanggan</h1>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead" style="color:#DB7093;">
                                    <tr>
                                        <th class="text-center" scope="col">No</th>
                                        <th class="text-center" scope="col">User Id</th>
                                        <th class="text-center" scope="col">Nama</th>
                                        <th class="text-center" scope="col">Email</th>
                                        <th class="text-center" scope="col">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($costumer as $costumers)
                                    <tr>
                                        <td class="text-center" scope="row">{{$i++}}</td>
                                        <td class="text-center">{{$costumers->id}}</td>
                                        <td class="text-center">{{$costumers->nama}}</td>
                                        <td class="text-center">{{$costumers->email}}</td>
                                        <td class="text-center">{{$costumers->alamat}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop