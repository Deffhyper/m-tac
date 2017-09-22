<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>


<div class="contacts">
    <div class="contacts__top">

        <div class="container container-contacts">
            <ul class="contacts-list">
                <li class="contacts-list__item">
                    <i class="iconmoon icon-c-picker"></i>
                    <h4 class="contacts-list__item--title">Адрес</h4>
                    <p>г. Киев, ст.м. Выдубичи, ул. Инженерная, 1, ТЦ «Фуршет», 2 этаж</p>
                </li>
                <li class="contacts-list__item">
                    <i class="iconmoon icon-phone-call"></i>
                    <h4 class="contacts-list__item--title">Телефон</h4>
                    <p><a href="tel:+380443467990" class="contacts-list__item--tel">+38 (044) 346-79-90</a></p>
                    <p><a href="tel:+380963467990" class="contacts-list__item--tel">+38 (096) 346-79-90</a></p>
                </li>
                <li class="contacts-list__item">
                    <i class="iconmoon icon-email"></i>
                    <h4 class="contacts-list__item--title">E-mail</h4>
                    <p><a href="mailto:sales@m-tac.com.ua" class="contacts-list__item--mail">sales@m-tac.com.ua</a></p>
                </li>
            </ul>
        </div>

        <div id="map" class="contacts-map"></div>

    </div>
    <div class="contacts__bottom">
        <div class="section-with-bg--black">
            <div class="container">
                <div class="uk-grid uk-grid-small uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-3">
                    <section class="description-main white-text right-padding section-padding">
                        <h4 class="title-h3 section-title-h3">Обратная связь</h4>
                        <div class="description-main__content">
                            <form action="#">
                                <fieldset class="custom-input custom-input--gray">
                                    <label for="ff-1">Ваше имя</label>
                                    <input type="text" id="ff-1" placeholder="Введите ваше имя">
                                </fieldset>
                                <fieldset class="custom-input custom-input--gray">
                                    <label for="ff-2">E-mail</label>
                                    <input type="email" id="ff-2" placeholder="Введите ваш электронный адрес">
                                </fieldset>
                                <fieldset class="custom-input custom-input--gray">
                                    <label for="ff-3">Ваше сообщение</label>
                                    <textarea name="" id="" cols="" rows="" placeholder="Текст сообщения"></textarea>
                                </fieldset>
                                <fieldset>
                                    <input type="submit" class="btn btn-normal btn-hover-normal btn-inverse" value="Отправить">
                                </fieldset>
                        </div>


                    </section>
                    <section class="description-main black-text accent-bg section-padding">
                        <h4 class="title-h3 section-title-h3">Найти магазин</h4>
                        <div class="description-main__content">
                            <div class="description-main__content--item">
                                <p>Найдите ближайший для вас магазин, где вы сможете преобрести товары нашего производства</p>
                                <svg version="1.1" class="decor-map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                     y="0px" viewBox="0 0 79.4 65.6" xml:space="preserve">
                        <g>
                            <path d="M32,37.1c0,2.8-2.3,5-5,5c-2.8,0-5-2.3-5-5c0-2.8,2.3-5,5-5C29.7,32.1,32,34.4,32,37.1L32,37.1z M32,37.1"></path>
                            <path d="M75.9,36.1l3.4-26.9L54.9,0L25.5,14L0,3.2l3.4,28.7L0.1,60.1l27.1,5.1L55,59.9l24.4,5.6L75.9,36.1z M54.8,2.8L76.4,11
                                l-1.5,11.8l-21.6-5.5L54.8,2.8z M51.9,4.3l-1.1,12.3l0,0l-14.9,1.9l-0.1,0.3c0,0.1-1.7,6.5-3.6,9.4c-1.2-0.7-2.5-1.2-3.9-1.3
                                L27,16.2L51.9,4.3z M49.6,31.8l-13,2c-0.7-2-2-3.7-3.6-4.9c1.7-2.7,3.2-8,3.6-9.4l14.1-1.8L49.6,31.8z M24.4,16.4L25.6,27
                                c-3.9,0.5-7.2,3.3-8.4,7L6.1,32.3L5,22c3.7-0.2,6.4-1.4,8.2-3.6c1.6-1.9,2-4.2,2.1-5.9L24.4,16.4z M3.2,7.4l11.2,4.7
                                c0,1.6-0.4,3.8-1.9,5.7c-1.6,1.9-4.1,3-7.5,3.2L3.2,7.4z M3.1,58l2.7-23.1l10.9,1.7c0,0.2,0,0.3,0,0.5c0,2.4,0.8,4.6,2.2,6.4
                                L13.2,48l-1.8,11.5L3.1,58z M24.4,62l-12-2.3l1.7-11.1l5.4-4.3c1.7,1.7,3.9,2.9,6.4,3.1L24.4,62z M18.7,37.1c0-4.5,3.7-8.2,8.2-8.2
                                c4.5,0,8.2,3.7,8.2,8.2c0,4.5-3.7,8.2-8.2,8.2C22.4,45.4,18.7,41.7,18.7,37.1L18.7,37.1z M27.3,62.5l-0.2,0l1.6-15.2
                                c4.9-0.8,8.6-5,8.6-10.1c0-0.3,0-0.5,0-0.8l12.7-1.9l1.1,10.8c-5.6,0.3-9.7,2-12.3,5.1c-3.1,3.7-3.2,8.3-3,10.6L27.3,62.5z
                                 M36.6,60.7c-0.1-2.2,0.1-6.4,2.8-9.7c2.4-2.9,6.4-4.5,11.7-4.8l1.1,11.5L36.6,60.7z M53.3,18.3l21.5,5.4l-1.3,10.2l-21.3-2.6
                                L53.3,18.3z M70.6,42.7l-9.8-1.2L62.6,59l-7.9-1.7L52.5,34l0.2,0l20.6,2.6l3,25.6l-12.7-2.9l-1.7-16.5l8.7,1L70.6,42.7z M70.6,42.7
                                ">
                            </path>
                        </g>
                    </svg>
                            </div>
                            <a href="#" class="btn btn-normal btn-black btn-hover-black">Найти  магазин</a>
                        </div>

                    </section>
                    <section class="description-main white-text left-padding section-padding">
                        <h4 class="title-h3 section-title-h3">Рассылка</h4>
                        <div class="description-main__content">
                            <p>Подпишитесь на расылку наших новостей и обзоров и получайте первыми новую информацию о наших товарах</p>
                            <br>
                            <div class="description-main-form">
                                <form action="#">
                                    <fieldset class="custom-input custom-input--gray">
                                        <label for="f-1">Ваше имя</label>
                                        <input type="text" id="f-1" placeholder="Введите ваше имя">
                                    </fieldset>
                                    <fieldset class="custom-input custom-input--gray">
                                        <label for="f-2">E-mail</label>
                                        <input type="email" id="f-2" placeholder="Введите ваш электронный адрес">
                                    </fieldset>
                                    <fieldset>
                                        <input type="submit" class="btn btn-normal btn-hover-normal btn-inverse" value="Подписаться">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


</div>


<?php include_once "parts/footer.php" ?>

<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>


<script>
    function initMap() {
        var image = 'http://front.webvision.in.ua/m-tac/img/jpeg_files/picker.png';
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 50.4434022, lng: 30.5202183},
            scrollwheel: false,
            zoom: 13
        });
        var marker = new google.maps.Marker({
            map: map,
            position: map.getCenter(),
            icon: image
        });

        if(document.documentElement.clientWidth < 768){
            map.panBy(0, 0);
        } else {
            map.panBy(-200, 0);
        }

    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUXKVYkyQErp_WoaAk24K9diLh7ShZu28&callback=initMap"
        async defer></script>

</body>
</html>