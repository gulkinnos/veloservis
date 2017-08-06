<html><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Фотогалерея мастерской velo-servis.ru">
        <title>Фотогалерея мастерской velo-servis.ru</title>
        <link rel="shortcut icon" href="http://velo-servis.ru/favicon.ico" type="image/x-icon">
        <link href="/resources/css/bootstrap.min.css" rel="stylesheet">
        <link href="/resources/css/custom.css" rel="stylesheet">
        <link href="/resources/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/resources/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
        <script src="/resources/js/jquery-3.1.1.min.js"></script>
        <script src="/resources/js/bootstrap.min.js"></script>
        <script src="/resources/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
        <script> $(document).ready(function () {
                $(".owl-carousel").owlCarousel({
                    items: 4,
                    dots: true,
                    nav: true,
                    navText: ["туда", "сюда"],
                    margin: 20,
                    dotsEach: true,
                    loop: true,
                    autoplay: true,
                    smartSpeed: 1000,
                    autoplayTimeout: 2000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
            });
        </script>
    </head>
    <body>
        <div class="col-xs-12">
            <div class="top-menu-block row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid"> 
                        <div class="navbar-header">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="/">Главная</a>
                                </li>
                                <li>
                                    <a href="/about.php">О нас</a>
                                </li>
                                <li>
                                    <a href="/contacts.php">Контакты</a>
                                </li>
                                <li>
                                    <a href="/prices.php">Стоимость услуг</a>
                                </li>
                                <li class="active">
                                    <a>Фотогалерея</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <h1 align="center">Фотогалерея мастерской velo-servis.ru</h1>
            <div class="col-xs-12" id="resultsWrapper">
                <div class="owl-carousel owl-theme results">
                    <?php
                    $pictures = glob($_SERVER['DOCUMENT_ROOT'] . '/resources/images/results/*.jpg');
                    foreach ($pictures as $picture) {
                        ?><div class="pic"><img src="resources/images/results/<?php echo basename($picture); ?>" title="<?php echo basename($picture); ?>" alt="<?php echo basename($picture); ?>"></div><?php
                        }
                        ?>
                </div>
                <p>Если у вас возникли вопросы, звоните по телефону <br>+7 (495) 664-35-46</p>
                <p>Наш адрес: Москва, Школьная улица, 23<br>
                    <a href="https://yandex.ru/maps/213/moscow/?source=wizbiz_new_map_single&text=Velo-servis.ru&ll=37.671828%2C55.745667&sll=37.671828%2C55.745667&z=17&sspn=0.016158%2C0.004805&mode=search&ol=biz&oid=156701208291&sctx=CQAAAAEAs02aainWQkCLqMIpbN9LQADg%2F%2F%2Bfi4A%2FAEAebJKuYz8AAAAABQAAAAAAAAABVgt%2BMVnMchnb1gEAAQAAgD8AAAAAAAAAAAIAAABydQ%3D%3D" target="_blank">
                        Мы на Яндекс.Картах                
                    </a>
                </p>
            </div>
    </body>
</html>
