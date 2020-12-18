@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron bg-info">
            <div class="container">
                <h1 class="display-3">Этот сайт посвящен Захарьеву Вадиму Анатольевичу!</h1><br>
                <p> </p>
                <p><a class="btn btn-dark btn-lg" href="/review" role="button">Отзывы »</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Stack технологий</h2>
                    <p>PHP 8.0<br>
                    Laravel 8<br>
                    MySql<br>
                    Bootstrap</p>
                </div>
                <div class="col-md-4">
                    <h2>Функционал</h2>
                    <p>Многостраничный сайт с возможностью оставить отзыв, а также просмотреть список уже существующих отзывов.</p>
                </div>
                <div class="col-md-4">
                    <h2>Кто же это сделал???</h2>
                    <a class="btn btn-lg btn-info" href="/about" role="button">Обо мне »</a>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->

    </main>
@endsection
