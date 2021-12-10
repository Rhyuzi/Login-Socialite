<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="icon" href="{{asset('/icon/cimb-favicon.ico')}}">
    <img src="{{ asset('/icon/cimb-favicon.icon') }}" alt="">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/src/style.css')}}" />
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
  <body style="background-color: brown; position: relative;" onload="doOnOrientationChange();">
  <div id="landscape"><div>"Rotate Device to Portrait"</div></div>
    <header>
      <nav>
        <div class="brandLogo">
          <img
            src="{{ asset('/icon/CIMB white.svg') }}"
            alt="Logo CIMB Niaga"
          />
        </div>
      </nav>
    </header>

    <main>
      
        @yield('content')
      
    </main>

    @yield('iklan')
  

    <script
      src="{{ asset('/js/jquery-3.6.0.min.js') }}"
    ></script>

    <script
      src="{{ asset('/js/bootstrap.bundle.min.js') }}"
     
    ></script>
    <script>
      const popup = document.querySelector('.popup');
      const close = document.querySelector('.close');
      window.onload = function(){
       setTimeout(() => {
           popup.style.visibility = "visible";
           document.getElementById('blur').classList.toggle("blurpointer");
       }, 100);
       
    }
    close.addEventListener('click', () => {
       popup.style.display = "none";
       document.getElementById('blur').classList.toggle("nonblur");
   })
      
    </script>
  </body>
</html>
