<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>


<div class="container">
    <div class="store-location">
        <h3 class="store-location__title">Найти магазин</h3>
       <div class="store-location__map">
           <div class="store-location-navigate">
               <form action="#" method="post" id="map-navigate" class="store-location-navigate__form">
                   <fieldset class="store-location-navigate__form--select">
                       <label for="select">Выберите город:</label>
                       <div class="custom-select-wrapper">
                           <select name="" id="select" class="custom-select">
                               <option value="Киев">Киев</option>
                               <option value="Львов">Львов</option>
                           </select>
                       </div>

                   </fieldset>
                   <fieldset class="store-location-navigate__form--submit">
                       <input type="submit" value="Показать" class="btn btn-accent btn-hover-light">
                   </fieldset>
               </form>
               <div class="store-location-navigate__link">
                   <a href="#" class="btn btn-normal btn-black btn-hover-normal">купить в интернете</a>
               </div>
           </div>
           <div class="store-location-position">
               <div id="map" class="location-map"></div>
               
               <div class="store-location-modals">
                   <div id="Kiev-Store-1-modal" class="store-location-modals__item">
                       <a href="#" role="button" class="uk-close store-location-modals__item--close"></a>
                       <div class="store">
                           <div class="store__image">
                               <a href="#">
                                   <img src="img/jpeg_files/shop-3.jpg" alt="shop" width="324" height="212">
                               </a>
                           </div>
                           <p class="store__title">Милитарист</p>
                           <p class="store__address">г. Киев, ст.м. Выдубичи, ул. Инженерная, 1,
                               ТЦ «Фуршет», 2 этаж</p>
                           <ul class="store__prop">
                               <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                               <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                               <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                           </ul>
                       </div>
                   </div>

                   <div id="Kiev-Store-2-modal" class="store-location-modals__item">
                       <a href="#" role="button" class="uk-close store-location-modals__item--close"></a>
                       <div class="store">
                           <div class="store__image">
                               <a href="#">
                                   <img src="img/jpeg_files/shop-2.jpg" alt="shop" width="324" height="212">
                               </a>
                           </div>
                           <p class="store__title">Милитарист</p>
                           <p class="store__address">г. Киев ул. Старовокзальна 23</p>
                           <ul class="store__prop">
                               <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                               <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                               <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                           </ul>
                       </div>
                   </div>

                   <div id="Kiev-Store-3-modal" class="store-location-modals__item">
                       <a href="#" role="button" class="uk-close store-location-modals__item--close"></a>
                       <div class="store">
                           <div class="store__image">
                               <a href="#">
                                   <img src="img/jpeg_files/shop-1.jpg" alt="shop" width="324" height="212">
                               </a>
                           </div>
                           <p class="store__title">Милитарист</p>
                           <p class="store__address">г. Киев
                               ТЦ «Фуршет», 2 этаж</p>
                           <ul class="store__prop">
                               <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                               <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                               <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                           </ul>
                       </div>
                   </div>

                   <div id="Kiev-Store-4-modal" class="store-location-modals__item">
                       <a href="#" role="button" class="uk-close store-location-modals__item--close"></a>
                       <div class="store">
                           <div class="store__image">
                               <a href="#">
                                   <img src="img/jpeg_files/shop-1.jpg" alt="shop" width="324" height="212">
                               </a>
                           </div>
                           <p class="store__title">Милитарист</p>
                           <p class="store__address">г. Киев, 3
                               ТЦ «Фуршет», 2 этаж</p>
                           <ul class="store__prop">
                               <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                               <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                               <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                           </ul>
                       </div>
                   </div>
                   
               </div>
           </div>
       </div>
    </div>
    <div class="stores">
        <h3 class="store-list__title">Магазины</h3>
        <ul class="uk-grid uk-grid-small uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3">
            <li>
                <div class="store">
                    <div class="store__image">
                        <a href="#">
                            <img src="img/jpeg_files/shop-1.jpg" alt="shop" width="324" height="212">
                        </a>
                    </div>
                    <p class="store__title">Милитарист</p>
                    <p class="store__address">г. Киев, ст.м. Выдубичи, ул. Инженерная, 1,
                        ТЦ «Фуршет», 2 этаж</p>
                    <ul class="store__prop">
                        <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                        <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                        <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                    </ul>
                    <p class="store__location"><i class="store-location-picker"></i><a href="#">Посмотреть на карте</a></p>

                </div>
            </li>
            <li>
                <div class="store">
                    <div class="store__image">
                        <a href="#">
                            <img src="img/jpeg_files/shop-2.jpg" alt="shop" width="324" height="212">
                        </a>
                    </div>
                    <p class="store__title">Милитарист</p>
                    <p class="store__address">г. Киев, ст.м. Выдубичи, ул. Инженерная, 1,
                        ТЦ «Фуршет», 2 этаж</p>
                    <ul class="store__prop">
                        <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                        <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                        <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                    </ul>
                    <p class="store__location"><i class="store-location-picker"></i><a href="#">Посмотреть на карте</a></p>

                </div>
            </li>
            <li>
                <div class="store">
                    <div class="store__image">
                        <a href="#">
                            <img src="img/jpeg_files/shop-3.jpg" alt="shop" width="324" height="212">
                        </a>
                    </div>
                    <p class="store__title">Милитарист</p>
                    <p class="store__address">г. Киев, ст.м. Выдубичи, ул. Инженерная, 1,
                        ТЦ «Фуршет», 2 этаж</p>
                    <ul class="store__prop">
                        <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                        <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                        <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                    </ul>
                    <p class="store__location"><i class="store-location-picker"></i><a href="#">Посмотреть на карте</a></p>

                </div>
            </li>
            <li>
                <div class="store">
                    <div class="store__image">
                        <a href="#">
                            <img src="img/jpeg_files/shop-2.jpg" alt="shop" width="324" height="212">
                        </a>
                    </div>
                    <p class="store__title">Милитарист</p>
                    <p class="store__address">г. Киев, ст.м. Выдубичи, ул. Инженерная, 1,
                        ТЦ «Фуршет», 2 этаж</p>
                    <ul class="store__prop">
                        <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                        <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                        <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                    </ul>
                    <p class="store__location"><i class="store-location-picker"></i><a href="#">Посмотреть на карте</a></p>

                </div>
            </li>
            <li>
                <div class="store">
                    <div class="store__image">
                        <a href="#">
                            <img src="img/jpeg_files/shop-1.jpg" alt="shop" width="324" height="212">
                        </a>
                    </div>
                    <p class="store__title">Милитарист</p>
                    <p class="store__address">г. Киев, ст.м. Выдубичи, ул. Инженерная, 1,
                        ТЦ «Фуршет», 2 этаж</p>
                    <ul class="store__prop">
                        <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                        <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                        <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                    </ul>
                    <p class="store__location"><i class="store-location-picker"></i><a href="#">Посмотреть на карте</a></p>

                </div>
            </li>
            <li>
                <div class="store">
                    <div class="store__image">
                        <a href="#">
                            <img src="img/jpeg_files/shop-3.jpg" alt="shop" width="324" height="212">
                        </a>
                    </div>
                    <p class="store__title">Милитарист</p>
                    <p class="store__address">г. Киев, ст.м. Выдубичи, ул. Инженерная, 1,
                        ТЦ «Фуршет», 2 этаж</p>
                    <ul class="store__prop">
                        <li class="store__prop--link"><a href="#">militarist.ua</a></li>
                        <li class="store__prop--tel"><a href="tel:+380445457191">+38 (044) 545-71-91</a></li>
                        <li class="store__prop--mail"><a href="mailto:sales@militarist.ua">sales@militarist.ua</a></li>
                    </ul>
                    <p class="store__location"><i class="store-location-picker"></i><a href="#">Посмотреть на карте</a></p>

                </div>
            </li>
        </ul>
    </div>
</div>


<?php include_once "parts/footer.php" ?>

<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>

<script>
    var map;
    function initMap() {
        var image = 'http://front.webvision.in.ua/m-tac/img/jpeg_files/picker.png';
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 50.4434022, lng: 30.5202183},
            scrollwheel: false,
            zoom: 12
        });

        var locations = [
            [50.451571, 30.509602,'Kiev-Store-1'],
            [50.445395, 30.537497,'Kiev-Store-2'],
            [50.468510, 30.475302,'Kiev-Store-3'],
            [50.432440, 30.462599,'Kiev-Store-4'],
            [49.841411, 24.019943,'Lviw-Store-1'],
            [49.843486, 24.035994,'Lviw-Store-2'],
            [49.839169, 24.039620,'Lviw-Store-2']
        ];

        var marker;


        for (var i = 0; i < locations.length; i++) {
             marker = new google.maps.Marker({
                 map: map,
                 position: new google.maps.LatLng(locations[i][0], locations[i][1]),
                 icon: image
            });

            marker.set("id", locations[i][2]);

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    $("#"+marker.get('id')+"-modal").fadeIn('slow').siblings().fadeOut();
                }
            })(marker, i));
        }

        $('#map-navigate').submit(function (e) {
            e.preventDefault();
            var center,
                userChoice = $('#select').val();
            if(userChoice == 'Львов') {
                center = new google.maps.LatLng(49.839683,24.029717);
                map.panTo(center);
            } else if (userChoice == 'Киев') {
                center = new google.maps.LatLng(50.4434022,30.5202183);
                map.panTo(center);
            }
        });
    }





</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUXKVYkyQErp_WoaAk24K9diLh7ShZu28&callback=initMap"
        async defer></script>

</body>
</html>