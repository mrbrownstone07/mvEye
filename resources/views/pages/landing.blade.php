<link href="{{ asset('css/landing.css') }}" rel="stylesheet">

@extends('layouts.landingMaster')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        {{-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol> --}}
        <div class="carousel-inner">
            <div class="carousel-item i-1 active overlay">
                <div class="">
                    <div class="h-100 row align-items-center">
                        <div class="col-md-12 d-none d-md-block">
                            @include('components.cube')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item i-2 overlay">
                <div class="">
                    <div class="h-100 row align-items-center">
                        <div class="col-md-12 d-none d-md-block">
                            @include('components.cube')
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="carousel-item i-3 overlay">
                <div class="">
                    <div class="h-100 row align-items-center">
                        <div class="col-md-12 d-none d-md-block">
                            @include('components.cube')
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="carousel-item i-4 overlay">
                <div class="">
                    <div class="h-100 row align-items-center">
                        <div class="col-md-12 d-none d-md-block">
                            @include('components.cube')
                        </div>
                    </div>                    
                </div> 
            </div>
        </div>
        {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>
    {{-- <div class="img-div">
        <div class="h-100 row align-items-center">
            <div class="col-md-12 d-none d-md-block">
                @include('components.cube')
            </div>
        </div>
    </div> --}}

    <div id="top-projects">
        <div class="img-1 contain">
            {{-- <span class="badge badge-pill badge-info">ongoing</span> --}}
            <div class="h-100 row align-items-center text-white">
                <div class="overlay col-md-12 text-right">
                    <h1 style="padding-right:20px"> Architectural </h1>
                </div>
            </div>
        </div>
        <div class="img-2 contain">
            {{-- <span class="badge badge-pill badge-info">ongoing</span> --}}
            <div class="h-100 row align-items-center text-white">
                <div class="overlay col-md-12 text-right">
                    <h1 style="padding-right:20px">  Interior </h1>
                </div>
            </div>            
        </div>
        <div class="img-3 contain">
            {{-- <span class="badge badge-pill badge-info">ongoing</span> --}}
            <div class="h-100 row align-items-center text-black">
                <div class="overlay col-md-12 text-right">
                    <h1 style="padding-right:20px">  3D-Rendering </h1>
                </div>
            </div>            
        </div>
        <div class="img-4 contain">
            {{-- <span class="badge badge-pill badge-info">ongoing</span> --}}
            <div class="h-100 row align-items-center text-white">
                <div class="overlay col-md-12 text-right">
                    <h1 style="padding-right:20px">  3D-Animation </h1>
                </div>
            </div>            
        </div>
    </div>
    
    @include('components.footbar')
@endsection

