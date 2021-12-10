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

@endsection