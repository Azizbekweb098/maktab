@extends('navbar-section.navbar')

@section('navbar')
<div class="mainContent withImage">
    <div class="imageHeader" style="padding-bottom: 0px;">
        <div class="container">
            <h1 class="pageTitle text-dark">Ta'lim</h1>
            <nav aria-label="breadcrumb">
                <ol id="w5" class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                    <li class="breadcrumb-item " aria-current="page">Ta'lim</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<main>
    <section>
        <div class="main_tabs" style="padding: 10px 0;">
            <div class="container">

                <div class="serviceTabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <a class="nav-link show active" data-toggle="tab" href="#tab1" role="tab"
                                aria-selected="true">1-smena</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                aria-selected="false">2-smena</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab"
                                aria-selected="false">Qo‘shimcha darslar</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link " data-toggle="tab" href="#tab4" role="tab"
                                aria-selected="true">Sport to'garaklari</a>
                        </li>

                    </ul>
                </div>
                <div class="tab-content mt-5">

                    <!-- 1  --  SMENA -->
                    <div class="tab-pane fade active show" id="tab1" role="tabpanel">
                        <div class="servicesList">
                            @foreach ($one_smena as $smena)
                            <a href="{{ $smena->file }}" download>
                               <div>
                                   <div class="icon">
                                       <img alt="icon" src="https://uzedu.uz/uploads/2022/04/YdZSPyhOq_dbB6g81zXfThkU-JKcEpCG.jpg">
                                   </div>
                                   <span>{{ $smena->name }}</span>
                               </div>
                               <span>{{ $smena->name }}</span>
                           </a>
                            @endforeach
                     
                        </div>
                    </div>
                    <!-- 2  --  SMENA -->
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="servicesList">
                            @foreach ($two_smena as $smena)
                            <a href="{{ $smena->file }}" download>
                               <div>
                                   <div class="icon">
                                       <img alt="icon" src="https://uzedu.uz/uploads/2022/04/YdZSPyhOq_dbB6g81zXfThkU-JKcEpCG.jpg">
                                   </div>
                                   <span>{{ $smena->name }}</span>
                               </div>
                               <span>{{ $smena->name }}</span>
                           </a>
                            @endforeach
               
                     
                        </div>
                    </div>
                    <!-- Qo'shimcha Darslar -->
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="servicesList">
                            @foreach ($qoshimcha as $smena)
                            <a href="{{ $smena->file }}" download>
                               <div>
                                   <div class="icon">
                                       <img alt="icon" src="https://uzedu.uz/uploads/2022/04/YdZSPyhOq_dbB6g81zXfThkU-JKcEpCG.jpg">
                                   </div>
                                   <span>{{ $smena->name }}</span>
                               </div>
                               <span>{{ $smena->name }}</span>
                           </a>
                            @endforeach

                        </div>
                    </div>
                    <!-- Sport To'garaklari -->
                    <div class="tab-pane fade " id="tab4" role="tabpanel">
                        <div class="servicesList">
                            @foreach ($sport as $smena)
                            <a href="{{ $smena->file }}" download>
                               <div>
                                   <div class="icon">
                                       <img alt="icon" src="https://uzedu.uz/uploads/2022/04/YdZSPyhOq_dbB6g81zXfThkU-JKcEpCG.jpg">
                                   </div>   
                                   <span>{{ $smena->name }}</span>
                               </div>
                               <span>{{ $smena->name }}</span>
                           </a>
                            @endforeach

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
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
</script>

@endsection