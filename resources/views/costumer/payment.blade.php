@extends('costumer.layout')
@section('content')

<body>
    <div class="row">
        <div class="container">
            <h2 class="text-center my-5" style="color:#DB7093">Upload Bukti</h2>
            <div class="col-lg-8 mx-auto my-5">
                <form action="/costumer/payment/deal" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <b>File Gambar</b><br />
                        <input type="file" name="payment" required>
                    </div>
                    <button type="submit" value="Upload" class="btn" style="background-color:#DB7093; color:white">Submit</button>
                    <a href="/costumer/cart">
                        <button type="button" class="btn" style="color:red;">Back</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>
@stop