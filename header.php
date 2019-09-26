<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="купить,самокаты,электросамокаты,e-twow">
    <meta name="description" content="Официальный дистрибьютор E-TWOW в Казахстане">
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/assets/media/img/logo/favicon.ico">
    <title>Электросамокаты E-TWOW</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="logo text-center">
            <img src="<?php bloginfo('template_directory') ?>/assets/media/img/logo/logo.png" alt="Logo">
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php bloginfo('template_directory') ?>/assets/media/img/Slider/first-slide.jpg" alt="Первый слайд">
                    <div class="carousel-caption  d-md-block">
                        <h3>Think GREEN. Think ETWOW</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php bloginfo('template_directory') ?>/assets/media/img/Slider/second-slide.jpg" alt="Второй слайд">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Продвигайтесь вперед вместе с E-TWOW.</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php bloginfo('template_directory') ?>/assets/media/img/Slider/thrid-slide.jpg" alt="Третий слайд">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Мы на пути к будущему.</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light mb-5 wow animated fadeIn">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/logo/logo.png" alt="navLogo">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#models">Модели</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Магазин</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn btn-info dropdown-toggle btn-md" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Заказать звонок
                            </a>
                            <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                                <form id="telForm">
                                    <div class="form-group">
                                        <label for="telName">Ваше имя</label>
                                        <input type="text" class="form-control" id="telName" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telNumber">Ваш номер</label>
                                        <input type="tel" class="form-control" id="telNumber" name="phone" required>
                                    </div>
                                    <button class="btn btn-success">Заказать</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>