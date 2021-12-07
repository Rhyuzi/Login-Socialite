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
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="{{ asset('src/assets/images/house.png') }}"
                class="d-block"
                alt="KPR Rumah"
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
            <div class="carousel-item">
              <img
                src="{{ asset('src/assets/images/cars.png') }}"
                class="d-block"
                alt="Mobil Baru"
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
            <div class="carousel-item">
              <img
                src="{{ asset('src/assets/images/shopping.png') }}"
                class="d-block"
                alt="Belanja Terus"
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
          <h1>Verification</h1>
          <p>
          We will send you One Time Password
on your phone number
          </p>
          <img src="{{ asset('/src/assets/images/phone 1.png') }}" class="phoneIcon">
    <form action="">

          <input type="text" id="regForm" placeholder="Enter your phone number" maxlength="95" />

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
@section('')
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
