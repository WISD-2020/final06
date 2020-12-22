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
                <form action="">
                    <table align="center">
                        <tr>
                            <td>地點</td>
                            <td>前言</td>
                            <td>介紹</td>
                            <td>地址</td>
                            <td>路線</td>
                            <td>營業時間</td>
                        </tr>
<!--                        --><?php
//                        //echo $re;
//                        //將欄位變成一個個陣列
//                        $k=0;
//                        while($row=$re-> fetch_assoc())
//                        {
//                            $to_name[]=$row["name"];
//                            // echo count($g_id);
//                            $to_preface[]=$row["preface"];
//                            $to_intro[]=$row["introduction"];
//                            $to_position[]=$row["position"];
//                            $to_way[]=$row["way"];
//                            $to_open[]=$row["open"];
//                            $k=$k+1;
//
//                        }
//                        //echo $k;
//                        for ($i=0; $i < $k ; $i++) {
//                            # code...
//                            echo "<tr>
//				                        <td>".$to_name[$i]."</td>
//				                        <td>".$to_preface[$i]."</td>
//				                        <td>".$to_intro[$i]."</td>
//				                        <td>".$to_position[$i]."</td>
//				                        <td>".$to_way[$i]."</td>
//				                        <td>".$to_open[$i]."</td>
//				                        </tr>
//				                        ";
//                        }
//                        ?>

                    </table>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
