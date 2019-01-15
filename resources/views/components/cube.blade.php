<link href="{{ asset('css/cube.css') }}" rel="stylesheet">
<script src="{{ asset('js/cube.js') }}" defer></script>

<div class="wrap">
    <div class="cube">           
        <div class="rotating-box text-center shadow-lg">
            <div class="single-rb">
                <div class="front-side">
                    <a href="/rendering_gallery">
                        <img src="{{ URL::to('imgs/cube/3.jpg') }}" alt="image not found" class="" style="">
                    </a>
                </div>
                <div class="back-side">
                    <a href="/interior_projects">
                        <img src="{{ URL::to('imgs/cube/4.jpg') }}" alt="image not found" class="" style="">
                    </a>
                </div>
                <div class="left-side"> 
                    <a href="/achitecture_projects">
                        <img src="{{ URL::to('imgs/cube/11.jpg') }}" alt="image not found" class="" style="">
                    </a>                  
                </div>
                <div class="right-side">
                    <a href="/animations_gallery">
                        <img src="{{ URL::to('imgs/cube/21.jpg') }}" alt="image not found" class="" style="">
                    </a>
                </div>
                <div class="top-side">
                    <a href="/">
                        <img src="{{ URL::to('imgs/cube/top.jpg') }}" alt="image not found" class="" style="">
                    </a>
                </div>
                <div class="bottom-side">
                    <a href="">
                        <img src="{{ URL::to('imgs/cube/top.jpg') }}" alt="image not found" class="" style="">
                    </a>
                </div>
            </div>
        </div>               
    </div>
</div>

{{-- <div class="cube">
    <div class="top">
        <div class="col-md-12 text-center">
           <a href="" style="margin-top:50%"> Maverick Eye </a> 
        </div>
    </div>
    <div class="right">
        <div class="col-md-12 text-center">
           <a href=""> Interior </a> 
        </div> 
    </div>
    <div class="bottom">
        <div class="col-md-12 text-center">
            <a href=""> Services </a>    
        </div> 
    </div>
    <div class="left">
        <div class="col-md-12 text-center" >
            <a href=""> 3D Rendering </a>           
        </div> 
    </div>
    <div class="back">
        <div class="col-md-12 text-center">
            <a href="" class="mirror"> Architecture </a>            
        </div> 
    </div>
    <div class="front">
        <div class="col-md-12 text-center">
            <a href=""> 3D Animation </a>            
        </div> 
    </div>
</div> --}}