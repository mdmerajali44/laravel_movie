<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD LOVE MOVIE</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">




</head>
<body>
    <!-- Navbar  -->
    <header>
        <a href="#home" class="logo">
            <i class='bx bxs-movie'></i>Sanamio
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- menu  -->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#movies">Movies</a></li>
            <li><a href="#coming">Coming</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>
        <a href="#" class="btn">Sign In</a>
    </header>

    <!-- Home  -->
    
    
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            @foreach ($webhomes as $webhome)
             
            <div class="swiper-slide container">
                <img src="{{$webhome->web_file}}" alt="">
                <div class="home-text">
                    <span>BDLOVEMOVIE.COM</span>
                    <h1>{{$webhome->movie_name}}<br>{{$webhome->movie_part}}</h1> <br>
                    <h1>Arrival date: {{$webhome->arrival_date}}</h1>

                    <a href="" class="btn">Book Now</a>
                    <a href="" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                </div>
            </div>          
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
    </section>
    



    <!-- Movies  -->
    <div class="movies" id="movies">
        <h2 class="heading">Opening This Week</h2>
        <!-- Movies container  -->
        <div class="movies-container">
            <!-- box-1  -->
            @foreach ($requests as $request)
            <a href="{{url('movie/'.$request->id)}}">
            <div class="box">
                <div class="box-img">
                    <img src="{{$request->move_img}}" alt="">
                </div>
                <h3>Name: {{$request->movie_name}}</h3>
                <span>120 min | {{$request->move_title}}</span>
                <p>{{$request->short_description}}</p>
            </div>
        </a>   
            @endforeach
      
        </div>
    </div>


    <!-- coming  -->
    <section class="coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!-- coming contanier  -->
        <div class="coming-container swiper">

            <div class="swiper-wrapper">
                
                <!-- box-1  -->
                <div class="swiper-slide box">
                    @foreach ($commings as $comming)
                    <div class="box-img">
                        <img src="{{ $comming->comming_file}}" alt="">
                    </div>
                    <h3>Arrival date: {{ $comming->arrival_date }} <br>{{ $comming->movie_name }} | {{ $comming->movie_part }} </h3>
                    @endforeach
                </div>
               
            </div>

        </div>
    </section>

    <!-- Newsletter /\ -->
    <section class="newsletter" id="newsletter">
        <h2>Subscribe To Get <br>Newsletter</h2>
        <form action="">
            <input type="email" class="email" placeholder="Enter Email" required>
            <input type="submit" value="Subscribe" class="btn">
        </form>
    </section>

    <!-- footer  -->
    <section class="footer">
        <a href="" class="logo">
            <i class="bx bxs-movie"></i>Sanamio
        </a>
        <div class="social">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-twitter'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
        </div>
    </section>

    <!-- Copyright  -->
    <div class="copyright">
        <p>&#169; Sanamio All Right Reserved</p>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>