@extends('layouts.master')
@section('title','預約參訪')
@section('content')
<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>歡迎！</p>
            <h2>預約參訪</h2>
        </header>
    </div>
</section>
@include('common.errors')
<!-- Main -->
<div id="main" class="container">
    <form action="{{route('visit.store')}}" method="POST" role="form">
        {{ method_field('POST') }}
        {{ csrf_field() }}
        <h3><strong>選擇參訪日期</strong></h3>
        <input type="date" name="date" id="date" value="date">
        <br><br>
            <h3><strong>選擇參訪時段</strong></h3>
                <select name="period" id="period" class="span5" style="width:20%">
                    <option>請選擇時段</option>
                    <option value="10:00-12:00">時段1：10:00-12:00</option>
                    <option value="11:00-13:00">時段2：11:00-13:00</option>
                    <option value="12:00-14:00">時段3：12:00-14:00</option>
                    <option value="13:00-15:00">時段4：13:00-15:00</option>
                    <option value="14:00-16:00">時段5：14:00-16:00</option>
                    <option value="15:00-17:00">時段6：15:00-17:00</option>
                    <option value="16:00-18:00">時段7：16:00-18:00</option>
                </select>
            <br><br>

            <h3><strong>選擇參訪路線</strong></h3>
            <dl>
                <dt><div class="4u 12u$(small)">
                    <input type="radio" id="way1" name="way_id" value="1">
                        <label for="way1"><font color="#ae00ae">親子路線</font></label>
                </div></dt>
                <dd>
                    <p>①數位藝術方舟➜②兒童繪本區➜③下凹庭院➜④春水堂➜⑤時光天井➜⑥兒童遊戲室➜⑦影音藝術廳➜⑧碑林廣場</p>
                </dd>
                <dt><div class="4u 12u$(small)">
                    <input type="radio" id="way2" name="way_id" value="2">
                        <label for="way2"><font color="#ae00ae">藝術路線</font></label>
                </div></dt>
                <dd>
                    <p>①演講廳➜②美術街➜③時光天井➜④竹林天井➜⑤古典玫瑰園➜⑥影音藝術廳➜⑦研習教室➜⑧展覽室➜⑨精品店</p>
                </dd>
                <dt><div class="4u 12u$(small)">
                    <input type="radio" id="way3" name="way_id" value="3">
                        <label for="way3"><font color="#ae00ae">散心路線</font></label>
                </div></dt>
                <dd>
                    <p>①資料中心➜②展覽室➜③古典玫瑰園➜④美術街➜⑤E亭</p>
                </dd>
            </dl>
        <!-- 送出按鈕 -->
        <tr>
            <td colspan="2">
                <input type="button" name="button" value="送出" class="button special" onclick="if(confirm('確認要送出本預約嗎？')) this.form.submit();">
                <button type="reset" class="button alt">
                    重新輸入
                </button>
            </td>
        </tr>
    </form>
</div>
@endsection

