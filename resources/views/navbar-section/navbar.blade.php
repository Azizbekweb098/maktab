
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Asosiy</title>

    <!-- Bootstrap core css -->
    <link rel="stylesheet" href="{{ asset('maktab/css/bootstrap.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('maktab/./css/animate.css') }}">
    <!-- Font awesome style -->
    <link rel="stylesheet" href="{{ asset('maktab/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">


    <!-- Custom style for this template -->
    <link rel="stylesheet" href="{{ asset('maktab/css/style.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset('maktab/css/responsive.css') }}">
</head>

<body>
    <!-- Header Start -->
    <header>
        <div class="bannerBox">
            <!-- Header Nav Start -->
            <div class="headerBar">
                <div class="topMainMenu">
                    <a href="/" class="topMain-logo">
                        <img src="image/Gerb.png" alt="" width="8%">
                        <p>329-sonli umumta'lim maktabi </p>
                    </a>
                    <ul>
                        <li>
                            <a href="https://vacancy.argos.uz/">Bosh ish orinlari</a>
                        </li>
                        <li>
                            <a href="schoolRules.html">Maktab qonun-qoidalar</a>
                        </li>
                        <li>
                            <a href="FAQ.html">Tez-tez beriladigan savollar </a>
                        </li>
                        <li>
                            <a href="stateSymbols.html">Davlat ramzlari</a>
                        </li>
                    </ul>
                    <div class="additionalFuntions">
                        <a href="/login" class="eye"><i class="fa-regular fa-eye text-white me-2"></i></a>
                        <a href="#" class="searchBtn text-white">|
                            <i class="fa-solid fa-magnifying-glass text-white mb-3 ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="container">
                    <div class="headerMenuBox">
                        <div class="bigMenuBtn">
                            <button type="button" class="borderedBtn">
                                <div class="menuBars"></div>
                            </button>
                            <!-- Click bolganda Brauzer chap tomondan chiqadi -->
                            <div class="overlay">
                                <div class="container">
                                    <div class="topLogoGerb">
                                        <img src="image/Gerb.png" alt="Logo" width="13%">
                                    </div>
                                    <div class="listMenu">
                                        <ul>
                                            <li><a href="#">Maktab haqida</a>
                                                <ul>
                                                    <li><a href="./maktab-pages/maktab-vazifalari.blade.php">Maktab vazifalari</a></li>
                                                    <li><a href="leaderShip.html">Rahbariyat</a></li>
                                                    <li><a href="teachers.html">O'qituvchilar</a></li>
                                                    <li><a href="rekvizit.html">Rekvizitlar</a></li>
                                                </ul>
                                            <li><a href="education.html">Ta'lim</a>
                                                <ul>
                                                    <li><a href="education.html">1-smena</a></li>
                                                    <li><a href="education.html">2-smena</a></li>
                                                    <li><a href="education.html">Qo'shimcha darslar </a></li>
                                                    <li><a href="education.html">Sport to'garaklar</a></li>
                                                </ul>
                                            <li class="overlay_li-social"><a href="schoolNews.html">Axborot markazi</a>
                                                <ul>
                                                    <li><a href="schoolNews.html">Maktab yangiliklari</a></li>
                                                    <li><a href="Gallery.html">Galeriya</a></li>
                                                    <li><a href="infoGrafika.html">Infografika</a></li>
                                                </ul>
                                        </ul>
                                        <ul class="simple">
                                            <li><a href="usefulResurs.html">Foydali resurslar</a></li>
                                            <li><a href="connect.html">Bogʻlanish</a></li>
                                        </ul>
                                    </div>
                                    <div class="topMainMenu2">
                                        <ul>
                                            <li><a href="https://vacancy.argos.uz/">Bo'sh ish o‘rinlari</a></li>
                                            <li><a href="schoolNews.html">Maktab qonun-qoidalari</a></li>
                                            <li><a href="FAQ.html">Tez-tez beriladigan savollar</a></li>
                                            <li><a href="stateSymbols.html">Davlat ramzlari</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- Click bolganda Brauzer chap tomondan chiqadi -->
                        </div>
                        <div class="mainMenuBox">
                            <div class="menuList">

                                <!--  -->
                                <div class="menuLine"></div>
                                <!--  -->
                                <div class="bottomMainMenu">
                                    <ul class="menu">
                                        <li>
                                            <a href="" class="">Maktab haqida</a>
                                            <ul class="menu_ul-li">
                                                <li>
                                                    <a href="{{ route('maktab-task.index') }}">Maktab vazifalari</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('maktab-rahbariyat.index') }}">Rahbariyat</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('maktab-teachers.index') }}">O'qituvchilar</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('maktab-rekvizit.index') }}">Rekvizitlar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="education.html">Ta'lim </a>
                                            <ul class="menu_ul-li">
                                                <li>
                                                    <a href="education.html">1-smena</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="education.html">2-smena</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="education.html">Qo'shimcha darslar</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="education.html">Sport to'garaklari</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="usefulResurs.html">Foydali resurslar </a>
                                        </li>
                                        <li>
                                            <a href="schoolNews.html">Axborot markazi </a>
                                            <ul class="menu_ul-li">
                                                <li>
                                                    <a href="schoolNews.html">Maktab yangiliklari</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="Gallery.html">Galeriya</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="infoGrafika.html">Infografika</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="connect.html">Boglanish </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Search Start-->
                                <form id="w2" class="mainSearchForm" action="search.html" method="get">
                                    <div class="input-group">
                                        <input type="text" id="mainSearch" class="form-control" placeholder="Izlash"
                                            name="ContentSearch">

                                        <div class="input-group-prepend">
                                            <button class="btn __searchBtn closeBtn" type="button">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>

                                </form>
                                <!-- Search End-->

                                <div class="dropdown langBar">
                                    <button class="borderedBtn" type="button" data-toggle="dropdown">O'z</button>
                                    <div id="" class="dropdown-menu-right dropdown-menu">
                                        <a class="dropdown-item active" href="/Uz">O'zbekcha</a>
                                        <a class="dropdown-item" href="/Ўзб">Ўзбекча</a>
                                        <a class="dropdown-item" href="/Ru">Русский</a>
                                        <a class="dropdown-item" href="/En">English</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->

            @yield('navbar')


    <!-- Footer Start  -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <ul class="footer_menu">
                        <li>
                            <a href="https://vacancy.argos.uz/">Bo'sh ish o'rinlari</a>
                        </li>
                        <li>
                            <a href="schoolRules.html">Maktab qonun qoidalari</a>
                        </li>
                        <li>
                            <a href="FAQ.html">Tez-tez beriladigan savollar</a>
                        </li>
                        <li>
                            <a href="stateSymbols.html">Davlat ramzlari</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_contact-left">
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                        <span>@329_maktab</span>
                    </a>
                    <a href="#">
                        <i class="fas fa-envelope"></i>
                        <span>info@maktab.uz</span>
                    </a>
                </div>
                <div class="footer_contact-right">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        <span>@329_maktab</span>
                    </a>
                    <a href="#">
                        <i class="fab fa-telegram-plane"></i>
                        <span>@239_maktab</span>
                    </a>
                </div>
                <div class="footer_logo">
                    <span>
                        <img src="{{ asset('maktab/./image/Gerb.png') }}" alt="Logo" width="20%">
                    </span>
                    <a href="">
                        329-sonli Umumta'lim maktabi
                        <i>Toshkent, Yangihayot tumani</i>
                    </a>
                </div>


                <a href="#" class="it_live-logo">
                    <img src="{{ asset('maktab/./image/It live logo for red-04-04.png') }}" alt="IT_Live" class="it_live-img">
                </a>
                <span class="year_text">
                    © 2020-2023 Barcha huquqlar himoyalangan
                </span>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

</body>

<!-- Js -->

<script src="{{ asset('maktab/js/bootstrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{ asset('maktab/js/tilt.jquery.js') }}"></script>
<script src="{{ asset('maktab/js/wow.min.js') }}"></script>
<script src="{{ asset('maktab/js/main.js') }}"></script>
<!-- Js -->







</html>