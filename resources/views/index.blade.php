
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li  class="active" ><a href="{{ route('index') }}">Все товары</a></li>
                <li ><a href="{{ route('categories') }}">Категории</a>
                </li>
                <li ><a href="{{ route('basket') }}">В корзину</a></li>
                <li><a href="{{ route('index') }}">Сбросить проект в начальное состояние</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('admin') }}">Панель администратора</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <div class="starter-template">
        <h1>Все товары</h1>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/iphone_x.jpg" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>iPhone X 64GB</h3>
                        <p>71990 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
                    <div class="caption">
                        <h3>iPhone X 256GB</h3>
                        <p>89990 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/htc_one_s.png" alt="HTC One S">
                    <div class="caption">
                        <h3>HTC One S</h3>
                        <p>12490 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/iphone_5.jpg" alt="iPhone 5SE">
                    <div class="caption">
                        <h3>iPhone 5SE</h3>
                        <p>17221 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/beats.jpg" alt="Наушники Beats Audio">
                    <div class="caption">
                        <h3>Наушники Beats Audio</h3>
                        <p>20221 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/gopro.jpg" alt="Камера GoPro">
                    <div class="caption">
                        <h3>Камера GoPro</h3>
                        <p>12000 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/video_panasonic.jpg" alt="Камера Panasonic HC-V770">
                    <div class="caption">
                        <h3>Камера Panasonic HC-V770</h3>
                        <p>27900 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/delongi.jpg" alt="Кофемашина DeLongi">
                    <div class="caption">
                        <h3>Кофемашина DeLongi</h3>
                        <p>25200 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/haier.jpg" alt="Холодильник Haier">
                    <div class="caption">
                        <h3>Холодильник Haier</h3>
                        <p>40200 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/moulinex.jpg" alt="Блендер Moulinex">
                    <div class="caption">
                        <h3>Блендер Moulinex</h3>
                        <p>4200 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/images/products/bosch.jpg" alt="Мясорубка Bosch">
                    <div class="caption">
                        <h3>Мясорубка Bosch</h3>
                        <p>9200 руб.</p>
                        <p>
                            <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                            <a href="{{ route('product') }}" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>