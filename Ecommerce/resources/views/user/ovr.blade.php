<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>Virtuální Realita</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{url('')}}"><h2>Virtuální <em>Realita</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{url('')}}">Úvod
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="{{url('ovr')}}">O virtuální realitě</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('hry')}}">Hry</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('metavesmir')}}">Metavesmír</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('zdroje')}}">Zdroje</a>
              </li>

              <li class="nav-item">
              @if (Route::has('login'))
                    @auth

                    <li class="nav-item">
                    <a class="nav-link" href="{{url('showcart')}}"><i class="fas fa-shopping-cart"></i> Košík</a>
                    </li>
                        
                            <x-app-layout>
                            </x-app-layout>
                        
                    @else
                        <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
            </li>



            </ul>
          </div>
        </div>
      </nav>
      @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-bs-dismiss="alert">x</button>
                {{(session()->get('message'))}}
                </div>
                @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4></h4>
              <h2>O Virtuální Realitě</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="text-align:center">První nápad o vytvoření virtuální reality je stroj Sensorama od Mortona Heilinga, který představil v roce 1962. Morton vytvořil prototyp Sensoramy, který dokázal vytvářet obraz, zvuk a další vjemy jako vítr nebo jednoduché vůně.</h2>
              <div class="row justify-content-md-center">
              <img src="assets/images/0.png" alt="Sensorama" style="max-width:40%; max-height:40%;">
              </div>
              <h2 style="text-align:center">Další milník ve vývoji virtuální reality byly první brýle s displejem na světě, které vytvořil Ivan Sutherland v roce 1968.</h2>
              <div class="row justify-content-md-center">
              <img src="assets/images/1.png" alt="První brýle" style="max-width:40%; max-height:40%;">
              </div>
              <h2 style="text-align:center">Poté co se začala v sedmdesátých letech rozvíjet počítačová technologie, začala se o virtuální realitu zajímat Americká vláda a NASA a začaly se vyvíjet prototypy například na trénování pilotů.</h2>
              <div class="row justify-content-md-center">
              <img src="assets/images/2.jpg" alt="Brýle pro piloty" style="max-width:40%; max-height:40%;">
              </div>
              <h2 style="text-align:center">V devadesátých letech se po virtuální realitě začali poohlížet i herní společnosti jako například Sega. Sega vyvíjela zajímavé prototypy ale nakonec z masové výroby sešlo a štafetu převzalo Nintendo, které vydalo Virtual Boy. Virtual Boy byly přenosné brýle s vlastním displejem a vnitřním počítačem, který měl předinstalované virtuální hry, které se ovládaly spoludodávaným ovladačem. Vzhledem k omezeným technickým možnostem té doby byl Virtual Boy propadák. Hry nebyly zábavné a dislej nedokázal dobře promítnout obraz a lidem často nebylo z dlouhého používání dobře.</h2>
              <div class="row justify-content-md-center">
              <img src="assets/images/3.jpg" alt="Virtual Boy" style="max-width:40%; max-height:40%;">
              </div>
              <h2 style="text-align:center">Dlouhá léta se potom virtuální realita nikam neposouvala. Až do roku 2012 kdy se Palmer Luckey a Brendan Iribe podivili proč neexistuje žádná pořádná virtuální realita. Společně proto v garáži založili firmu Oculus a vytvořili prototyp nazvaný Oculus Rift. Aby získali důležité finance na výrobu založili Kickstarter (portál na kterém lidé mohou přispívat peníze), kde získali 2,437,429 dolarů. Brýle pro virtuální realitu Oculus Rift byly velice úspěšné a nakonec společnost Oculus zakoupil v roce 2014 Facebook.</h2>
              <div class="row justify-content-md-center">
              <img src="assets/images/4.jpg" alt="Oculus Rift" style="max-width:40%; max-height:40%;">
              </div>
              <h2 style="text-align:center">V současnosti existuje již několik společností, které se zabývají vývojem brýlí pro virtuální realitu a bude zajímavé sledovat, až kam se technologie virtuální reality vyvine.</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              
            </div>
          </div>
        </div>
      </div>
    </div>




    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2023 Alessandro Gozzi
            
            
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
