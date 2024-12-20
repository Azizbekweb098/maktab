@extends('navbar-section.navbar')

@section('navbar')
            <!-- Header Nav End -->

            <!-- Image Header Start-->
            <div class="mainContent withImage">
                <div class="imageHeader" style="padding-bottom: 0px;">
                    <div class="container">
                        <h1 class="pageTitle text-dark">Rahbariyat</h1>
                        <nav aria-label="breadcrumb">
                            <ol id="w5" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                                <li class="breadcrumb-item " aria-current="page">Rahbariyat</li>
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
            <div class="leaderShip">

                <!-- Direktor -->
            @foreach ($rahbariyat as $rah )
            <div class="container">
                <a href="leaderShipDetail.html" class="mainLeader">
                    <td><img src="{{ asset('images/' . $rah->image) }}" width="100"></td>
                    <div class="details">
                        <h1><b>{{ $rah->lastname }}</b><br>{{ $rah->name }}<br></h1>
                        <span>Maktab direktori</span>
                    </div>
                </a>
            </div>

            @endforeach
                <hr class="sections__line">

                <!-- ZAM Direktors -->
                <div class="container deputy_director">
                    <div class="row">
                    @foreach ($zamD as $zam )
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="leaderShipDetail.html" class="deputy_director-main">
                            <img src="{{ asset('images/' . $zam->image) }}" width="60%" alt="Zam Director">
                            <div class="deputy_director-details">
                                <h1><b>{{ $zam->lastname }}</b><br>{{ $zam->name }}<br></h1>
                                <span>Zam direktor</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @foreach ($manaviyat as $man )
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="leaderShipDetail.html" class="deputy_director-main">
                            <img src="{{ asset('images/' . $man->image) }}" width="60%" alt="Zam Director">
                            <div class="deputy_director-details">
                                <h1><b>{{ $man->lastname }}</b><br>{{ $man->name }}<br></h1>
                                <span>Manaviyatchi</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @foreach ($bolim as $zam )
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="leaderShipDetail.html" class="deputy_director-main">
                            <img src="{{ asset('images/' . $zam->image) }}" width="60%" alt="Zam Director">
                            <div class="deputy_director-details">
                                <h1><b>{{ $zam->lastname }}</b><br>{{ $zam->name }}<br></h1>
                                <span>Bolim Boshligi</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @foreach ($yoshlar as $zam )
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="leaderShipDetail.html" class="deputy_director-main">
                            <img src="{{ asset('images/' . $zam->image) }}" width="60%" alt="Zam Director">
                            <div class="deputy_director-details">
                                <h1><b>{{ $zam->lastname }}</b><br>{{ $zam->name }}<br></h1>
                                <span>Yoshlar yetakchisi</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection