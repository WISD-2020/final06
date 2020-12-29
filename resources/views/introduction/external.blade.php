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
                <img class="mySlides" src="images/green.png" width="100%" height="750">
                <img class="mySlides" src="images/v_s.png" width="100%" height="750">
                <img class="mySlides" src="images/market4_n.png" width="100%" height="750">
                <img class="mySlides" src="images/road.png" width="100%" height="750">
                <img class="mySlides" src="images/road-2.png" width="100%" height="750">
                <img class="mySlides" src="images/n_road.png" width="100%" height="750">
                <img class="mySlides" src="images/phome.png" width="100%" height="750">
                <img class="mySlides" src="images/310.png" width="100%" height="750">
                <img class="mySlides" src="images/bcofe.png" width="100%" height="750">
                <img class="mySlides" src="images/lawre.png" width="100%" height="750">
                <img class="mySlides" src="images/cofe.png" width="100%" height="750">
                <img class="mySlides" src="images/bread.png" width="100%" height="750">
                <img class="mySlides" src="images/re.png" width="100%" height="750">

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
            <div class="content" id="周遭景點">
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
                                            <tr><td colspan="5" align="center"><font size="6"><h4>➲<a href="#草悟道">草悟道</a>　➲<a href="#審計新村">審計新村</a>　➲<a href="#忠信市場">忠信市場</a></h4></font></td></tr>
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
                                            <tr><td colspan="5" align="center" id="草悟道"><font size="6">草悟道</font></td></tr>
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
                                        <section id="three" class="wrapper style2">
                                            <div class="inner" style="width:90%">
                                                <header class="align-center">
                                                    <p class="special">Calligraphy Greenway</p>
                                                    <h2><a href="#周遭景點">草悟道</a></h2>
                                                </header>
                                                <div class="image fit">
                                                    <img src="images/ex1-1.jpg" alt="" />
                                                </div>
                                                <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex1-2.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex1-3.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex1-4.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex1-5.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </center>
                                    {{--審計新村--}}
                                    <center>
                                        <table class="table table-striped message-table">
                                        <thead>
                                        <tr><td colspan="5" align="center"><font size="6" id="審計新村">審計新村</font></td></tr>
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
                                        <section id="three" class="wrapper style2">
                                            <div class="inner" style="width:90%">
                                                <header class="align-center">
                                                    <p class="special">Sheng Ji New Village</p>
                                                    <h2><a href="#周遭景點">審計新村</a></h2>
                                                </header>
                                                <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-1.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-2.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-3.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-4.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            <header class="align-center">
                                                <p class="special"><a href="#審計新村">審計新村</a></p>
                                                <h2>旅禾泡芙之家 & 魚刺人雞蛋糕</h2>
                                            </header>
                                            <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-5.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-6.jpg" alt="" />
                                                        </div>
                                                    </div>
                                            </div>
                                            <header class="align-center">
                                                <p class="special"><a href="#審計新村">審計新村</a></p>
                                                <h2>艸水木堂 & 甜月亮義大利手作冰淇淋</h2>
                                            </header>
                                            <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-7.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-8.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    </div>
                                            <header class="align-center">
                                                <p class="special"><a href="#審計新村">審計新村</a></p>
                                                <h2>成真咖啡ComeTrueCoffee & 三時福利社（三時杏仁）</h2>
                                            </header>
                                                <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-9.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-10.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    </div>
                                            <header class="align-center">
                                                <p class="special"><a href="#審計新村">審計新村</a></p>
                                                <h2>HWC黑沃咖啡 & 繞輪司LAWRENCE</h2>
                                            </header>
                                                <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-11.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex2-12.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </center>
                                    {{--忠信市場--}}
                                    <center>
                                        <table class="table table-striped message-table">
                                            <thead>
                                            <tr><td colspan="5" align="center" id="忠信市場"><font size="6">忠信市場</font></td></tr>
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
                                        <section id="three" class="wrapper style2">
                                            <div class="inner" style="width:90%">
                                                <header class="align-center">
                                                    <p class="special">Zhongxin Market</p>
                                                    <h2><a href="#周遭景點">忠信市場</a></h2>
                                                </header>
                                                <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex3-1.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex3-2.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <header class="align-center">
                                                    <p class="special"><a href="#忠信市場">忠信市場</a></p>
                                                     <h2>Toku Toku-matcha & coffee</h2>
                                                </header>
                                                <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex3-3.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex3-4.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <header class="align-center">
                                                    <p class="special"><a href="#忠信市場">忠信市場</a></p>
                                                    <h2>春丸餐包製作所</h2>
                                                </header>
                                                <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex3-5.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex3-6.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <header class="align-center">
                                                    <p class="special"><a href="#忠信市場">忠信市場</a></p>
                                                    <h2>感傷唱片行</h2>
                                                </header>
                                                <div class="gallery">
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex3-7.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="image fit">
                                                            <img src="images/ex3-8.jpg" alt="" />
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
