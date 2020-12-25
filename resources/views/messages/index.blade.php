@extends('layouts.master')
@section('title','留言板')
@section('content')
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Dashboard</p>
                <h2>留言板</h2>
            </header>
        </div>
    </section>
    <div class="panel-body">
        <!-- 顯示驗證錯誤 -->
    @include('common.errors')
    <!-- 新留言的表單 -->
        <form action="/message" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <!-- 留言表格 -->
            <center>
                <table border="0" cellspacing="0" style="width:60%">
                    <tr bgcolor="#121212">
                        <td colspan="2">
                    </tr>

                    <tr bgcolor="#000000">
                        <td align="right"><font color="#FFFFFF">標題</font></td>
                        <td align="left" style="width:90%"><input type="text" name="title" id="message-title" class="form-control" style="background-color:plum;" placeholder="輸入留言的標題"></td>
                    </tr>
                    <tr bgcolor="#D9F2FF">
                        <td align="right">內容</td>
                        <td align="left" style="width:90%"><input type="text" name="content" id="message-content" class="form-control" placeholder="輸入留言的內容" rows="2"></td>
                    </tr>
                    <!-- 留言按鈕 -->
                    <div class="6u$ 12u$(medium)">
                        <tr>
                            <ul class="actions">
                            <td colspan="2" align="center">　
                                <button type="submit" class="button special">
                                    留言
                                </button>
                                <button type="reset" class="button alt">
                                    重新輸入
                                </button>
                            </td>
                            </ul>
                        </tr>
                    </div>
                </table>
            </center>
            </form>

    <!-- 顯示目前留言 -->
    @if (count($messages) > 0)
        <div class="panel panel-default">
            <div class="panel-body">
                <center>
                <table class="table table-striped message-table" style="width:60%">

                    <!-- 表頭 -->
                    <thead>
                    <th>會員id</th>
                    <th>標題</th>
                    <th>內容</th>
                    <th>留言時間</th>
                    </thead>

                    <!-- 表身 -->
                    <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <!-- Message Name -->
                            <td class="table-text" align="center">
                                <div>{{ $message->user_id }}</div>
                            </td>

                            <td class="table-text">
                                <div>{{ $message->title }}</div>
                            </td>

                            <td class="table-text">
                                <div>{{ $message->content}}</div>
                            </td>

                            <td class="table-text">
                                <div>{{ $message->created_at }}</div>
                            </td>



                                <!--刪除按鈕 -->
                            <td>
                                <form action="/message/{{ $message->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-message-{{ $message->id }}" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </center>
            </div>
        </div>

    @endif
@endsection
