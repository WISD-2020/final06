<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>國家美術館</title>
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
        <li><a href={{route('generic.index')}}>美術館歷史</a></li>
        <li><a href={{route('elements.index')}}>內部樓層</a></li>
        <li><a href={{route('elements.index')}}>周遭景點</a></li>
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

<!-- Banner -->
<section class="banner full">
    <article>
        <img src="images/museum1.jpg" alt="" />
        <div class="inner">
            <header>

            </header>
        </div>
    </article>
    <article>
        <img src="images/museum2.jpg" alt="" />
        <div class="inner">
            <header>

            </header>
        </div>
    </article>
    <article>
        <img src="images/museum3.jpg"  alt="" />
        <div class="inner">
            <header>

            </header>
        </div>
    </article>
    <article>
        <img src="images/museum4.jpg"  alt="" />
        <div class="inner">
            <header>

            </header>
        </div>
    </article>
    <article>
        <img src="images/museum5.jpg"  alt="" />
        <div class="inner">
            <header>

            </header>
        </div>
    </article>
</section>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/history.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">

                            <h2>美術館歷史</h2>
                        </header>
                        <footer class="align-center">
                            <a href="{{route('generic.index')}}" class="button alt">More</a>
                        </footer>
                    </div>
                </div>
            </div>
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/in.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>美術館內部樓層</h2>
                        </header>
                        <footer class="align-center">
                            <a href="{{route('generic.index')}}" class="button alt">More</a>
                        </footer>
                    </div>
                </div>
            </div>
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/out.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>美術館周遭景點</h2>
                        </header>
                        <footer class="align-center">
                            <a href="{{route('generic.index')}}" class="button alt">More</a>
                        </footer>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
            <h2>Morbi maximus justo</h2>
        </header>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <header class="align-center">
            <p class="special">Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
            <h2>Morbi maximus justo</h2>
        </header>
        <div class="gallery">
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/pic01.jpg" alt="" /></a>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/pic02.jpg" alt="" /></a>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/pic03.jpg" alt="" /></a>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/pic04.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
    <div class="copyright">
        &copy; Untitled. All rights reserved.
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
