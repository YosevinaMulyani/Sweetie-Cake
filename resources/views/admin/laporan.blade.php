@section('content')
@extends('admin.layout')
<div class="container">
    <main role="main" class="flex-shrink0" style="padding-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class=" card-header" style="background-color: white;">
                            <h1 class="text-center" style="color: #DB7093">Report</h1>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead" style="color:#DB7093;">
                                    <tr>
                                        <th class="text-center" scope="col">No</th>
                                        <th class="text-center" scope="col">User Id</th>
                                        <th class="text-center" scope="col">Payment Code</th>
                                        <th class="text-center" scope="col">Tanggal</th>
                                        <th class="text-center" scope="col">Transaksi</th>
                                        <th class="text-center" scope="col">Status</th>
                                        <th class="text-center" scope="col">Status Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($payment as $payments)
                                    <tr>
                                        <form method="post" action="/admin/laporan/edit">
                                            {{csrf_field('')}}
                                            <input type="hidden" name="paymentcode" value="{{ $payments->paymentcode }}">
                                            <td class="text-center" scope="row">{{$i++}}</td>
                                            <td class="text-center">{{$payments->userid}}</td>
                                            <td class="text-center">{{$payments->paymentcode}}</td>
                                            <td class="text-center">{{$payments->tanggal}}</td>
                                            <td class="text-center">{{$payments->biaya}}</td>
                                            <td class="text-center">
                                                <div>
                                                    <div class=" form-group">
                                                        <select name="status" class="form-control">
                                                            @if($payments->status=='belum dikirim')
                                                            <option value="belum dikirim" selected>Belum dikirim</option>
                                                            <option value="sudah dikirim">Sudah dikirim</option>

                                                            @else
                                                            <option value="belum dikirim">Belum dikirim</option>
                                                            <option value="sudah dikirim" selected>Sudah dikirim</option>
                                                            @endif
                                                    </div> id="inlineFormCustomSelect">
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <button type="submit" class="btn btn-mr" style="background-color:#DB7093; color:white;">
                                                    Update
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <p class="text-left">Total pendapatan: Rp{{$sum}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@stop