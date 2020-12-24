@extends('layouts.m')

@section('content')
<img src="images/museum4.jpg"  alt="" height="800" width="1600"/>


    <div class="panel-body">
        <!-- 顯示驗證錯誤 -->
    @include('common.errors')

    <!-- 新留言的表單 -->
        <form action="/message" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <!-- 留言表格 -->
                <table border="0" width="800" align="center" cellspacing="0">
                    <tr bgcolor="#0084CA" align="center">
                        <td colspan="2">
                    </tr>

                    <tr bgcolor="#84D7FF">
                        <td width="15%">標題</td>
                        <td width="85%"><input type="text" name="title" id="message-title" class="form-control"size="50"></td>
                    </tr>
                    <tr bgcolor="#D9F2FF">
                        <td width="15%">內容</td>
                        <td width="85%"><input type="text" name="content" id="message-content" class="form-control"></td>
                    </tr>
                    <!-- 留言按鈕 -->
                    <tr>
                        <td colspan="2" align="center">　
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i>留言
                            </button>
                            <button type="reset" class="btn btn-default">
                                <i class="fa fa-plus"></i>重新輸入
                            </button>
                        </td>
                    </tr>
                    <!---->

                </table>
            </form>

    <!-- 顯示目前留言 -->
    @if (count($messages) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>

            <div class="panel-body">
                <table class="table table-striped message-table">

                    <!-- 表頭 -->
                    <thead>
                    <th>留言</th>
                    <th>標題</th>
                    <th>內容</th>
                    <th>留言時間</th>
                    </thead>

                    <!-- 表身 -->
                    <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <!-- Message Name -->
                            <td class="table-text">
                                <div>{{ $message->user_name }}</div>
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
            </div>
        </div>

    @endif
@endsection
