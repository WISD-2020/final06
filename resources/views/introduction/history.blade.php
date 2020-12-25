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


                @if (count($museum_histories) > 0)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <center>
                                <table class="table table-striped message-table" style="width:80%">

                                    <!-- 表頭 -->
                                    <thead>
                                    <th>開始日期</th>
                                    <th>結束日期</th>
                                    <th>內容</th>
                                    </thead>

                                    <!-- 表身 -->
                                    <tbody>
                                    @foreach ($museum_histories as $history)
                                        <tr>
                                            <!-- Message Name -->
                                            <td class="table-text" width="20%">
                                                <div>{{ $history->date }}</div>
                                            </td>

                                            <td class="table-text"width="20%">
                                                <div>{{ $history->end_date}}</div>
                                            </td>

                                            <td class="table-text"width="60%">
                                                <div>{{ $history->text }}</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
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
