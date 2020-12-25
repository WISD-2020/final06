@extends('layouts.master')
@section('title','國家美術館內部樓層')
@section('content')
<style>
    .w3-btn-floating_right{
        display: inline-block;
        height: 40px;
        width: 40px;
        color: white;
        text-align: center;
        vertical-align: middle;
        /*line-height:3;*/
        font: 24px Verdana, sans-serif;
        background: #000;
        /*size:40*40;*/
        position: absolute;
        top:50%;
        right: 0;
        text-decoration: none;


    }
    .w3-btn-floating_left{
        display: inline-block;
        height: 40px;
        width: 40px;
        color: white;
        text-align: center;
        vertical-align: middle;
        font-style: #fff;
        color: #FFF;
        font: 24px Verdana, sans-serif;
        background: #000;
        /*size:40*40;*/
        position: absolute;
        top:50%;
        left:0;
        text-decoration: none;


    }
    p{
        color: white;
    }


</style>
<body class="subpage">
<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <div class="img_box">
                <img class="mySlides" src="images/1F.jpg" width="100%" height="500">
                <img class="mySlides" src="images/2F.jpg" width="100%" height="500">
                <img class="mySlides" src="images/3F.jpg" width="100%" height="500">
                <img class="mySlides" src="images/garden.jpg" width="100%" height="500">
                <a class="w3-btn-floating_left" onclick="plusDivs(-1)">&#10094;</a>
                <a class="w3-btn-floating_right" onclick="plusDivs(+1)">&#10095;</a>
            </div>
        </header>
    </div>
</section>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>
<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <header class="align-center">
                    <p>台灣美術館</p>
                    <h2>內部介紹</h2>
                </header>
                @if (count($internal_areas) > 0)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <center>
                                <table class="table table-striped message-table" style="width:80%">

                                    <!-- 表頭 -->
                                    <thead>
                                    <th>區域</th>
                                    <th>位於</th>
                                    <th>介紹</th>
                                    </thead>

                                    <!-- 表身 -->
                                    <tbody>
                                    @foreach ($internal_areas as $internal)
                                        <tr>
                                            <!-- Message Name -->
                                            <td class="table-text" width="20%">
                                                <div>{{ $internal->name }}</div>
                                            </td>

                                            <td class="table-text"width="20%">
                                                <div>{{ $internal->position }}</div>
                                            </td>

                                            <td class="table-text"width="60%">
                                                <div>{{ $internal->introduction }}</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </center>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
