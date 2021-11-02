<?php

include('functions.php');

include('languages.php');

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Avtouzbegim - <?php echo $lang['title']; ?></title>

    <!-- Meta Data -->
    <meta name="description" content="<?php echo $lang['meta_description']; ?>">
    <meta name="keywords" content="прокат авто в ташкенте, аренда авто в ташкенте, аренда автомобилей в ташкенте, прокат автомобилей в ташкенте, аренда машин в ташкенте, авто в ташкенте, car rental in tashkent, rent car in uzbekistan, rent a car in tashkent uzbekistan, car rental tashkent airport, rent a car in uzbekistan">

    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo getUrl('', true); ?>" />
    <meta property="og:image" content="<?php echo getUrl('/og_image.png'); ?>" />
    <meta property="og:title" content="Avtouzbegim - <?php echo $lang['title']; ?>" />
    <meta property="og:description" content="<?php echo $lang['meta_description']; ?>" />

    <!-- SEO Data -->
    <link href="<?php echo getUrl('', true); ?>" rel="canonical">
    <link href="<?php echo getUrl(); ?>" hreflang="ru-RU" rel="alternate">
    <link href="<?php echo getUrl('/en/'); ?>" hreflang="en-US" rel="alternate">

    <!-- Viewport Config -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" title="Avtouzbegim" type="image/ico" href="<?php echo getUrl('/favicon.ico'); ?>"/>

    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon-precomposed" title="Avtouzbegim" sizes="144x144" href="<?php echo getUrl('/apple-touch-icon-144x144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" title="Avtouzbegim" sizes="114x114" href="<?php echo getUrl('/apple-touch-icon-114x114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" title="Avtouzbegim" sizes="72x72" href="<?php echo getUrl('/apple-touch-icon-72x72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" title="Avtouzbegim" href="<?php echo getUrl('/apple-touch-icon-precomposed.png'); ?>">

    <!-- Additional Styles -->
    <link rel="stylesheet" href="<?php echo getUrl('/css/font-awesome.min.css'); ?>">

    <!-- Main Styles (Required) -->
    <link rel="stylesheet" href="<?php echo getUrl('/css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php echo getUrl('/css/style.css'); ?>">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-offset="80" data-target=".header_nav_wrap">

<!-- BEGIN .header -->
<header class="header" role="banner">
    <div class="container">
        <div class="header_col __left">
            <a href="tel:+998935744545" class="header_phone">
                <i class="fa fa-phone-square"></i>
                +99893 <span>574 45 45</span>
            </a>
        </div>

        <div class="header_col __right">
            <nav class="header_nav_wrap">
                <ul class="header_nav nav">
                    <li class="hidden">
                        <a href="#home"><?php echo $lang['menu_home']; ?></a>
                    </li>
                    <li>
                        <a href="#cars" data-smoothScroll-anchor="#cars"><?php echo $lang['menu_cars']; ?></a>
                    </li>
                    <li>
                        <a href="#about" data-smoothScroll-anchor="#about"><?php echo $lang['menu_about']; ?></a>
                    </li>
                    <!--<li>
                            <a><?php /*echo $lang['menu_transfer']; */?></a>
                        </li>
                        <li>
                            <a><?php /*echo $lang['menu_terms']; */?></a>
                        </li>-->
                    <li>
                        <a href="#contacts" data-smoothScroll-anchor="#contacts"><?php echo $lang['menu_contacts']; ?></a>
                    </li>
                </ul>
                <ul class="header_lang">
                    <?php if($_SESSION['lang'] === 'en') { ?>
                        <li class="active">En</li>
                    <?php } else { ?>
                        <li>
                            <a href="<?php echo getUrl('/en/'); ?>">En</a>
                        </li>
                    <?php } ?>

                    <?php if($_SESSION['lang'] === 'ru') { ?>
                        <li class="active">Ru</li>
                    <?php } else { ?>
                        <li><a href="<?php echo getUrl(); ?>">Ru</a></li>
                    <?php } ?>
                </ul>
            </nav>
            <button class="menu-toggle" data-widget="navToggle" data-navtoggle-target=".header_nav_wrap">
                <i class="fa fa-navicon"></i>
            </button>
        </div>
    </div>
</header>
<!-- END .header -->

<!-- BEGIN .section -->
<section id="home" class="section __home">
    <div class="container">
        <div class="section_col">
            <h1 class="logo">Avtouzbegim - <?php echo $lang['logo']; ?></h1>

            <form class="booking-form" action="sendMail.php" method="post">
                <div class="booking-form_head">
                    <h3><?php echo $lang['booking_title']; ?></h3>
                </div>
                <div class="booking-form_body">
                    <fieldset class="form-field">
                        <div class="form-control">
                            <input type="text" name="name" placeholder="<?php echo $lang['booking_name']; ?>"/>
                        </div>
                    </fieldset>
                    <fieldset class="form-field">
                        <div class="form-control">
                            <input type="tel" name="phone" placeholder="<?php echo $lang['booking_phone']; ?>"/>
                        </div>
                    </fieldset>
                    <fieldset class="form-field">
                        <div class="form-control">
                            <input type="email" name="email" placeholder="<?php echo $lang['booking_email']; ?>"/>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="form-control">
                            <i class="fa fa-calendar"></i>
                            <input type="text" name="start-time" data-widget="datePicker" data-datepicker-locale="<?php echo $_SESSION['lang']; ?>" placeholder="<?php echo $lang['booking_start']; ?>"/>
                        </div>
                        <div class="form-control">
                            <i class="fa fa-calendar"></i>
                            <input type="text" name="end-time" data-widget="datePicker" data-datepicker-locale="<?php echo $_SESSION['lang']; ?>" placeholder="<?php echo $lang['booking_end']; ?>"/>
                        </div>
                    </fieldset>
                    <fieldset class="form-field">
                        <div class="form-control">
                            <i class="fa fa-chevron-down"></i>
                            <select name="car">
                                <option value=""><?php echo $lang['booking_car']; ?></option>
                                <option value="Chevrolet Malibu (<?php echo $lang['transmission_auto']; ?>)">Chevrolet Malibu (<?php echo $lang['transmission_auto']; ?>)</option>
                                <option value="Chevrolet Captiva 3 (<?php echo $lang['transmission_auto']; ?>)">Chevrolet Captiva 3 (<?php echo $lang['transmission_auto']; ?>)</option>
                                <option value="Chevrolet Captiva 2 (<?php echo $lang['transmission_auto']; ?>)">Chevrolet Captiva 2 (<?php echo $lang['transmission_auto']; ?>)</option>
                                <option value="Chevrolet Epica (<?php echo $lang['transmission_auto']; ?>)">Chevrolet Epica (<?php echo $lang['transmission_auto']; ?>)</option>
                                <option value="Chevrolet Lacetti (<?php echo $lang['transmission_auto']; ?>)">Chevrolet Lacetti (<?php echo $lang['transmission_auto']; ?>)</option>
                                <option value="Chevrolet Lacetti (<?php echo $lang['transmission_manual']; ?>)">Chevrolet Lacetti (<?php echo $lang['transmission_manual']; ?>)</option>
                                <option value="Chevrolet Cobalt (<?php echo $lang['transmission_manual']; ?>)">Chevrolet Cobalt (<?php echo $lang['transmission_manual']; ?>)</option>
                                <option value="Chevrolet Nexia (<?php echo $lang['transmission_manual']; ?>)">Chevrolet Nexia (<?php echo $lang['transmission_manual']; ?>)</option>
                                <option value="Chevrolet Spark (<?php echo $lang['transmission_manual']; ?>)">Chevrolet Spark (<?php echo $lang['transmission_manual']; ?>)</option>
                                <option value="Chevrolet Matiz (<?php echo $lang['transmission_manual']; ?>)">Chevrolet Matiz (<?php echo $lang['transmission_manual']; ?>)</option>
                            </select>
                        </div>
                    </fieldset>

                    <!--<p class="booking-form_note"><?php /*echo $lang['booking_note']; */?></p>-->
                </div>
                <div class="booking-form_footer">
                    <button class="btn" type="submit"><?php echo $lang['booking_btn']; ?></button>
                </div>
            </form>
        </div>
        <div class="section_text">
            <div class="booking-promo">
                <h2><?php echo $lang['promo_title']; ?></h2>
                <h3><?php echo $lang['promo_text']; ?></h3>
            </div>
        </div>
    </div>
</section>
<!-- END .section -->

<!-- BEGIN .section -->
<section id="cars" class="section __gray">
    <div class="section_head">
        <span class="connector __top __black"></span>
        <h1><?php echo $lang['title_cars']; ?></h1>
        <span class="connector __bottom __gray"></span>
    </div>
    <div class="section_body __gray">
        <div class="container">
            <ul class="cars-list">
                <li class="cars-list_item">
                    <div class="car">
                        <figure class="car_img">
                            <img src="<?php echo getUrl('/img/src/malibu.jpg'); ?>" width="240" height="180" alt="Chevrolet Malibu"/>
                        </figure>
                        <div class="car_caption">
                            <h4 class="car_name">Chevrolet Malibu</h4>
                            <p class="car_price-label">
                                <?php echo $lang['starting_at']; ?> <span class="car_price">250 000</span> <?php echo $lang['currency']; ?> / <span class="car_time-limit"><?php echo $lang['time_limit']; ?></span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="cars-list_item">
                    <div class="car">
                        <figure class="car_img">
                            <img src="<?php echo getUrl('/img/src/captiva3.jpg'); ?>" width="240" height="180" alt="Chevrolet Captiva 3"/>
                        </figure>
                        <div class="car_caption">
                            <h4 class="car_name">Chevrolet Captiva 3</h4>
                            <p class="car_price-label">
                                <?php echo $lang['starting_at']; ?> <span class="car_price">220 000</span> <?php echo $lang['currency']; ?> / <span class="car_time-limit"><?php echo $lang['time_limit']; ?></span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="cars-list_item">
                    <div class="car">
                        <figure class="car_img">
                            <img src="<?php echo getUrl('/img/src/captiva2.jpg'); ?>" width="240" height="180" alt="Chevrolet Captiva 2"/>
                        </figure>
                        <div class="car_caption">
                            <h4 class="car_name">Chevrolet Captiva 2</h4>
                            <p class="car_price-label">
                                <?php echo $lang['starting_at']; ?> <span class="car_price">175 000</span> <?php echo $lang['currency']; ?> / <span class="car_time-limit"><?php echo $lang['time_limit']; ?></span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="cars-list_item">
                    <div class="car">
                        <figure class="car_img">
                            <img src="<?php echo getUrl('/img/src/epica.jpg'); ?>" width="240" height="180" alt="Chevrolet Epica"/>
                        </figure>
                        <div class="car_caption">
                            <h4 class="car_name">Chevrolet Epica</h4>
                            <p class="car_price-label">
                                <?php echo $lang['starting_at']; ?> <span class="car_price">125 000</span> <?php echo $lang['currency']; ?> / <span class="car_time-limit"><?php echo $lang['time_limit']; ?></span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="cars-list_item">
                    <div class="car">
                        <figure class="car_img">
                            <img src="<?php echo getUrl('/img/src/lacetti.jpg'); ?>" width="240" height="180" alt="Chevrolet Lacetti"/>
                        </figure>
                        <div class="car_caption">
                            <h4 class="car_name">Chevrolet Lacetti</h4>
                            <p class="car_price-label">
                                <?php echo $lang['starting_at']; ?> <span class="car_price">110 000</span> <?php echo $lang['currency']; ?> / <span class="car_time-limit"><?php echo $lang['time_limit']; ?></span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="cars-list_item">
                    <div class="car">
                        <figure class="car_img">
                            <img src="<?php echo getUrl('/img/src/cobalt.jpg'); ?>" width="240" height="180" alt="Chevrolet Cobalt"/>
                        </figure>
                        <div class="car_caption">
                            <h4 class="car_name">Chevrolet Cobalt</h4>
                            <p class="car_price-label">
                                <?php echo $lang['starting_at']; ?> <span class="car_price">100 000</span> <?php echo $lang['currency']; ?> / <span class="car_time-limit"><?php echo $lang['time_limit']; ?></span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="cars-list_item">
                    <div class="car">
                        <figure class="car_img">
                            <img src="<?php echo getUrl('/img/src/nexia.jpg'); ?>" width="240" height="180" alt="Chevrolet Nexia"/>
                        </figure>
                        <div class="car_caption">
                            <h4 class="car_name">Chevrolet Nexia</h4>
                            <p class="car_price-label">
                                <?php echo $lang['starting_at']; ?> <span class="car_price">90 000</span> <?php echo $lang['currency']; ?> / <span class="car_time-limit"><?php echo $lang['time_limit']; ?></span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="cars-list_item">
                    <div class="car">
                        <figure class="car_img">
                            <img src="<?php echo getUrl('/img/src/spark.jpg'); ?>" width="240" height="180" alt="Chevrolet Spark"/>
                        </figure>
                        <div class="car_caption">
                            <h4 class="car_name">Chevrolet Spark</h4>
                            <p class="car_price-label">
                                <?php echo $lang['starting_at']; ?> <span class="car_price">80 000</span> <?php echo $lang['currency']; ?> / <span class="car_time-limit"><?php echo $lang['time_limit']; ?></span>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- END .section -->

<!-- BEGIN .section -->
<section id="about" class="section __about">
    <div class="section_head">
        <span class="connector __top __gray"></span>
        <h1><?php echo $lang['title_about']; ?></h1>
        <span class="connector __bottom __black"></span>
    </div>
    <div class="section_body">
        <div class="container">
            <div class="about">
                <h3>OOO Avtouzbegim</h3>
                <div class="about_row">
                    <div class="about_col">
                        <p>Одна из наибольших и самая опытная компания на рынке Республики Узбекистан в бизнесе операционного проката автомобилей, начавшая свою деятельность с 2010 года. Мы имеем автопарк автомобилей марки
                            <a href="http://chevrolet.uz/" target="_blank">GM Uzbekistan</a> предоставляя более 12 видов автомобилей.</p>
                        <p>Мы горды тем, что можем предоставить весь спектр услуг, связанных с транспортом. Мы можем предоставлять авто в аренду как частным, так и юридическим лицам, для которых такая аренда – отличный способ мотивации персонала, отвечающего за продажи и развитие бизнеса. Мы также предоставляем автомобили с водителем, как на краткосрочной основе (днем или ночью, будние, выходные или праздники, встречи в аэропорту и т.д.), так и на длительные периоды времени.</p>
                        <p>AVTOUZBEGIM гарантирует Вам привлекательные цены и первоклассный сервис. Стоимость аренды автомобилей зависит от модели, тарифа и срока. К вашим услугам автопарк, который состоит из эконом, среднего, бизнес класса. Все автомашины в превосходном техническом состоянии. Мы гарантируем отсутствие необоснованных штрафов, поборов, скрытых наценок и комиссий.</p>
                    </div>
                    <div class="about_col">
                        <p>AVTOUZBEGIM предлагает прокат авто без водителя. По желанию вы можете заказать машину с водителем. Наш большой опыт и безупречная репутация – залог качественного предоставления услуг! Безусловное преимущество компании — индивидуальный подход к каждому нашему клиенту, гибкое формирование стоимости услуг. Все авто застрахованы ОСАГО и КАСКО, регулярно проходят техническое обслуживание и оборудованы всем необходимым, чтобы доставить вам только положительные эмоции. Выдача машин и оформление всех необходимых документов занимает минимально возможное количество времени.</p>
                        <p>Мобильность и свобода перемещений, вне зависимости от обстоятельств – ключ к свободе человека в огромном городе! Мы работаем без перерывов и выходных.</p>
                        <p>Звоните сейчас по телефону +99893 574-45-45,  +998 98 312-43-45  в удобное для вас время, мы договоримся!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pattern"></div>
    </div>
</section>
<!-- END .section -->

<!-- BEGIN .section -->
<section class="section">
    <div class="section_head">
        <span class="connector __top __black"></span>
        <h1><?php echo $lang['title_advantages']; ?></h1>
        <span class="connector __bottom __red"></span>
    </div>
    <div class="section_body">
        <div class="container">
            <ul class="advantages">
                <li class="advantages_item">
                    <div class="advantage __left">
                        <div class="advantage_ico">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="advantage_body">
                            <h3>Доступные цены</h3>
                            <p>Мы предлагаем одни из лучших цен на аренду автомобилей в Ташкенте</p>
                        </div>
                    </div>
                    <div class="advantage __right">
                        <div class="advantage_ico">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="advantage_body">
                            <h3>Только новые автомобили</h3>
                            <p>В Вашем распоряжении самый большой автопарк в Ташкенте</p>
                        </div>
                    </div>
                </li>
                <li class="advantages_item">
                    <div class="advantage __left">
                        <div class="advantage_ico">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="advantage_body">
                            <h3>Для юридических лиц</h3>
                            <p>Спец. условия по прокату автомобилей для юридически лиц</p>
                        </div>
                    </div>
                    <div class="advantage __right">
                        <div class="advantage_ico">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="advantage_body">
                            <h3>Предоставление автомобиля в день обращения</h3>
                            <p>Выбранный вами автомобиль в любое удобное для вас время</p>
                        </div>
                    </div>
                </li>
                <li class="advantages_item">
                    <div class="advantage __left">
                        <div class="advantage_ico">
                            <i class="fa fa-file-text-o"></i>
                        </div>
                        <div class="advantage_body">
                            <h3>Минимальный комплект документов</h3>
                            <p>Все что потребуется для оформления это паспорт и водительское удостоверение</p>
                        </div>
                    </div>
                    <div class="advantage __right">
                        <div class="advantage_ico">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="advantage_body">
                            <h3>Любая форма оплаты</h3>
                            <p>Наличный и безналичный расчет а так же Uzcard, Duet и Visa</p>
                        </div>
                    </div>
                </li>
                <li class="advantages_item">
                    <div class="advantage __left">
                        <div class="advantage_ico">
                            <i class="fa fa-expand"></i>
                        </div>
                        <div class="advantage_body">
                            <h3>Дополнительное оборудование</h3>
                            <p>Широкий выбор дополнительного оборудования. Детские кресла, GPS навигаторы, Hands Free</p>
                        </div>
                    </div>
                    <div class="advantage __right">
                        <div class="advantage_ico">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="advantage_body">
                            <h3>Авто Страхование</h3>
                            <p>Все авто полностью застрахованы на условиях ОСАГО, КАСКО</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- END .section -->

<!-- BEGIN .section -->
<section id="contacts" class="section __contacts">
    <div class="section_head">
        <span class="connector __top __red"></span>
        <h1><?php echo $lang['title_contacts']; ?></h1>
        <span class="connector __bottom __gray"></span>
    </div>
    <div class="section_body">
        <div class="container">
            <div class="contacts">
                <h3 class="contacts_head"><?php echo $lang['contacts_title']; ?></h3>
                <ul class="contacts_list">
                    <li>
                        <i class="fa fa-phone-square"></i>
                        <p>+998 93 574-45-45 <br> +998 98 312-43-45</p>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:avtoprokatuz@mail.ru">avtoprokatuz@mail.ru</a></p>
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>
                        <p><?php echo $lang['contacts_schedule']; ?></p>
                    </li>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <p><?php echo $lang['contacts_address']; ?></p>
                    </li>
                </ul>
                <ul class="socials">
                    <li>
                        <a href="https://www.facebook.com/pages/Прокат-Авто-Ташкент/315832078627578" target="_blank" class="socials_ico">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="socials_ico">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="socials_ico">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contacts_map" data-widget="gmap3" data-gmap3-lat="41.325779" data-gmap3-lng="69.274571"></div>
        </div>
    </div>
</section>
<!-- END .section -->

<footer class="footer">
    <p class="footer_copy">Copyright &copy; Avtouzbegim 2011-2015</p>
</footer>

<!-- jQuery (Required) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo getUrl('/js/jquery/jquery.js'); ?>"><\/script>')</script>

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<!-- jQuery Plugins -->
<script src="<?php echo getUrl('/js/jquery/plugins/gmap3.min.js'); ?>"></script>
<script src="<?php echo getUrl('/js/jquery/plugins/bootstrap-scrollspy.js'); ?>"></script>
<script src="<?php echo getUrl('/js/jquery/plugins/jquery.pickmeup.min.js'); ?>"></script>

<!-- Main Scripts (Required) -->
<script src="<?php echo getUrl('/js/application.js'); ?>"></script>
<script src="<?php echo getUrl('/js/scripts.js'); ?>"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31736456 = new Ya.Metrika({
                    id:31736456,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31736456" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
