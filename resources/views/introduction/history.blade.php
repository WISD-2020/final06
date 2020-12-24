@extends('layouts.master')
@section('title','國家美術館歷史')
@section('content')
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

                            <td width="15%" align="center">開始日期</td>

                            <td width="15%" align="center">結束日期</td>

                            <td width="15%" align="center">內容</td>


                        </tr>


                        <!-- 顯示目前留言 -->

{{--                                <div class="panel-body">--}}
{{--                                    <table class="table table-striped message-table">--}}

{{--                                        <!-- 表頭 -->--}}
{{--                                        <thead>--}}
{{--                                        <th>留言</th>--}}
{{--                                        <th>&nbsp;</th>--}}
{{--                                        </thead>--}}

{{--                                        <!-- 表身 -->--}}
{{--                                        <tbody>--}}
{{--                                            <tr>--}}
{{--                                                <!-- Message Name -->--}}
{{--                                                <td class="table-text">--}}
{{--                                                    <div>{{ $museum_histories->date }}</div>--}}

{{--                                                </td>--}}
{{--                                                <td class="table-text">--}}
{{--                                                    <div>{{ $museum_histories->created_at }}</div>--}}
{{--                                                </td>--}}

{{--                        <tr>--}}
{{--                            <td width="15%" align="center">{{Auth::museum_histories()->date}}</td>--}}
{{--                            <td width="15%" align="center">{{Auth::museum_histories()->end_date}}</td>--}}
{{--                            <td>{{Auth::museum_histories()->text}}</td>--}}
{{--                        </tr>--}}

                    </table>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
