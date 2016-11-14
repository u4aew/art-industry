<?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}
$this->title = $page->title;
$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];
$this->description = !empty($page->description) ? $page->description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->keywords) ? $page->keywords : Yii::app()->getModule('yupe')->siteKeyWords ?>

<div class="wrapper">
    <div class="js-header-menu">
        <ul class="list-slider-menu">
            <li class="list-slider-menu__item"><a target="_blank" class="list-slider-menu__link"
                                                  href="https://vk.com/club115032460">Вконтакте |</a></li>
            <li class="list-slider-menu__item"><a class="list-slider-menu__link" href="#">+ 7 (962) 520 45 20 |</a></li>
            <li class="list-slider-menu__item"><a onclick="$('#myModalBox').modal('show');return false;"
                                                  class="list-slider-menu__link list-slider-menu__btn"
                                                  href="#">Заказать </a></li>
        </ul>
    </div>
    <div class="header">
        <div class="header-top">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="header-top-menu">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="header-logo">
                                    <div class="header-logo__pic"
                                         style="background-image: url('<?= $this->mainAssets ?>/images/logo.jpg')">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="header__title">
                                    Art-industry
                                    <div class="header__title-slogan">
                                        Искусство оформления стали
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="header__cont">
                                    <div class="header__phone">
                                        + 7 (962) 520 45 20
                                    </div>
                                    <div class="header__adres">
                                        Барнаул проспект Ленина 144а, офис 3
                                    </div>
                                    <div class="header__button">
                                        <button onclick="$('#myModalBox').modal('show');return false;"
                                                class="b-order__btn btn_header">Заказать
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="b-slider">
            <?php $this->widget(
                "application.modules.slide.widgets.SlideWidget",
                array("view" => "slidewidget",)
            ); ?>
        </div>
        <hr>

        <div class="b-product">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="b-product__item"
                         style="background-image: url('<?= $this->mainAssets ?>/images/promo1.jpg')">
                        <div class="b-product__info">
                            <div class="b-product__text">
                                Элегантно
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="b-product__item"
                         style="background-image: url('<?= $this->mainAssets ?>/images/promo2.jpg')">
                        <div class="b-product__info">
                            <div class="b-product__text">
                                Стильно
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="b-product__item"
                         style="background-image: url('<?= $this->mainAssets ?>/images/promo3.jpg')">
                        <div class="b-product__info">
                            <div class="b-product__text">
                                Оригинально
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="b-description">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="b-description__text">
                        <p> Желая украсить интерьер собственного дома предметом искусства, выбор большинства всегда
                            падает
                            на картины или вазы. Однако, со временем такие решения как изнашиваются внешне, так и
                            устаревают
                            морально, нарушая гармоничное восприятие обновленного интерьера.</p>
                        <p> Альтернативным вариантом "на века" способны служить <b> портреты и картины из стали</b>,
                            выполненные
                            методом механической перфорации.</p>
                        <p> Изготовленные из тончайшего листа металла картины не выглядят громоздко, а их прочность не
                            оставляет сомнений.</p>
                        <p> Дополнительным элементом, способным возродить к жизни холодную сталь в ночное время
                            выступает <b>
                                светодиодная подсветка</b>, выгодно выделяющая элегантный металл на фоне вездесущего
                            полумрака.</p>
                        <p><b>Преимущества решений из металла. </b>Предпочитая практичный металл конкурентным
                            декоративным решениям, клиент вносит в интерьер
                            своего дома нотку футуризма, способную внести разнообразие в классический стиль убранства,
                            ровно
                            как и выгодно дополнить <b>дизайнерские работы </b>в стиле модерн.</p>
                        <p>Что касается стоимости, она полностью оправдана использованием высокоточного лазерного
                            оборудования в процессе изготовления картины, а также использованием металлического сырья
                            <b>достойного качества</b>, ложащегося в основу каждой уникальной картины.</p>
                        <br>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-lg-offset-3">
                    <div class="b-video">
                        <div class="b-video-wrapper">
                            <div class="b-video-youtube"
                                 style="background-image: url('<?= $this->mainAssets ?>/images/background-video.jpg')">
                                <div class="b-video-youtube-wrap">
                                    <a href="https://www.youtube.com/watch?v=A1Qb4zfurA8?autoplay=1"
                                       style="background-image: url('<?= $this->mainAssets ?>/images/play.png')"
                                       class="video-play video-youtube">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="b-promo-bottom" style="background-image: url('<?= $this->mainAssets ?>/images/promo-bottom.jpg')">
            <div class="b-promo-bottom__info">
                Новый взгляд на обыденные вещи!
            </div>
        </div>
        <div class="b-product-bottom">
            <div class="b-product-bottom__title">
                Наши Работы
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product1.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product1.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product2.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product2.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product3.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product3.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product4.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product4.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product5.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product5.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product6.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product6.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product7.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product7.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product8.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product8.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product9.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product9.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product10.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product10.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product11.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product11.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product12.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product12.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product13.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product13.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product14.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product14.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product15.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product15.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product16.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product16.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product17.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product17.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product18.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product18.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product19.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product19.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card__pic"
                             style="background-image: url('<?= $this->mainAssets ?>/images/product20.jpg')">
                            <div class="product-card__wrapper">
                                <div class="quick-view"><a class="fancybox quick-view__link" rel="group"
                                                           href="<?= $this->mainAssets ?>/images/product20.jpg">Просмотр</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="b-order__title">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <p> Намереваясь <b>оформить заказ,</b> клиенту необходимо лишь связаться с нашими представителями,
                        посредством <b>
                            контактного телефона или адреса электронной почты.</b> Далее, наши учтивые сотрудники
                        помогут
                        определиться с
                        дизайном и габаритами будущей картины.</p>
                    <p>Доставка готового продукта осуществляется <b>лично в руки заказчика</b>, что препятствует
                        повреждению в
                        процессе
                        транспортировки и гарантирует сохранность картины из металла в том виде, в котором ее ожидает
                        клиент!</p>
                </div>
            </div>
        </div>
        <div class="b-order">
            <button onclick="$('#myModalBox').modal('show');" class="b-order__btn">
                Заказать
            </button>

        </div>
        <div class="footer">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer__info">
                        Art-industry 2016
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4"></div>
            </div>

        </div>
    </div>
    <div id="myModalBox" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content b-modal">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form id="formOrder">
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <label for="UserPhone">Ваш номер телефона или E-mail ?</label>
                        <input id="UserPhone" name="phone" type="text" class="form-control phone-control" required>
                        <div class="b-dimensions-more">
                            <div class="dimensions-alert">
                                Прикрепить изображение (необязательно)
                            </div>
                            <hr>
                            <div class="dimensions-title">
                                Размеры
                                <div class="dimensions-title-alert">
                                    Минимум 500х500 мм
                                    <br>
                                    Максимум 2000х3000 мм
                                </div>
                            </div>
                            <hr>
                            <div class="b-dimensions">
                                <div>
                                    <label for="HeightProduct">Высота, мм</label>
                                    <input type="text" id="HeightProduct" pattern="^[ 0-9]+$" name="HeightProduct"
                                           class="form-control control-dimensions">
                                </div>

                                <div>
                                    <label for="WidthProduct">Ширина, мм</label>
                                    <input type="text" id="WidthProduct" name="WidthProduct"
                                           pattern="^[ 0-9]+$" class="form-control control-dimensions">

                                </div>
                            </div>


                            <hr>
                            <br>
                        <span class="btn btn-primary fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i>
        <span>Добавить...</span>
                            <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
                            <br>
                            <br>
                            <!-- The global progress bar -->
                            <div id="progress" class="progress">
                                <div class="progress-bar progress-bar-success"></div>
                            </div>
                            <!-- The container for the uploaded files -->
                            <div id="files" class="files"></div>

                        </div>
                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="submit" id="SendBtn" class="btn btn-success">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="SuccessModalBox" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content b-modal">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body__close">
                    Спасибо, наши менеджеры свяжутся с вами в ближайщее время
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>