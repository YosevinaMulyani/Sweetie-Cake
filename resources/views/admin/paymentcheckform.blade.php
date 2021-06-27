@section('content')
@extends('admin.layout')
<div class="container">
    <main role="main" class="flex-shrink0" style="padding-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class=" card-header" style="background-color: white;">
                            <h1 class="text-center" style="color: #DB7093">Pay Validation</h1>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead" style="color:#DB7093;">
                                    <tr>
                                        <th class="text-center" scope="col">No</th>
                                        <th class="text-center" scope="col">Foto</th>
                                        <th class="text-center" scope="col">User Id</th>
                                        <th class="text-center" scope="col">Payment Code</th>
                                        <th class="text-center" scope="col">Status</th>
                                        <th class="text-center" scope="col">Status Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($payment as $payments)
                                    <tr>
                                        <form method="post" action="/admin/paymentcheck/edit">
                                            {{csrf_field('')}}
                                            <input type="hidden" name="paymentcode" value="{{ $payments->paymentcode }}">
                                            <td class="text-center" scope="row">{{$i++}}</td>
                                            <td class="text-center">
                                                <img src="{{ url('/payment/'.$payments->paid) }}" width="50px" height="50px">
                                            </td>
                                            <td class="text-center">{{$payments->userid}}</td>
                                            <td class="text-center">{{$payments->paymentcode}}</td>
                                            <td class="text-center">
                                                <div>
                                                    <div class=" form-group">
                                                        <select name="status" class="form-control">
                                                            @if($payments->status=='belum valid')
                                                            <option value="belum valid" selected>belum valid</option>
                                                            <option value="valid">valid</option>
                                                            <option value="tidak valid">tidak valid</option>

                                                            @elseif($payments->status=='tidak valid')
                                                            <option value="belum valid">belum valid</option>
                                                            <option value="valid">Valid</option>
                                                            <option value="tidak valid" selected>tidak valid</option>

                                                            @else
                                                            <option value="belum valid">belum valid</option>
                                                            <option value="valid" selected>valid</option>
                                                            <option value="tidak valid">tidak valid</option>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@stop