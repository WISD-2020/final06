@extends('layouts.master')
@section('title','會員')
@section('content')
<section id="one" class="wrapper style2">
    <div class="inner">
        <x-app-layout>
            <x-slot name="header">
            </x-slot>

        <div class="grid-style">
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/visit.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">

                            <h2>預約參訪</h2>
                        </header>
                        <footer class="align-center">
                            <a href="{{route('visits.index')}}" class="button alt">預約GO！</a>
                        </footer>
                    </div>
                </div>
            </div>
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/comment.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>留言板</h2>
                        </header>
                        <footer class="align-center">
                            <a href="{{route('internal.index')}}" class="button alt">留言GO！</a>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        </x-app-layout>
    </div>

</section>
@endsection
