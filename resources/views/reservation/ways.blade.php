<!DOCTYPE HTML>
<html>
<head>
    <title>國家美術館參訪路線</title>
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
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/family.png" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>親子路線</h2>
                        </header>
                        <p>①數位藝術方舟➜②兒童繪本區➜③下凹庭院➜④春水堂➜⑤時光天井➜⑥兒童遊戲室➜⑦影音藝術廳➜⑧碑林廣場</p>
                        <footer class="align-center">
                            <a href="{{route('way1.index')}}" class="button alt">More</a>
                        </footer>
                    </div>
                </div>
            </div>
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/artist.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>藝術路線</h2>
                        </header>
                        <p>①演講廳➜②美術街➜③時光天井➜④竹林天井➜⑤古典玫瑰園➜⑥影音藝術廳➜⑦研習教室➜⑧展覽室➜⑨精品店</p>
                        <footer class="align-center">
                            <a href="{{route('way2.index')}}" class="button alt">More</a>
                        </footer>
                    </div>
                </div>
            </div>
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/walk.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>散心路線</h2>
                        </header>
                        <p>①資料中心➜②展覽室➜③古典玫瑰園➜④美術街➜⑤E亭</p>
                        <footer class="align-center">
                            <a href="{{route('way3.index')}}" class="button alt">More</a>
                        </footer>
                    </div>
                </div>
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

