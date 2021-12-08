@extends('auth.background-asset')

@section('content')
<section id="blur">
<section class="adsCarousel">
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
           
           
            @foreach($bannerIklan as $b)
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="{{ $loop->index }}"
              class="{{ $loop->first ? 'active' : '' }} "
            ></button>
           @endforeach
          </div>
          <div class="carousel-inner">
            
            @foreach($bannerIklan as $key => $b)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
              <img
                src="{{ asset('/iklan/gambar/'.$b->gambar_iklan) }}"
                class="d-block"
                width="400px"
                height="475px"
              />
              <div class="carousel-caption">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nascetur cursus tortor ut rhoncus vitae netus felis. Nunc
                  dignissim ullamcorper sem consectetur quis. In montes,
                  ultricies cursus pellentesque mauris eleifend sem. Sit vel
                  nulla in sapien
                </p>
              </div>
            </div>
            @endforeach
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
          >
            <span
              class="bi bi-arrow-left-circle-fill"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
          >
            <span
              class="bi bi-arrow-right-circle-fill"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      
<section class="formRegister">
        <div id="signUp" class="form-register">
          <h1>Register</h1>
          <p>
            Want to Sign In ?
            <strong><a id="signInButton">Sign In Here</a></strong>
          </p>
    <form action="">

          <input type="text" id="regForm" placeholder="Enter your full name" maxlength="73"/>
          <input type="email" id="regForm" placeholder="Enter your email" maxlength="320" />
          <input type="tel" id="regForm" placeholder="Enter your phone number" maxlength="13"/>
          <input type="text" id="regForm" placeholder="Enter your address" maxlength="95" />

          <button type="submit" class="btnReg">Submit</button>
          
    </form>

          <p>
            By registering, I agree
            <strong><a>Terms and Conditions</a></strong> and
            <strong><a>Privacy Policy</a></strong>
          </p>
        </div>


         
      </section>
</section>
@endsection
@section('iklan')
<div class="popup">
        <div class="contentBox">
            <div class="close"></div>
            <div class="ads">
            @foreach($ads as $i)
             {!! $i->link_iklan !!}
             @if(count($ads) > 0)
             <video controls>
                        <source src="{{ asset('/iklan/video/'.$i->nama_video)}}" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                         Your browser does not support the video tag.
                    </video>
              @endif
            @endforeach
            </div>
        </div>
    </div>

@endsection
