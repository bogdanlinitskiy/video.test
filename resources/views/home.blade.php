@extends('template')


@section('carousel')
    <link rel="stylesheet" href="/css/carousel.css">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                {{--<img class="first-slide" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrUU3zoQaiyOZ2bwG-Rx-Cz-HEnvDXz0ShITNn_rcHcpMCcwg_Jw" alt="First slide">--}}
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Быстрая регистрация</h1>
                        <p>Вам необходимо всего 1 минута для регистрации</p>
                        <p><a class="btn btn-lg btn-primary" href="/register" role="button">Зарегестрироваться</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                {{--<img class="second-slide" src="https://pm1.narvii.com/6180/d1be167e8a81faab245de2d88cc338908a67654b_hq.jpg" alt="Second slide">--}}
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Создайте свою анкету</h1>
                        <p>Создать и заполнить анкету не составит труда</p>
                        <p><a class="btn btn-lg btn-primary" href="/seller_profile" role="button">Создать анкету</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                {{--<img class="third-slide" src="http://anime-zone.ru/inc/manga/berserk/25/01/berserk-v25c207p030-31rus.jpg" alt="Third slide">--}}
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Заказ услуги</h1>
                        <p>Хотите заказать услугу? Воспользуйтесь одной из категорий</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('content')

@for($i=1;$i<10;$i++)
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="/videos/1534554322_20130502_120944.jpg" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
            </div>
        </div>
    </div>
</div>
@endfor

@endsection