<!DOCTYPE HTML>
<html>
<head>
    <title>國家美術館歷史</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
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
        <li><a href={{route('elements.index')}}>預約參訪</a></li>
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
            <img  src="images/twa-1.jpg" width="100%" height="500">
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <header class="align-center">
                    <p>台灣美術館</p>
                    <h2>歷史介紹</h2>
                </header>
                <form action="">
                    <table align="center">
                        <tr>
                            <td>區域</td>
                            <td>樓層</td>
                            <td>介紹</td>
                        </tr>
<!--                        --><?php
//                        //echo $re;
//                        //將欄位變成一個個陣列
//                        $k=0;
//                        while($row=$re-> fetch_assoc())
//                        {
//                            $t_date[]=$row["date"];
//                            // echo count($g_id);
//                            $t_enddate[]=$row["enddate"];
//                            $t_text[]=$row["text"];
//                            $k=$k+1;
//
//                        }
//                        //echo $k;
//                        for ($i=0; $i < $k ; $i++) {
//                            # code...
//                            echo "<tr>
//				                        <td>".$t_date[$i]."</td>
//				                        <td>".$t_enddate[$i]."</td>
//				                        <td>".$t_text[$i]."</td>
//    			                        </tr>
//				                        ";
//                      }
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
