@extends('layouts.master')
@section('title','國家美術館周遭景點')
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
                <img class="mySlides" src="images/greenway2.jpg" width="100%" height="500">
                <img class="mySlides" src="images/record2.jpg" width="100%" height="500">
                <img class="mySlides" src="images/coffee1.jpg" width="100%" height="500">
                <img class="mySlides" src="images/market3.jpg" width="100%" height="500">
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
                    <h2>周遭景點</h2>
                </header>
                        @if (count($external_areas) > 0)
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <center>
                                    {{--主要分類--}}
                                        <table class="table table-striped message-table">
                                            <thead>
                                                <th>地點</th>
                                                <th>前言</th>
                                                <th>介紹</th>
                                                <th>地址</th>
                                                <th>路線</th>
                                            </thead>
                                        @foreach ($external_areas as $external)
                                            @if($external->id <= 3)
                                            <tbody>
                                                <tr>
                                                    <!-- Message Name -->
                                                    <td class="table-text" width="8%">
                                                        <div>{{ $external->name }}</div>
                                                    </td>

                                                    <td class="table-text" width="35%">
                                                        <div>{{ $external->preface }}</div>
                                                    </td>

                                                    <td class="table-text"width="37%">
                                                        <div>{{ $external->introduction }}</div>
                                                    </td>

                                                    <td class="table-text"width="10%">
                                                        <div>{{ $external->position }}</div>
                                                    </td>

                                                    <td class="table-text"width="10%">
                                                        <div>{{ $external->way }}</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                                @endif
                                            @endforeach
                                        </table>
                                    </center>
                                    {{--草悟道--}}
                                    <center>
                                        <table class="table table-striped message-table">
                                            <thead>
                                            <tr><td colspan="5" align="center"><font size="6">草悟道</font></td></tr>
                                            <th>地點</th>
                                            <th>介紹</th>
                                            </thead>
                                            @foreach ($external_areas as $external)
                                                @if($external->id >= 4 & $external->id <= 6)
                                                    <tbody>
                                                    <tr>
                                                        <!-- Message Name -->
                                                        <td class="table-text" width="10%">
                                                            <div>{{ $external->name }}</div>
                                                        </td>

                                                        <td class="table-text"width="90%">
                                                            <div>{{ $external->introduction }}</div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                @endif
                                            @endforeach
                                        </table>
                                    </center>
                                    {{--審計新村--}}
                                    <center>
                                        <table class="table table-striped message-table">
                                            <thead>
                                            <tr><td colspan="5" align="center"><font size="6">審計新村</font></td></tr>
                                            <th>地點</th>
                                            <th>介紹</th>
                                            <th>地址</th>
                                            <th>營業時間</th>
                                            </thead>
                                            @foreach ($external_areas as $external)
                                                @if($external->id >= 7 & $external->id <= 14)
                                                    <tbody>
                                                    <tr>
                                                        <!-- Message Name -->
                                                        <td class="table-text" width="10%">
                                                            <div>{{ $external->name }}</div>
                                                        </td>

                                                        <td class="table-text"width="50%">
                                                            <div>{{ $external->introduction }}</div>
                                                        </td>

                                                        <td class="table-text"width="20%">
                                                            <div>{{ $external->position }}</div>
                                                        </td>

                                                        <td class="table-text"width="20%">
                                                            <div>{{ $external->open }}</div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                @endif
                                            @endforeach
                                        </table>
                                    </center>
                                    {{--忠信市場--}}
                                    <center>
                                        <table class="table table-striped message-table">
                                            <thead>
                                            <tr><td colspan="5" align="center"><font size="6">忠信市場</font></td></tr>
                                            <th>地點</th>
                                            <th>介紹</th>
                                            <th>地址</th>
                                            <th>營業時間</th>
                                            </thead>
                                            @foreach ($external_areas as $external)
                                                @if($external->id >= 15 & $external->id <= 17)
                                                    <tbody>
                                                    <tr>
                                                        <!-- Message Name -->
                                                        <td class="table-text" width="10%">
                                                            <div>{{ $external->name }}</div>
                                                        </td>

                                                        <td class="table-text"width="50%">
                                                            <div>{{ $external->introduction }}</div>
                                                        </td>

                                                        <td class="table-text"width="20%">
                                                            <div>{{ $external->position }}</div>
                                                        </td>

                                                        <td class="table-text"width="20%">
                                                            <div>{{ $external->open }}</div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                @endif
                                            @endforeach
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
