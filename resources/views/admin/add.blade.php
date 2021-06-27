@section('content')
@extends('admin.layout')

<div class="container" style="padding-top:50px;">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <h3 class="text-center" style="color:#DB7093;"> Add Cake
            </h3>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/admin/add" enctype="multipart/form-data">
                        {{csrf_field('')}}
                        <div class="form-group">
                            <input type="file" placeholder="Masukkan gambar" name="gambar">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan nama" name="nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan stok" name="stok">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan harga" name="harga">
                        </div>
                        <div class="form-group">
                            <input type="text-area" class="form-control" placeholder="Masukkan keterangan" name="keterangan">
                        </div>
                        <button type="submit" class="btn" style="background-color:#DB7093; color:white;">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop