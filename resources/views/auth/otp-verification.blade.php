@extends('auth.background-asset')

@section('content')
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

      
<section class="formOTP">
  
        <div id="otpVerification" class="form-otp">
          <h1>OTP Verification</h1>
          <p>An OTP has been sent to your mobile phone number,please verify it below</p>
        <img src="{{ asset('/src/assets/images/otp 1.png') }}" class="otpIcon" width="200px">

        <div class="mb-6 text-center">
  <div id="otp" class="flex justify-center">
    <input class="m-2 text-center form-control form-control-solid rounded focus:border-blue-400 focus:shadow-outline" type="number" id="first" maxlength="1" />
    <input class="m-2 text-center form-control form-control-solid rounded focus:border-blue-400 focus:shadow-outline" type="number" id="second" maxlength="1" />
    <input class="m-2 text-center form-control form-control-solid rounded focus:border-blue-400 focus:shadow-outline" type="number" id="third" maxlength="1" />
    <input class="m-2 text-center form-control form-control-solid rounded focus:border-blue-400 focus:shadow-outline" type="number" id="fourth" maxlength="1" />
    <input class="m-2 text-center form-control form-control-solid rounded focus:border-blue-400 focus:shadow-outline" type="number" id="fourth" maxlength="1" />

  </div>
  <p>Didn’t receive the code?
  <strong>Resend (34)</strong>
  </p>
  <button type="submit" class="btnOTP">VERIFY AND PROCEED</button>
  <button type="submit" class="btnCancel">Cancel</button>
</div>

        </div>

<script>
    function OTPInput() {
  const inputs = document.querySelectorAll('#otp > *[id]');
  for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('keydown', function(event) {
      if (event.key === "Backspace") {
        inputs[i].value = '';
        if (i !== 0)
          inputs[i - 1].focus();
      } else {
        if (i === inputs.length - 1 && inputs[i].value !== '') {
          return true;
        } else if (event.keyCode > 47 && event.keyCode < 58) {
          inputs[i].value = event.key;
          if (i !== inputs.length - 1)
            inputs[i + 1].focus();
          event.preventDefault();
        } else if (event.keyCode > 64 && event.keyCode < 91) {
          inputs[i].value = String.fromCharCode(event.keyCode);
          if (i !== inputs.length - 1)
            inputs[i + 1].focus();
          event.preventDefault();
        }
      }
    });
  }
}
OTPInput();
</script>

        

         
      </section>
@endsection