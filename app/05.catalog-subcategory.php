<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

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
        <?php include_once "parts/filter.php" ?>
    </div>
    <div class="right-block">
        <p class="catalog-subcategory-title uk-text-uppercase">Подкатегории</p>
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
        <div class="catalog-more-link">
            <a href="#" class="text-bold uk-text-uppercase">еще</a>
        </div>
        <div class="pagination-block">
            <ul class="pagination">
                <li class="pagination__left disabled"><a href="#"></a></li>
                <li class="active disabled"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><span>...</span></li>
                <li><a href="#">18</a></li>
                <li class="pagination__right"><a href="#"></a></li>
            </ul>
        </div>
        <div class="text-page">
            <div class="seo-text">
                <h4>Бренд m-tac</h4>
                <p>Создание бренда М-Тас (Militarist Тactical) - новый шаг в развитии ТМ «Милитарист». Имея десятилетний
                    опыт работы с полевым и тактическим снаряжением, компания объединила усилия украинских и зарубежных
                    производителей для создания качественного снаряжения, полевой формы, обуви и аксессуаров. Одним из
                    главных приоритетов при создании продукции бренда М-Тас является поиск оптимального сочетания цены и
                    качества товара.</p>
                <p>Наши сотрудники обладают большим опытом, как в продаже снаряжения, так и в его использовании не только в
                    экстремальных туристических походах и тактических играх, но и во время непосредственного участия в
                    боевых действиях в зоне АТО. Серьезный подход к разработке каждой модели: проведение многократных
                    тестов, оптимизация дизайна модели для повышения ее функциональности, а также работа напрямую с
                    производстом для улучшенного контроля качества — все это позволяет нам создавать интересные модели
                    снаряжения и тактической одежды, при их очень умеренной стоимости.</p>
            </div>
        </div>
    </div>
</div>

<?php include_once "parts/footer.php" ?>

<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>