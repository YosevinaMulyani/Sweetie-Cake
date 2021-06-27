@section('content')
@extends('costumer.layout')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class=" card-header" style="background-color: white;">
                        <h1 class="text-center" style="color: #DB7093">History</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead" style="color:#DB7093;">
                                <tr>
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Paymentcode</th>
                                    <th class="text-center" scope="col">tanggal</th>
                                    <th class="text-center" scope="col">Banyak</th>
                                    <th class="text-center" scope="col">Biaya</th>
                                    <th class="text-center" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($history as $historys)
                                <tr>
                                    <td class="text-center" scope="row">{{$i++}}</td>
                                    <td class="text-center">{{$historys->paymentcode}}</td>
                                    <td class="text-center">{{$historys->tanggal}}</td>
                                    <td class="text-center">{{$historys->banyak}}</td>
                                    <td class="text-center">{{$historys->biaya}}</td>
                                    <td class="text-center">{{$historys->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
</div>