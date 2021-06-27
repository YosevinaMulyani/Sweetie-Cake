@section('content')
@extends('costumer.layout')
<div class="container">
    <div class="container" style="padding-top:50px;">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <h2 class="text-center" style="color:#DB7093;"> Profile </h2>

                    <div class="card-body">
                        @foreach($user as $users)
                        <form method="post" action="/costumer/profile/update">
                            {{csrf_field('')}}
                            <div class="form-group">
                                <input type="email" class="form-control" value="{{$users->email}}" name="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$users->nama}}" name="nama">
                            </div>
                            <div class="form-group">
                                <input type="text-area" class="form-control" value="{{$users->alamat}}" name="alamat">
                            </div>
                            <button type="submit" class="btn" style="background-color:#DB7093; color:white;">Update</button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop