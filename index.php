<?php get_header(); ?>

<?php if(get_theme_mod('etwow-advantages-display') == 'YES') {?>

<section class="advantages">
    <div class="container text-center">
        <h3 class="wow animated fadeInLeft" data-wow-duration="1s">
            <?php echo get_theme_mod( 'etwow-advantages-headline' ) ?>
        </h3>
        <div class="row mt-5">
            <div class="col-sm wow animated bounceInUp" data-wow-duration="1.2s">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod( 'etwow-advantages-item1-image' )) ?>">
                <h6>
                    <?php echo get_theme_mod( 'etwow-advantages-item1-title' ) ?>
                </h6>
                <p class="lead">
                    <?php echo get_theme_mod( 'etwow-advantages-item1-text' ) ?> 
                </p>
            </div>
            <div class="col-sm wow animated bounceInUp" data-wow-duration="1.4s">
                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/ecology.png">
                <h6>Экологичный</h6>
                <p class="lead">
                    E-TWOW не загрязняет природу
                </p>
            </div>
            <div class="col-sm wow animated bounceInUp" data-wow-duration="1.6s">
                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/light.png">
                <h6>Легкий</h6>
                <p class="lead">
                    Всего 10.7 кг, самый легкий среди скутеров
                </p>
            </div>
            <div class="col-sm wow animated bounceInUp" data-wow-duration="1.8s">
                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/kers.png">
                <h6>Система KERS</h6>
                <p class="lead">
                    Система восстановления кинетической энергии
                </p>
            </div>
        </div>
    </div>
</section>

<hr class="mb-5">

<?php }?>

<section class="experience">
    <div class="container text-center">
        <h3 class="wow animated fadeInRight" data-wow-duration="1.2s">ОТКРОЙТЕ ДЛЯ СЕБЯ E-TWOW EXPERIENCE</h3>
        <p class="lead mb-5 wow  animated fadeInLeft" data-wow-duration="1.4s">
            E-TWOW олицетворяет собой скутер будущего с нашими инновационными технологиями,
            которые мы предлагаем с высокой производительностью,
            никогда ранее не использовавшимися характеристиками.
        </p>
        <div class="text-center">
            <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/battery.jpg" alt="" class="img-fluid wow animated zoomIn" data-wow-duration="1.8s" data-wow-offset="300">
        </div>
        <div class="row mt-5">
            <div class="col-sm wow animated fadeInLeft">
                <div class="card">
                    <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/assets/media/img/images/tires.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Безопасность</h5>
                        <p class="card-text text-left">
                            E-TWOW предлагает безопасную и удобную езду
                            Двойную тормозную систему с магнитным тормозом и
                            безвоздушными шинами.
                            Ограничение максимальной скорости .
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm wow animated fadeInLeft">
                <div class="card">
                    <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/assets/media/img/images/display.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Функциональность</h5>
                        <p class="card-text text-left">
                            Вы всегда можете проверить свою скорость, уровень заряда батареи,
                            пробег, температуру окружающей среды и активированные функции, через дисплей.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm wow animated fadeInRight">
                <div class="card">
                    <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/assets/media/img/images/complete-folding.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Удобство</h5>
                        <p class="card-text text-left">
                            E-TWOW имеет 3-х точечную складную систему,
                            вес менее 11 кг, благодарю чему занимает мало места и легко переносится.
                            Мы меняем вашу жизнь к лучшему!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm wow animated fadeInRight">
                <div class="card">
                    <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/assets/media/img/images/KERS.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Технология KERS</h5>
                        <p class="card-text text-left">
                            Система восстановления кинетической энергии,
                            так что мы сокращаем потребление энергии и увеличиваем
                            автономию нашего скутера до 60%, просто нажимая на тормоз.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="mt-5 mb-5">

<section class="about" id="about">
    <div class="container">
        <h3 class="text-center wow animated fadeInRight">E-TWOW уже в Казахстане</h3>
        <div class="wow animated fadeInLeft">
            <p class="lead mt-5">
                Марка E-TWOW - Electric Two Wheels
                является частью крупной международной концепции, штаб-квартира
                которой находится как в Китае, так и в Европе.
            </p>
            <p class="lead">
                Наша компания предоставляет продукцию E-TWOW с 2016 года,
                и является официальным дистрибьютором в Республике Казахстан.
            </p>
            <p class="lead">
                Философия E-TWOW заключается в том,
                чтобы облегчить жизнь и прекратить тратить наше
                драгоценное время и ресурсы. Просто нажав кнопку,
                можно легко добраться до места назначения с помощью
                экологичного, мощного и легкого в обращении транспортного
                средства! Благодаря своему первоклассному качеству, инновационным
                технологиям и уникальным функциям, E-TWOW представляет собой
                лучший выбор для вас!
            </p>
        </div>
    </div>
</section>

<hr class="mb-5 mt-5">
<div id="app">
    <!-- Секция характеристик и моделей -->
    <section class="models" id="models">
        <div class="container">
            <h3 class="text-center mb-5">ВЫБЕРИТЕ СВОЙ E-TWOW</h3>
            <div>
                <nav>
                    <div class="nav nav-pills flex-column flex-sm-row mb-4" id="nav-tab" role="tablist">
                        <a class="flex-sm-fill text-sm-center nav-item nav-link active" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-home" aria-selected="true">
                            E-TWOW BOOSTER PlUS
                        </a>
                        <a class="flex-sm-fill text-sm-center nav-item nav-link" id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-profile" aria-selected="false">
                            E-TWOW BOOSTER PLUS S
                        </a>
                        <a class="flex-sm-fill text-sm-center nav-item nav-link" id="nav-thrid-tab" data-toggle="tab" href="#nav-thrid" role="tab" aria-controls="nav-contact" aria-selected="false">
                            E-TWOW BOOSTER PLUS V
                        </a>
                        <a class="flex-sm-fill text-sm-center nav-item nav-link" id="nav-fourth-tab" data-toggle="tab" href="#nav-fourth" role="tab" aria-controls="nav-contact" aria-selected="false">
                            E-TWOW ECO PLUS
                        </a>
                    </div>
                </nav>
                <!--  -->
                <div class="tab-content text-center" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                        <h5>E-TWOW S2 BOOSTER PLUS</h5>
                        <p class="lead">Доступные цвета</p>
                        <div class="row">
                            <!-- Фотографии моделей -->
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-white-small.png" class="img-fluid" alt="White">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-red-small.png" class="img-fluid" alt="White">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-black-small.png" class="img-fluid" alt="White">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-green-small.png" class="img-fluid" alt="White">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-metalic-blue-small.png" class="img-fluid" alt="White">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-blue-gray-small.png" class="img-fluid" alt="White">
                            </div>
                        </div>
                        <div class="text-left">
                            <div>
                                <h5>Характеристики</h5>
                                <table class="table table-striped">
                                    <tr>
                                        <td>Модель</td>
                                        <td>E-TWOW S2 BOOSTER PLUS</td>
                                    </tr>
                                    <tr>
                                        <td>Автономность аккумулятора</td>
                                        <td>30km</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность</td>
                                        <td>500W</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость</td>
                                        <td>40 км/ч</td>
                                    </tr>
                                </table>
                                <button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#model1">
                                    Показать все характеристики
                                </button>
                            </div>
                            <div class="modal fade" id="model1" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Характеристики</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <tr v-for="(value, key) in model1">
                                                    <td>{{key}}</td>
                                                    <td>{{value}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                        <h5>E-TWOW BOOSTER PLUS S</h5>
                        <p class="lead">Доступные цвета</p>
                        <div class="row">
                            <!-- Фотографии моделей -->
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-white-small.png" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-red-small.png" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-black-small.png" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-green-small.png" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-grey-small.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="text-left">
                            <h5>Характеристики</h5>
                            <table class="table table-striped">
                                <tr>
                                    <td>Модель</td>
                                    <td>E-TWOW BOOSTER PLUS S</td>
                                </tr>
                                <tr>
                                    <td>Автономность аккумулятора</td>
                                    <td>35km</td>
                                </tr>
                                <tr>
                                    <td>Мощность</td>
                                    <td>500W</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость</td>
                                    <td>40 км/ч</td>
                                </tr>
                            </table>
                            <button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#model2">
                                Показать все характеристики
                            </button>
                            <div class="modal fade" id="model2" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Характеристики</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <tr v-for="(value, key) in model2">
                                                    <td>{{key}}</td>
                                                    <td>{{value}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="tab-pane fade" id="nav-thrid" role="tabpanel" aria-labelledby="nav-thrid-tab">
                        <h5>E-TWOW BOOSTER PLUS V</h5>
                        <p class="lead">Доступные цвета</p>
                        <div class="row">
                            <!-- Фотографии моделей -->
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-white-small.png" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-black-small.png" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-grey-small.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="text-left">
                            <h5>Характеристики</h5>
                            <table class="table table-striped">
                                <tr>
                                    <td>Модель</td>
                                    <td>E-TWOW BOOSTER PLUS V</td>
                                </tr>
                                <tr>
                                    <td>Автономность аккумулятора</td>
                                    <td>40km</td>
                                </tr>
                                <tr>
                                    <td>Мощность</td>
                                    <td>500W</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость</td>
                                    <td>40 км/ч</td>
                                </tr>
                            </table>
                            <button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#model3">
                                Показать все характеристики
                            </button>
                            <div class="modal fade" id="model3" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Характеристики</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <tr v-for="(value, key) in model3">
                                                    <td>{{key}}</td>
                                                    <td>{{value}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="tab-pane fade" id="nav-fourth" role="tabpanel" aria-labelledby="nav-fourth-tab">
                        <h5>E-TWOW ECO PLUS</h5>
                        <p class="lead">Доступные цвета</p>
                        <div class="row">
                            <!-- Фотографии моделей -->
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-black-small.png" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="<?php bloginfo('template_directory') ?>/assets/media/img/images/BoosterPlus/e-twow-booster-plus-white-small.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="text-left">
                            <h5>Характеристики</h5>
                            <table class="table table-striped">
                                <tr>
                                    <td>Модель</td>
                                    <td>E-TWOW ECO PLUS</td>
                                </tr>
                                <tr>
                                    <td>Автономность аккумулятора</td>
                                    <td>30km</td>
                                </tr>
                                <tr>
                                    <td>Мощность</td>
                                    <td>350W</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость</td>
                                    <td>30 км/ч</td>
                                </tr>
                            </table>
                            <button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#model4">
                                Показать все характеристики
                            </button>
                            <div class="modal fade" id="model4" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Характеристики</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <tr v-for="(value, key) in model4">
                                                    <td>{{key}}</td>
                                                    <td>{{value}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="mb-5 mt-5">

    <section class="contact" id="contact">
        <div class="container text-center wow animated fadeIn">
            <h3>СВЯЖИТЕСЬ С НАМИ</h3>
            <div class="social-icons mt-3">
                <a href="#"><i class="fa fa-envelope"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="address p-2">
                <p class="lead">Казахстан Алматы 4мкр. дом 24, 050062</p>
                <p class="lead"><a href="tel:+77017130070"><i class="fa fa-phone"></i> +7(701)713-00-70</a></p>
                <p class="lead"><a href="tel:+77272768266"><i class="fa fa-phone"></i> +7(727)276-82-66</a></p>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>