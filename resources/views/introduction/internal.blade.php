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
    a{
        color: white;
    }
    .img_box{
        height: 100%;
        width: 100%;
    }
</style>
<body class="subpage">
<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <div class="img_box">
                <img class="mySlides" src="images/park.png" width="100%" height="750">
                <img class="mySlides" src="images/1F.jpg" width="100%" height="750">
                <img class="mySlides" src="images/shop.png" width="100%" height="750">
                <img class="mySlides" src="images/2F.jpg" width="100%" height="750">
                <img class="mySlides" src="images/3F.jpg" width="100%" height="750">
                <img class="mySlides" src="images/data_center.png" width="100%" height="750">
                <img class="mySlides" src="images/warehouse.png" width="100%" height="750">
                <img class="mySlides" src="images/spring_r.png" width="100%" height="750">

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
                    <font size="6"><h4>➲<a href="#B1">B1</a>　➲<a href="#1F">1F</a>　➲<a href="#2F">2F</a>　➲<a href="#3F">3F</a>　➲<a href="#1F-3F">1F-3F展覽室</a>　➲<a href="#館外">館外</a></h4></font>
                </header>
                @if (count($internal_areas) > 0)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <center>
                                <table class="table table-striped message-table" style="width:80%">
                                    <!-- 表頭 -->
                                    <thead>
                                    <tr><td colspan="2" align="center"><font size="6" id="B1">B1</font></td></tr>
                                    <th>區域</th>
                                    <th>介紹</th>
                                    </thead>

                                    @foreach ($internal_areas as $internal)
                                        @if($internal->id <= 4)
                                            <tbody>
                                            <tr>
                                                <!-- Message Name -->
                                                <td class="table-text" width="20%">
                                                    <div>{{ $internal->name }}</div>
                                                </td>

                                                <td class="table-text"width="80%">
                                                    <div>{{ $internal->introduction }}</div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endif
                                    @endforeach
                                </table>
                                <section id="three" class="wrapper style2">
                                    <div class="inner" style="width:90%">
                                        <header class="align-center">
                                            <p class="special"><a href="#B1">B1</a></p>
                                            <h2>兒童繪本區 & 數位藝術方舟</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/B1-1.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/B1-2.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <header class="align-center">
                                            <p class="special"><a href="#B1">B1</a></p>
                                            <h2>下凹庭園 & 餐廳春水堂</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w1-3-2.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w1-4-1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </center>
                            <br><br>
                            <center>
                                <table class="table table-striped message-table" style="width:80%">
                                    <!-- 表頭 -->
                                    <thead>
                                    <tr><td colspan="2" align="center"><font size="6" id="1F">1F</font></td></tr>
                                    <th>區域</th>
                                    <th>介紹</th>
                                    </thead>

                                    @foreach ($internal_areas as $internal)
                                        @if($internal->id >= 5 & $internal->id <= 10)
                                            <tbody>
                                            <tr>
                                                <!-- Message Name -->
                                                <td class="table-text" width="20%">
                                                    <div>{{ $internal->name }}</div>
                                                </td>

                                                <td class="table-text"width="80%">
                                                    <div>{{ $internal->introduction }}</div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endif
                                    @endforeach
                                </table>
                                <section id="three" class="wrapper style2">
                                    <div class="inner" style="width:90%">
                                        <header class="align-center">
                                            <p class="special"><a href="#1F">1F</a></p>
                                            <h2>演講廳 & E亭</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w2-1-1.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w3-5-1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <header class="align-center">
                                            <p class="special"><a href="#1F">1F</a></p>
                                            <h2>精品店 & 美術街</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w2-9-2.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w2-2-1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <header class="align-center">
                                            <p class="special"><a href="#1F">1F</a></p>
                                            <h2>時光天井 & 竹林天井</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w1-5-1.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w2-4-2.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </center>
                            <br><br>
                            <center>
                                <table class="table table-striped message-table" style="width:80%">
                                    <!-- 表頭 -->
                                    <thead>
                                    <tr><td colspan="2" align="center"><font size="6" id="2F">2F</font></td></tr>
                                    <th>區域</th>
                                    <th>介紹</th>
                                    </thead>

                                    @foreach ($internal_areas as $internal)
                                        @if($internal->id >= 11 & $internal->id <= 14)
                                            <tbody>
                                            <tr>
                                                <!-- Message Name -->
                                                <td class="table-text" width="20%">
                                                    <div>{{ $internal->name }}</div>
                                                </td>

                                                <td class="table-text"width="80%">
                                                    <div>{{ $internal->introduction }}</div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endif
                                    @endforeach
                                </table>
                                <section id="three" class="wrapper style2">
                                    <div class="inner" style="width:90%">
                                        <header class="align-center">
                                            <p class="special"><a href="#2F">2F</a></p>
                                            <h2>影音藝術廳 & 研習教室</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w1-7-2.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w2-7-1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <header class="align-center">
                                            <p class="special"><a href="#2F">2F</a></p>
                                            <h2>兒童遊戲室 & 咖啡廳古典玫瑰園</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w1-6-2.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w2-5-1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </center>
                            <br><br>
                            <center>
                                <table class="table table-striped message-table" style="width:80%">
                                    <!-- 表頭 -->
                                    <thead>
                                    <tr><td colspan="2" align="center"><font size="6" id="3F">3F</font></td></tr>
                                    <th>區域</th>
                                    <th>介紹</th>
                                    </thead>

                                    @foreach ($internal_areas as $internal)
                                        @if($internal->id == 15)
                                            <tbody>
                                            <tr>
                                                <!-- Message Name -->
                                                <td class="table-text" width="20%">
                                                    <div>{{ $internal->name }}</div>
                                                </td>

                                                <td class="table-text"width="80%">
                                                    <div>{{ $internal->introduction }}</div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endif
                                    @endforeach
                                </table>
                                <section id="three" class="wrapper style2">
                                    <div class="inner" style="width:90%">
                                        <header class="align-center">
                                            <p class="special"><a href="#3F">3F</a></p>
                                            <h2>資料中心</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w3-1-2.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/3f-data center.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </center>
                            <br><br>
                            <center>
                                <table class="table table-striped message-table" style="width:80%">
                                    <!-- 表頭 -->
                                    <thead>
                                    <tr><td colspan="2" align="center"><font size="6" id="1F-3F">1F-3F</font></td></tr>
                                    <th>區域</th>
                                    <th>介紹</th>
                                    </thead>

                                    @foreach ($internal_areas as $internal)
                                        @if($internal->id == 16)
                                            <tbody>
                                            <tr>
                                                <!-- Message Name -->
                                                <td class="table-text" width="20%">
                                                    <div>{{ $internal->name }}</div>
                                                </td>

                                                <td class="table-text"width="80%">
                                                    <div>{{ $internal->introduction }}</div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endif
                                    @endforeach
                                </table>
                                <section id="three" class="wrapper style2">
                                    <div class="inner" style="width:90%">
                                        <header class="align-center">
                                            <p class="special"><a href="#1F-3F">1F-3F</a></p>
                                            <h2>展覽室</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w2-8-1.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w2-8-2.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </center>
                            <br><br>
                            <center>
                                <table class="table table-striped message-table" style="width:80%">
                                    <!-- 表頭 -->
                                    <thead>
                                    <tr><td colspan="2" align="center"><font size="6" id="館外">館外</font></td></tr>
                                    <th>區域</th>
                                    <th>介紹</th>
                                    </thead>

                                    @foreach ($internal_areas as $internal)
                                        @if($internal->id == 17)
                                            <tbody>
                                            <tr>
                                                <!-- Message Name -->
                                                <td class="table-text" width="20%">
                                                    <div>{{ $internal->name }}</div>
                                                </td>

                                                <td class="table-text"width="80%">
                                                    <div>{{ $internal->introduction }}</div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endif
                                    @endforeach
                                </table>
                                <section id="three" class="wrapper style2">
                                    <div class="inner" style="width:90%">
                                        <header class="align-center">
                                            <p class="special"><a href="#館外">館外</a></p>
                                            <h2>碑林廣場</h2>
                                        </header>
                                        <div class="gallery">
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w1-8-1.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image fit">
                                                    <img src="images/w1-8-2.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </center>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
