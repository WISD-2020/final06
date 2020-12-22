<!DOCTYPE HTML>
<html>
<head>
    <title>國家美術館周遭景點</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
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

<!-- Header -->
<header id="header" class="alt">
    <div class="logo"><a href={{route('home.index')}}><img src="images/logo.png" width="200"></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href={{route('home.index')}}>首頁</a></li>
        <li><font color="#fffafa">介紹</font></li>
        <li><a href={{route('history.index')}}>美術館歷史</a></li>
        <li><a href={{route('internal.index')}}>內部樓層</a></li>
        <li><a href={{route('external.index')}}>周遭景點</a></li>
        <li><font color="#fffafa">預約</font></li>
        <li><a href={{route('ways.index')}}>參訪路線</a></li>
        <li><a href={{route('reservation.index')}}>預約參訪</a></li>
        <li><font color="#fffafa">留言</font></li>
        <li><a href={{route('elements.index')}}>留言板</a></li>
        <li><font color="#fffafa">會員/管理員</font></li>
        <li><a href={{route('login')}}>登入</a></li>
        <li><a href={{route('register')}}>註冊</a></li>
        <li><a href="http://localhost:8000/admin">管理員登入</a></li>
    </ul>
</nav>



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
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
