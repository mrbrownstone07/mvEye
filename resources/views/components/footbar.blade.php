<link href="{{ asset('css/footbar.css') }}" rel="stylesheet">
<div id="footbar" class=" card rounded-0 bottom" style="">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-left">
                <div class="logo">
                    <h2> Maverick Eye <span> Architects </span> </h2>
                </div>
                <div class="icons">
                    <a href="https://www.facebook.com/MaverickEye">
                        <img src="{{ URL::to('imgs/icons/fb.png') }}" 
                            alt="image not found" class="" style="width:25px; height:25px">
                    </a>
                    <img src="{{ URL::to('imgs/icons/insta.png') }}" 
                        alt="image not found" class="" style="width:20px; height:20px">                   
                    <a class="span" href="">
                        <img src="{{ URL::to('imgs/icons/mail.png') }}" 
                            alt="image not found" class="" style="width:25px; height:25px">
                        <span class=""> something@something.com </span> 
                    </a>
                    <a class="span"  href="">
                        <img src="{{ URL::to('imgs/icons/call.png') }}" 
                            alt="image not found" class="" style="width:20px; height:20px">
                            <span class=""> 01552709904 </span> 
                    </a>                
                </div>
                <hr>
                <div class="style_font">
                    Road: number, Section: number <br>
                    area, city-zipcode <br>
                    country
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4 text-right">
                    <iframe width="400" height="170" 
                        src="https://maps.google.com/maps?width=800&amp;height=150&amp;hl=en&amp;q=w%20shukrabad%20road+(Title)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" 
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    {{-- <div class="card-footer bg-white text-center style_font">
        <small> @DEVELOPED BY MAHDI MOHAMMAD SHIBLI </small>
    </div> --}}
</div>