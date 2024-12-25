@extends('navbar-section.navbar')

@section('navbar')

<div class="mainContent withImage">
    <div class="imageHeader" style="padding-bottom: 0px;">
        <div class="container">
            <h1 class="pageTitle text-dark">Maktab Galereyasi</h1>
            <nav aria-label="breadcrumb">
                <ol id="w5" class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                    <li class="breadcrumb-item " aria-current="page">Maktab Galereyasi</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<main>
    <section>
        <div class="schoolGallery">
            <div class="container">
                <h1 class="gallery_title">Maktab Galereyasi</h1>
                <div class="row">
      @foreach ($gale as $gal )
      <div class="col-12 mb-2">
        <img src="{{ asset('images/' . $gal->image) }}" alt="Img" width="20%" height="90%">
    </div>
      @endforeach

                </div>
            </div>
        </div>
    </section>
</main>
@endsection