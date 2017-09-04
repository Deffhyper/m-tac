<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs-interactive.php" ?>

<div class="container">
    <div class="sidebar">
        <p class="sidebar-title">Категории товаров</p>
        <ul class="sidebar-list">
            <li class="sidebar-list__item"><a href="#">Новинки</a></li>
            <li class="sidebar-list__item"><a href="#">Подсумки</a></li>
            <li class="sidebar-list__item"><a href="#">Брюки</a></li>
            <li class="sidebar-list__item"><a href="#">Термобелье</a></li>
            <li class="sidebar-list__item"><a href="#">Рюкзаки</a></li>
            <li class="sidebar-list__item active"><a href="#">Обувь</a></li>
            <li class="sidebar-list__item"><a href="#">Куртки</a></li>
            <li class="sidebar-list__item"><a href="#">Футболки</a></li>
            <li class="sidebar-list__item"><a href="#">Перчатки</a></li>
            <li class="sidebar-list__item"><a href="#">Головные уборы</a></li>
        </ul>
        <p class="sidebar-title">Фильтры</p>
        <div class="sidebar-filter">
            <div class="sidebar-filter-applied">
                <div class="sidebar-filter-applied__block">
                    <p class="sidebar-filter-applied__block--title">Размер</p>
                    <ul class="sidebar-filter-applied__block--prop">
                        <li><a href="#">43</a></li>
                    </ul>
                </div>
                <div class="sidebar-filter-applied__block">
                    <p class="sidebar-filter-applied__block--title">Подошва</p>
                    <ul class="sidebar-filter-applied__block--prop">
                        <li><a href="#">Полихлорвинил</a></li>
                        <li><a href="#">Резина с полиуретаном</a></li>
                    </ul>
                </div>
            </div>
            <form action="">
                <fieldset class="sidebar-filter__item">
                    <a href="#" class="sidebar-filter__item--title open">Размер</a>
                    <div class="sidebar-filter__item--content">
                        <ul class="sidebar-two-column">
                            <li>
                                <input type="checkbox" id="f-1" class="custom-checkbox">
                                <label for="f-1">40</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-2" class="custom-checkbox">
                                <label for="f-2">41</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-3" class="custom-checkbox">
                                <label for="f-3">42</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-4" class="custom-checkbox">
                                <label for="f-4">43</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-5" class="custom-checkbox">
                                <label for="f-5">44</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-6" class="custom-checkbox">
                                <label for="f-6">45</label>
                            </li>
                        </ul>
                    </div>
                </fieldset>
                <fieldset class="sidebar-filter__item">
                    <a href="#" class="sidebar-filter__item--title open">материал</a>
                    <div class="sidebar-filter__item--content">
                        <ul class="sidebar-one-column">
                            <li>
                                <input type="checkbox" id="f-7" class="custom-checkbox">
                                <label for="f-7">Кожа</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-8" class="custom-checkbox">
                                <label for="f-8">Гидрофобний нубук</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-9" class="custom-checkbox">
                                <label for="f-9">Износоустойчивый хлопок</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-10" class="custom-checkbox">
                                <label for="f-10">Кожа Буйвола</label>
                            </li>
                        </ul>
                    </div>
                </fieldset>
                <fieldset class="sidebar-filter__item">
                    <a href="#" class="sidebar-filter__item--title open">Подошва</a>
                    <div class="sidebar-filter__item--content">
                        <ul class="sidebar-one-column">
                            <li>
                                <input type="checkbox" id="f-11" class="custom-checkbox">
                                <label for="f-11">ECO Friendly</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-12" class="custom-checkbox">
                                <label for="f-12">Полихлорвинил</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-13" class="custom-checkbox">
                                <label for="f-13">Резина с полиуретаном</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-14" class="custom-checkbox">
                                <label for="f-14">Литая</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-15" class="custom-checkbox">
                                <label for="f-15">Очень длинное название в две строки Очень длинное название в две
                                    строки</label>
                            </li>
                        </ul>
                    </div>
                </fieldset>
                <fieldset class="sidebar-filter__item">
                    <a href="#" class="sidebar-filter__item--title open">цвет</a>
                    <div class="sidebar-filter__item--content">
                        <ul class="sidebar-one-line">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #242426"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #f8f8fa"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #3e4158"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #6d6d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #aba292"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #aa9543"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #3e4158"></a>
                            </li>
                        </ul>
                    </div>
                </fieldset>

                <fieldset class="sidebar-filter__item">
                    <a href="#" class="sidebar-filter__item--title open">Цена, грн</a>
                    <div class="sidebar-filter__item--content">
                        <div class="sidebar-range">
                            <div id="slider-range"></div>
                            <div class="sidebar-range__val">
                                <div class="range-from">
                                    <input type="text" id="amount-min">
                                </div>
                                <div class="range-to">
                                    <input type="text" id="amount-max">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="sidebar-filter__item">
                    <a href="#" class="sidebar-filter__item--title">Линия одежды</a>
                    <div class="sidebar-filter__item--content" style="display: none;">
                        <ul class="sidebar-one-column">
                            <li>
                                <input type="checkbox" id="f-16" class="custom-checkbox">
                                <label for="f-16">Линия одежды 1</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-17" class="custom-checkbox">
                                <label for="f-17">Линия одежды 2</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-18" class="custom-checkbox">
                                <label for="f-18"> Линия одежды 3</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-19" class="custom-checkbox">
                                <label for="f-19">Линия одежды 4</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-20" class="custom-checkbox">
                                <label for="f-20">Линия одежды 5 Очень длинное название в две строки Очень длинное
                                    название в две строки</label>
                            </li>
                        </ul>
                    </div>
                </fieldset>
                <fieldset class="sidebar-filter__item">
                    <a href="#" class="sidebar-filter__item--title">Еще один раздел Еще один раздел Еще один раздел</a>
                    <div class="sidebar-filter__item--content" style="display: none;">
                        <ul class="sidebar-one-column">
                            <li>
                                <input type="checkbox" id="f-21" class="custom-checkbox">
                                <label for="f-21">Еще один раздел 1</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-22" class="custom-checkbox">
                                <label for="f-22">Еще один раздел 2</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-23" class="custom-checkbox">
                                <label for="f-23">Еще один раздел 3</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-24" class="custom-checkbox">
                                <label for="f-24">Еще один раздел 4</label>
                            </li>
                            <li>
                                <input type="checkbox" id="f-25" class="custom-checkbox">
                                <label for="f-25">Еще один раздел 5 Очень длинное название в две строки Очень длинное
                                    название в две строки</label>
                            </li>
                        </ul>
                    </div>
                </fieldset>
                <fieldset class="sidebar-filter__item sidebar-filter-ctrl">
                    <input class="sidebar-filter-submit btn btn-normal btn-black btn-hover-normal" type="button" value="применить">
                    <input class="sidebar-filter-reset" type="reset" value="Сбросить фильтры">
                </fieldset>
            </form>

        </div>

    </div>
    <div class="right-block">
        <ul class="catalog-subcategory">
            <li>
                <a href="#" class="catalog-subcategory__item">
                    <span class="catalog-subcategory__item--image">
                        <img src="img/jpeg_files/sub-1.jpg" alt="subcategory" width="40" height="41">
                    </span>
                    <span class="catalog-subcategory__item--title">Вьетнамки, Сандали</span>
                </a>
            </li>
            <li>
                <a href="#" class="catalog-subcategory__item">
                    <span class="catalog-subcategory__item--image">
                        <img src="img/jpeg_files/sub-2.jpg" alt="subcategory" width="42" height="44">
                    </span>
                    <span class="catalog-subcategory__item--title">Кроссовки</span>
                </a>
            </li>
            <li>
                <a href="#" class="catalog-subcategory__item">
                    <span class="catalog-subcategory__item--image">
                        <img src="img/jpeg_files/sub-3.jpg" alt="subcategory" width="39" height="42">
                    </span>
                    <span class="catalog-subcategory__item--title">Летние ботинки</span>
                </a>
            </li>
            <li>
                <a href="#" class="catalog-subcategory__item">
                    <span class="catalog-subcategory__item--image">
                        <img src="img/jpeg_files/sub-4.jpg" alt="subcategory" height="42" width="37">
                    </span>
                    <span class="catalog-subcategory__item--title">Полуботинки</span>
                </a>
            </li>
            <li>
                <a href="#" class="catalog-subcategory__item">
                    <span class="catalog-subcategory__item--image">
                        <img src="img/jpeg_files/sub-2.jpg" alt="subcategory" width="42" height="44">
                    </span>
                    <span class="catalog-subcategory__item--title">Демисезонные ботинки</span>
                </a>
            </li>
            <li>
                <a href="#" class="catalog-subcategory__item">
                    <span class="catalog-subcategory__item--image">
                        <img src="img/jpeg_files/sub-5.jpg" alt="subcategory" height="41" width="36">
                    </span>
                    <span class="catalog-subcategory__item--title">Ботинки зимние</span>
                </a>
            </li>
            <li>
                <a href="#" class="catalog-subcategory__item">
                    <span class="catalog-subcategory__item--image">
                        <img src="img/jpeg_files/sub-3.jpg" alt="subcategory" height="42" width="39">
                    </span>
                    <span class="catalog-subcategory__item--title">Кеды</span>
                </a>
            </li>
        </ul>
        <h3 class="catalog-title title-h3">Все товары “Обувь”</h3>
        <div class="catalog-sort">
            <span class="catalog-sort__label text-bold uk-text-uppercase">Сортировать: </span>
            <ul class="catalog-sort__list">
                <li class="init"><a href="#">сортировать по</a></li>
                <li class="active"><a href="#">популярные</a></li>
                <li><a href="#">по возрастанию цены</a></li>
                <li><a href="#">по убыванию цены</a></li>
            </ul>
        </div>
        <div class="catalog-list">
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <span class="goods-sticker goods-sticker-top"></span>
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-1.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">БОТИНКИ ПОЛЕВЫЕ MK.4 MULTICAM</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>23464326</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__old">
                                <span>1500</span>
                                <span>грн</span>
                            </span>
                            <span class="goods-price__current">
                                <span>945</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #242426"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #f8f8fa"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-5.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">КЕДЫ KHAKI</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>3454354356</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__current">
                                <span>599</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <span class="goods-sticker goods-sticker-news"></span>
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-6.jpg" alt="goods" width="263" height="267">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">БОТИНКИ ПОЛЕВЫЕ MK.4 MULTICAM</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>3454354356</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__old">
                                <span>1500</span>
                                <span>грн</span>
                            </span>
                            <span class="goods-price__current">
                                <span>945</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <span class="goods-sticker goods-sticker-top"></span>
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-1.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">БОТИНКИ ПОЛЕВЫЕ MK.4 MULTICAM</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>23464326</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__old">
                                <span>1500</span>
                                <span>грн</span>
                            </span>
                            <span class="goods-price__current">
                                <span>945</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #242426"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #f8f8fa"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-5.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">КЕДЫ KHAKI</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>3454354356</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__current">
                                <span>599</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <span class="goods-sticker goods-sticker-top"></span>
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-1.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">БОТИНКИ ПОЛЕВЫЕ MK.4 MULTICAM</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>23464326</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__old">
                                <span>1500</span>
                                <span>грн</span>
                            </span>
                            <span class="goods-price__current">
                                <span>945</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #242426"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #f8f8fa"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-5.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">КЕДЫ KHAKI</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>3454354356</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__current">
                                <span>599</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <span class="goods-sticker goods-sticker-top"></span>
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-1.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">БОТИНКИ ПОЛЕВЫЕ MK.4 MULTICAM</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>23464326</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__old">
                                <span>1500</span>
                                <span>грн</span>
                            </span>
                            <span class="goods-price__current">
                                <span>945</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #242426"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #f8f8fa"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-5.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">КЕДЫ KHAKI</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>3454354356</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__current">
                                <span>599</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <span class="goods-sticker goods-sticker-news"></span>
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-6.jpg" alt="goods" width="263" height="267">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">БОТИНКИ ПОЛЕВЫЕ MK.4 MULTICAM</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>3454354356</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__old">
                                <span>1500</span>
                                <span>грн</span>
                            </span>
                            <span class="goods-price__current">
                                <span>945</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <span class="goods-sticker goods-sticker-top"></span>
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-1.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">БОТИНКИ ПОЛЕВЫЕ MK.4 MULTICAM</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>23464326</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__old">
                                <span>1500</span>
                                <span>грн</span>
                            </span>
                            <span class="goods-price__current">
                                <span>945</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #242426"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #f8f8fa"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-list__item">
                <div class="goods">
                    <div class="goods-top-block">
                        <div class="goods-image">
                            <a href="#" tabindex="0">
                                <img src="img/jpeg_files/goods-5.jpg" alt="goods" width="263" height="263">
                            </a>
                        </div>
                        <div class="goods-link">
                            <a href="#" tabindex="0">КЕДЫ KHAKI</a>
                        </div>
                        <div class="goods-art">
                            <span>Артикул: <span>3454354356</span></span>
                        </div>
                    </div>
                    <div class="goods-bottom-block">
                        <div class="goods-price">
                            <span class="goods-price__current">
                                <span>599</span>
                                <span>грн</span>
                            </span>
                        </div>
                        <ul class="goods-color-select">
                            <li>
                                <a href="#" class="goods-color" style="background-color: #a99273"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color active" style="background-color: #877d74"></a>
                            </li>
                            <li>
                                <a href="#" class="goods-color" style="background-color: #50524f"></a>
                            </li>
                        </ul>
                        <ul class="goods-size-select">
                            <li>
                                <a href="#" class="goods-size">40</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size active">41</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">42</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">43</a>
                            </li>
                            <li>
                                <a href="#" class="goods-size">44</a>
                            </li>
                        </ul>
                        <div class="goods-read-more">
                            <a href="#" class="btn btn-normal btn-black btn-hover-normal" tabindex="0">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="catalog-more-link">
        <a href="#">еще</a>
    </div>


</div>

<?php include_once "parts/footer.php" ?>

<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>