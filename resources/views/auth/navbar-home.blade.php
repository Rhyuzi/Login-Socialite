<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="{{ asset('icon/material-icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <!-- CSS Files -->
    <link href="{{asset('/be/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('/be/css/material-dashboard.min.css')}}" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="https://www.cimbniaga.co.id/etc/designs/cimb/clientlib-site/img/cimb-favicon.ico"
      type="image/x-icon"
    />
    <img src="{{ asset('/icon/cimb-favicon.icon') }}" alt="">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="{{ asset('/src/style-home.css')}}" />
    <title>CIMB - Wifi Portal</title>
    <script>          
      function doOnOrientationChange()
      {
        switch(window.orientation) 
        {  
          case -90:                 
                 document.getElementById("landscape").style.display="block";
                 break;
          case 90:              
                document.getElementById("landscape").style.display="block";                 
                break;
         default:                   
                document.getElementById("landscape").style.display="none";
                break;                            
        }
      }

      //Listen to orientation change
      window.addEventListener('orientationchange', doOnOrientationChange);  

    </script>
  </head>
  
  <body onload="doOnOrientationChange();">
  <div id="landscape"><div>"Rotate Device to Portrait"</div></div>
    <header>
      <nav>
        <div class="brandLogo">
          <img
            src="{{ asset('/src/assets/images/logo-cimb-niaga.png') }}"
            alt="Logo CIMB Niaga"
          />
        </div>
        <a class="btnSignOut btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign Out</a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

    <div class="person"> <img src="{{ asset('/icon/person-circle.svg') }}" width="30px">{{ Auth::user()->name }}
</div>

      </nav>
    </header>

    <main>
      
        @yield('content')
      
    </main>

    <!-- Modal -->
    <div
      class="modal fade"
      id="ngamodal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="ngamodalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ asset('/src/assets/images/modal-ads.jpg') }}" alt="Iklan Modal" />
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script>
      $(document).ready(function () {
        $("#ngamodal").modal("show");
        $("#signUp").hide();
      });

      $("#registerButton").click(function () {
        $("#signIn").hide();
        $("#signUp").show();
      });

      $("#signInButton").click(function () {
        $("#signUp").hide();
        $("#signIn").show();
      });
    </script>
  </body>
</html>
