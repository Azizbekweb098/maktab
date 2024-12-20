@extends('navbar-section.navbar')


@section('navbar')
   <!-- Header Nav End -->

            <!-- Image Header Start-->
            <div class="mainContent withImage">
                <div class="imageHeader" style="padding-bottom: 0px;">
                    <div class="container">
                        <h1 class="pageTitle text-dark">O'qituvchilar</h1>
                        <nav aria-label="breadcrumb">
                            <ol id="w5" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                                <li class="breadcrumb-item " aria-current="page">O'qituvchilar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Image Header End -->
            <main>
                <section>
                    <div class="teachers">
                        <!-- oliy toifali oqtuvchilar -->
                        <div class="container deputy_director">
                            <h1 class="teachers__title mini mb-4">Oliy toifali o'qituvchilar</h1>
                           @foreach ($oliy as $ol )
                           <div class="row">
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="{{ asset('images/' . $ol->image) }}" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>{{ $ol->lastname }}</b><br>{{ $ol->name }}</h1>
                                        <span>{{ $ol->ishi }}</span>
                                    </div>
                                </a>
                            </div>
                       
                        </div>
                           @endforeach
                        </div>
                        <!-- Birinchi toifali oqtuvchilar -->
                    @foreach ($birinchi as $bir)
                    <div class="container deputy_director">
                        <h1 class="teachers__title mini mb-4">Birinchi toifali o'qituvchilar</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="{{ asset('images/' . $bir->image) }}" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>{{ $bir->lastname }}</b><br>{{ $bir->name }}<br></h1>
                                        <span>{{ $bir->ishi }}</span>
                                    </div>
                                </a>
                            </div>
                         
                        </div>
                    </div>
                    @endforeach
                        <!-- Ikkinchi toifali oqtuvchilar -->
                        <div class="container deputy_director">
                            <h1 class="teachers__title mini mb-4">Ikkinchi toifali o'qituvchilar</h1>
                            <div class="row">
                                @foreach ($ikkinchi as $bir)
                                <div class="container deputy_director">
                                    <h1 class="teachers__title mini mb-4">Birinchi toifali o'qituvchilar</h1>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-6">
                                            <a href="#" class="deputy_director-main">
                                                <img src="{{ asset('images/' . $bir->image) }}" width="90%" alt="Zam Director">
                                                <div class="deputy_director-details">
                                                    <h1><b>{{ $bir->lastname }}</b><br>{{ $bir->name }}<br></h1>
                                                    <span>{{ $bir->ishi }}</span>
                                                </div>
                                            </a>
                                        </div>
                                     
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Mutaxasis toifali oqtuvchilar -->
                        <div class="container deputy_director">
                            <h1 class="teachers__title mini mb-4">Mutaxassis toifali o'qituvchilar</h1>
                            <div class="row">
                                @foreach ($muthasiz as $bir)
                                <div class="container deputy_director">
                                    <h1 class="teachers__title mini mb-4">Birinchi toifali o'qituvchilar</h1>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-6">
                                            <a href="#" class="deputy_director-main">
                                                <img src="{{ asset('images/' . $bir->image) }}" width="90%" alt="Zam Director">
                                                <div class="deputy_director-details">
                                                    <h1><b>{{ $bir->lastname }}</b><br>{{ $bir->name }}<br></h1>
                                                    <span>{{ $bir->ishi }}</span>
                                                </div>
                                            </a>
                                        </div>
                                     
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </main>
@endsection