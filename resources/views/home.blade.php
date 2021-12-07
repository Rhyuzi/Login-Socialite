@extends('auth.navbar-home')
@section('content')

@if (session()->has('gagal'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong> {{ session()->get('gagal') }}</strong>
				</div>
				@endif
				<section class="carousel-home">
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
                src="{{ asset('src/assets/images/Rectangle 1506.png') }}"
                class="d-block"
                alt="KPR Rumah"
              />
              <div class="carousel-caption">
              
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('src/assets/images/iklan2.png') }}"
                class="d-block"
                alt="Mobil Baru"
              />
              <div class="carousel-caption">
              
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('src/assets/images/iklan3.png') }}"
                class="d-block"
                alt="Belanja Terus"
              />
              <div class="carousel-caption">
              
			  
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

@endsection