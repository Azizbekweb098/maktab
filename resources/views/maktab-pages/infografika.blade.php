@extends('navbar-section.navbar')


@section('navbar')

<div class="mainContent withImage">
    <div class="imageHeader" style="padding-bottom: 0px;">
        <div class="container">
            <h1 class="pageTitle text-dark">Infografika</h1>
            <nav aria-label="breadcrumb">
                <ol id="w5" class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                    <li class="breadcrumb-item " aria-current="page">Infografika</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<main>
    <section>
        <div class="infografika">
            <div class="container">
                <div class="infografika_content">
                    <div class="item">
                   @foreach ($info as $in )
                   <a href="#">
                    <div class="imageBox">
                        <img src="{{ asset('images/' . $in->image) }}">
                    </div>
                    <div class="descriptionBox">
                        <h1>{{ $in->title }}</h1>
                        <span>{{ $in->created_at }}</span>
                    </div>
                </a>
                   @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection