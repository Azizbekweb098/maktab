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

    <title>Maktab yangiliklari</title>

  
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
                                            <a href="{{ route('one_smena') }}">Ta'lim </a>
                                            <ul class="menu_ul-li">
                                                <li>
                                                    <a href="{{ route('one_smena') }}">1-smena</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('one_smena') }}">2-smena</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('one_smena') }}">Qo'shimcha darslar</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('one_smena') }}">Sport to'garaklari</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('foydali') }}">Foydali resurslar </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('newsm') }}">Axborot markazi </a>
                                            <ul class="menu_ul-li">
                                                <li>
                                                    <a href="{{ route('newsm') }}">Maktab yangiliklari</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('galeriya') }}">Galeriya</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('info') }}">Infografika</a>
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
            <!-- Image Header Start-->
            <div class="mainContent withImage">
                <div class="imageHeader" style="padding-bottom: 0px;">
                    <div class="container">
                        <h1 class="pageTitle text-dark">Yangiliklar</h1>
                        <nav aria-label="breadcrumb">
                            <ol id="w5" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                                <li class="breadcrumb-item " aria-current="page">Yangiliklar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Image Header End -->

        </div>
    </header>
    <!-- Header End -->

    <!-- Main section Start -->
    <main>
        <section>
            <div class="schoolNews">
                <div class="container">
                    <div class="navigationTabs">
                        <a href="/uz/news/index" class="active" data-tab="tab1">
                            <i class="fas fa-newspaper"></i> Yangiliklar
                        </a>
                        <a href="/uz/announces/index" class="" data-tab="tab2">
                            <i class="fas fa-bullhorn"></i> E'lonlar
                        </a>
                    </div>

                    <div class="tab-content">
                        <!-- Content for Yangiliklar tab -->
                        <div class="tab-pane fade active show" id="tab1">
                            <div class="imageCardBoxes">
                                <div class="row">
                             @foreach ($news as $new )
                             <div class="col-xl-4 col-lg-4 col-md-6">
                                <a href="">
                                    <div class="imageBox">
                                        <img src="{{ asset('images/' . $new->image) }}" width="100">
                                    </div>
                                    <h1>{{ $new->title }}</h1>
                                    <span>{{ $new->created_at }}</span>
                                </a>
                            </div>
                             @endforeach
                               
                                </div>
                            </div>
                        </div>
                        <!-- Content for E'lonlar tab -->
                        <div class="tab-pane fade" id="tab2">
                            <div class="imageCardBoxes">
                                <a href="">
                                    <div class="imageBox">
                                        <img src="{{ asset('images/' . $new->image) }}" width="100">
                                    </div>
                                    <h1>{{ $new->title }}</h1>
                                    <span>{{ $new->created_at }}</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->

    <!-- Footer Start  -->
    <footer>
        <div class="footer mt-5">
            <div class="container">
                <div class="row">
                    <ul class="footer_menu">
                        <li>
                            <a href="">Bo'sh ish o'rinlari</a>
                        </li>
                        <li>
                            <a href="">Maktab qonun qoidalari</a>
                        </li>
                        <li>
                            <a href="">Tez-tez beriladigan savollar</a>
                        </li>
                        <li>
                            <a href="">Davlat ramzlari</a>
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
                        <img src="./image/Gerb.png" alt="Logo" width="20%">
                    </span>
                    <a href="">
                        329-sonli Umumta'lim maktabi
                        <i>Toshkent, Yangihayot tumani</i>
                    </a>
                </div>


                <a href="#" class="it_live-logo">
                    <img src="./image/It live logo for red-04-04.png" alt="IT_Live" width="10%">
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
<!-- Js -->

<script src="{{ asset('maktab/js/bootstrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{ asset('maktab/js/tilt.jquery.js') }}"></script>
<script src="{{ asset('maktab/js/wow.min.js') }}"></script>
<script src="{{ asset('maktab/js/main.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Js -->

<!-- Js -->
<script>
    $(document).ready(function () {
        $(".searchBtn").click(function (e) {
            e.preventDefault();
            $(".mainSearchForm").toggleClass("active");
        });

        $(".closeBtn").click(function (e) {
            e.preventDefault();
            $(".mainSearchForm").removeClass("active");
        });

        const bigMenuBtn = document.querySelector('.bigMenuBtn');
        const overlay = document.querySelector('.overlay');

        bigMenuBtn.addEventListener('click', function () {
            this.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });


        $('.js-tilt').tilt({
            scale: 1.2
        })

    });
    document.addEventListener("DOMContentLoaded", function () {
        // Get all tab links inside the navigationTabs div
        const tabLinks = document.querySelectorAll(".navigationTabs a");

        // Get all tab panes
        const tabPanes = document.querySelectorAll(".tab-content .tab-pane");

        // Add click event listeners to the tab links
        tabLinks.forEach(function (tabLink) {
            tabLink.addEventListener("click", function (event) {
                event.preventDefault();

                // Remove the 'active' class from all tab links and tab panes
                tabLinks.forEach(function (link) {
                    link.classList.remove("active");
                });
                tabPanes.forEach(function (pane) {
                    pane.classList.remove("active", "show");
                });

                // Add the 'active' class to the clicked tab link and corresponding tab pane
                const targetTabId = this.getAttribute("data-tab");
                const targetTabPane = document.getElementById(targetTabId);

                if (targetTabPane) {
                    this.classList.add("active");
                    targetTabPane.classList.add("active", "show");
                }
            });
        });
    });

</script>



</html>