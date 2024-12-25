@extends('navbar-section.navbar')

@section('navbar')
<div class="mainContent withImage">
    <div class="container">
        <h1 class="pageTitle text-dark">Izlash natijalari</h1>
        <form id="w2" class="mainSearchForm" action="{{ route('search.index') }}" method="get">
            <div class="input-group">
                <input type="text" id="mainSearch" class="form-control" placeholder="Izlash"
                    name="ContentSearch" value="{{ request('ContentSearch') }}">
                <div class="input-group-prepend">
                    <button class="btn __searchBtn closeBtn" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <section>
            <div class="container">
                @if($results->isEmpty())
                    <div class="emptyBox">
                        <i class="fas fa-search"></i>
                        <p>Hech narsa topilmadi</p>
                    </div>
                @else
                    <div class="imageCardBoxes">
                        <div class="row">
                            @foreach($results as $result)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <a href="#">
                                        <div class="imageBox">
                                            <img alt="image" src="{{ asset('images/' . $result->image) }}">
                                        </div>
                                        <h1>{{ $result->title }}</h1>
        
                                        <span>{{ $result->created_at->format('d M Y') }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </div>
</div>
@endsection
