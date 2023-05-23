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
              <li class="nav-item">
                <a class="nav-link" href="{{url('ovr')}}">O virtuální realitě</a>
              </li>
              <li class="nav-item active">
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
              <h2>Hry pro virtuální realitu</h2>
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
              <h2 style="text-align:center">Zde přinášíme tři nejlepší hry pro virtuální realitu, které by si každý majitel virtuálních brýlí měl vyzkoušet.</h2>
              <div class="row justify-content-md-center">
              <img src="assets/images/alyx.jpg" alt="Half Life: Alyx" style="max-width:40%; max-height:40%;">
              </div>
              <h2 style="text-align:center">Half-Life: Alyx je jedna z nejpropracovanějších her pro virtuální realitu vůbec. Prakticky jakýkoliv předmět, který ve hře potkáte, se dá uchopit a případně použít. Hra má dobrý příběh založen na světe ze série her Half-Life a dokonale využívá virtuální realitu.</h2>
              <div class="row justify-content-md-center">
              <img src="assets/images/job.jpg" alt="Job Simulator" style="max-width:40%; max-height:40%;">
              </div>
              <h2 style="text-align:center">Job Simulator není dlouhá hra, ale vzato velice zábavná. Účelem hry je "simulovat" práci. Ve hře vás přivítá otravný robot, který vám zadá práci a je na vás, jak se s tím vypořádáte.</h2>
              <div class="row justify-content-md-center">
              <img src="assets/images/skyrim.jpg" alt="Skyrim" style="max-width:40%; max-height:40%;">
              </div>
              <h2 style="text-align:center">The Elder Scrolls V: Skyrim je jedna z nejlépe hodnocených her, která kdy vznikla. Fantasy svět ve kterém lítají draci a vy jako hlavní hrdina je musíte porazit. Dříve hra jen na počítač a konzole. Nyní předělaná na virtuální realitu!</h2>
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
