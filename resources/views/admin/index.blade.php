@section('content')
@extends('admin.layout')
<div class="container" style="padding-top:50px;">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="width:450px; float:left; ">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/promosi/roti1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/promosi/roti2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/promosi/roti3.jpg" alt="Third slide">
            </div>
        </div>
    </div>
    <div style="float:right; padding-top:75px; font-size:40px; font-family:canveat; color:#DB7093;">
        Pelayanan terbaik
        <br>
        harus diberikan!
    </div>
</div>
@stop