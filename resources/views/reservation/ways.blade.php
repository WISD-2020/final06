@extends('layouts.master')
@section('title','國家美術館參訪路線')
@section('content')
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
@endsection

