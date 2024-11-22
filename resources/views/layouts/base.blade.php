<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>SurfsideMedia</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick-theme.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo4.css') }}">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @stack('styles')

</head>

<body class="theme-color4 light ltr">
    <style>
        
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            /* background: #e87316;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px; */
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
:root {
  --pr-color: #ffffff;
}
* {
  font-family: "Poppins" serif;
}

body {
  font-family: "Poppins", sans-serif;
}

.nav-link {
  color: #5b4545 !important;
  font-size: 20px;
  font-weight: 700;
}
.nav-link:hover,
.nav-link.active:hover {
  color: #c21010 !important;
  text-decoration: underline;
}

.nav-link.active {
  color: #c21010 !important;
  font-weight: 700;
  text-decoration: underline;
}

.button-primary {
  width: 152px;
  height: 58px;
  background-color: #c21010;
  color: var(--pr-color);
  border: none;
  font-size: 20px;
  font-weight: 600;
  border-radius: 10px;
}

.llogin {
  width: 18px;
  height: 18px;
  margin-left: 10px;
}

.container {
  text-align: left;
  padding: 20px;
  margin: 0 auto;
  /* max-width: 1040px; */
}

.container .watermark {
  z-index: -999999;
}

.header {
  display: flex;
  align-items: center;
  justify-content: left;
  padding: 10px;
}

.logo {
  width: 24px; /* Sesuaikan ukuran logo */
  height: 24px; /* Sesuaikan ukuran logo */
  margin-right: 15px; /* Memberikan jarak antara logo dan teks */
  /* margin-left: 100px; /* Geser ke kanan */
}

.header-text {
  text-align: right;
  float: right;
  margin-left: 10px; /* tambahkan jarak dari kiri */
  font-size: 20px;
  margin: 0;
  color: #100f0f;
}

.button-seccondary {
  width: 221px;
  height: 58px;
  background-color: #ffbe56;
  color: var(--pr-color);
  border: none;
  font-size: 20px;
  font-weight: 600;
  border-radius: 10px;
  margin-right: 10px;
}

.bendera1 {
  width: 24px;
  height: 24px;
  margin-left: 10px;
}

.button-primary1 {
  width: 221px;
  height: 58px;
  background-color: #c21010;
  color: var(--pr-color);
  border: none;
  font-size: 20px;
  font-weight: 600;
  border-radius: 10px;
}

.bendera2 {
  width: 24px;
  height: 24px;
  margin-left: 10px;
}

.service {
  display: flex;
  align-items: flex-start;
  margin: 10px;
}

.number {
  font-size: 32px;
  font-weight: regular;
  margin-right: 20px;
}
.details h1 {
  color: #100f0f;
  font-size: 32px;
  margin: 0;
  font-weight: bold;
}

.details p {
  font-size: 20px;
  color: #100f0f;
}

.place .cards {
  width: 18rem;
  border: none;
  /* padding: 1%; */
  /* align-items: flex-start; */
}
/* .card {
  width: 272px;
  height: 175;
  border-radius: 10px;
}
.rekomendasi {
  width: 290px;
  height: 365px;
}
.star {
  width: 20px;
  height: 19px;
}
.card-title {
  font-size: 1.5rem;
}
.card-text {
  font-size: 1.2rem;
  color: #100f0f;
}
.card-rating {
  display: flex;
  align-items: center;
  font-size: 1rem;
}
.card-price {
  font-size: 1.5rem;
  font-weight: bold;
  color: #5b4545;
} */
.text-container {
  /* border: 1px solid rgb(245, 244, 244); Hanya untuk demonstrasi */
  padding: 20px;
  text-align: left;
}

h4 {
  font-size: 36px;
  font-weight: bold;
}

.highlight4 {
  color: #c21010;
}

p1 {
  font-size: 36px;
  font-weight: bold;
  margin-top: 0;
  /* margin-right: 30; */
}
.destination-container {
  display: flex;
  text-align: right;
  justify-content: flex-end;
  align-items: flex-start;
  padding: 20px;
  gap: 20px;
}
.cards {
  /* background-color: white; */
  height: 480px;
  border-radius: 15px;
  width: 250px;
  overflow: hidden;
  text-align: center;
  /* padding: 15px; */
}

.info {
  padding: 5px;
}

.info .info-detail {
  background-color: #f7f7f7;
  padding: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

.card-img {
  width: 100%;
  height: 380px;
}

.location {
  font-size: 10px;
  color: grey;
  margin-bottom: 5px;
  display: flex;
  justify-content: left;
  align-items: center;
}

.icon {
  margin-right: 5px;
}

.price {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0;
  text-align: left;
}

.rating {
  font-size: 16px;
  color: rgb(21, 21, 21);
  margin-bottom: 0px;
  display: flex;
  justify-content: right;
  align-items: right;
}
.price1 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0;
  text-align: left;
}

.simbol {
  margin-bottom: 0px;
  display: flex;
  justify-content: right;
  align-items: right;
}
.location1 {
  font-size: 15px;
  color: grey;
  margin-bottom: 5px;
  display: flex;
  justify-content: left;
  align-items: center;
}
.container7 {
  text-align: center;
}
.h4 {
  font-size: 3rem;
  font-weight: bold;
  margin: 0;
}
.highlight {
  color: #c21010;
}
.cards2 {
  height: 457px;
  border-radius: 15px;
  width: 607px;
  overflow: hidden;
  text-align: center;
}

.info2 {
  padding: 15px;
}

.info2 .info-detail2 {
  background-color: #f7f7f7;
  padding: 15px;
  width: 558px;
  height: 320px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

.card-img2 {
  width: 100%;
  height: 380px;
}

.adm {
  width: 58px; /* Sesuaikan ukuran logo */
  height: 58px; /* Sesuaikan ukuran logo */
  margin-right: 15px; /* Memberikan jarak antara logo dan teks */
  /* margin-left: 100px; /* Geser ke kanan */
}

.header-text1 {
  text-align: right;
  float: right;
  margin-left: 5px; /* tambahkan jarak dari kiri */
  font-size: 20px;
  margin: 0;
  color: #9d8a8a;
}

.date {
  font-size: 20px;
  color: #9d8a8a;
}

.icon2 {
  margin-right: 5px;
}

.price2 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0;
  text-align: left;
}

.rating2 {
  font-size: 16px;
  color: rgb(21, 21, 21);
  margin-bottom: 0px;
  display: flex;
  justify-content: right;
  align-items: right;
}

/* .location {
  font-size: 14px;
  color: grey;
  margin-bottom: 5px;
  display: flex;
  justify-content: left;
  align-items: center;
} */

.footer {
  background-color: #c21010;
  color: white;
  /* padding: 20px 20px; */
}

.footer .logof {
  height: 68px;
  width: 156px;
  margin-bottom: 37px;
}

.footer .teks {
  margin-bottom: 80px;
}

.footer .container {
  padding: 0px 0px 20px 0px;
}

.footer h5 {
  font-weight: bold;
  margin-bottom: 10px;
}

.footer p {
  margin: 0;
  font-size: 0.9rem;
}

.footer .footer-subscribe input {
  margin-bottom: 10px;
}

/* .footer .footer-credits {
  display: flex;
  justify-content: center;
  align-items: center; 
  background-color: #100F0F;
  padding: 20px 0;
  font-size: 18px;
  position: relative;
  width: 100%; 
  text-align: center;
  bottom: 0;
}

.footer p {
  margin: 0;
} */

.footer .footer-credits {
  display: flex;
  width: 100%;
  justify-content: center;
  align-items: center;
  /* margin: 20px; */
  background-color: #100f0f; /* Warna latar hitam */
  padding: 20px; /* Padding yang sesuai untuk memberikan ruang */
  font-size: 18px;
  /* width: 80%; Memastikan elemen memenuhi lebar layar */
  text-align: center;
  position: relative;
  border-radius: 10px;
}

.footer .footer-credits p {
  margin: 0;
  color: #fff; /* Warna teks putih */
}

.footer .footer-credits-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1284px; /* Menjaga ukuran maksimal konten */
  max-height: 90px;
  width: 100%;
}

.footer .social-icons a {
  color: white;
  margin-right: 10px;
  font-size: 1.2rem;
}

    </style>
 {{-- <body> --}}
    <nav class="navbar position-sticky sticky-top w-100 navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/index/main_logo.png') }}" alt="Logo" style="height: 60px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto q">
            <li class="nav-item mx-30">
              <a class="nav-link active" aria-current="page" href="#beranda">Home Page</a>
            </li>
            <li class="nav-item mx-30">
              <a class="nav-link" href="#">Packages</a>
            </li>
            <li class="nav-item mx-30">
              <a class="nav-link" href="#">Destination</a>
            </li>
            <li class="nav-item mx-30">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item mx-30">
              <a class="nav-link" href="#">Services</a>
            </li>
          </ul>

          {{-- <div>
            <button class="button-primary">Login<img src="{{ asset('assets/images/index/login.png') }}" alt="llogin" class="llogin" /></button>
          </div> --}}
          <li class="onhover-dropdown button-primary">
            <div class="">
                Login 
                {{-- <img src="{{ asset('assets/images/index/login.png') }}" alt="llogin" class="llogin" /> --}}
                @auth <span>{{Auth::user()->name}}</span> @endauth <i data-feather="user"></i>
            </div>
            <div class="onhover-div profile-dropdown" style="">
                <ul>
                    @if(Route::has('login'))
                        @auth
                        @if(Auth::user()->utype === 'ADM')
                            <li>
                                <a href="{{route('admin.index')}}" class="d-block">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('user.index')}}" class="d-block">My Account</a>
                            </li>
                        @endif
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frmLogout').submit();" class="d-block">Logout</a>
                                <form id="frm9ogout" action="{{route('logout') }}" method="POST">
                                    @csrf
                                </form>

                            </li>
                
                            
                    @endauth
                    <li>
                        <a href="{{route('login')}}" class="d-block">Login</a>
                    </li>
                    <li>
                        <a href="{{route('register')}}" class="d-block">Register</a>
                    </li>
                    @endif

                </ul>
            </div>
        </li>
        </div>
      </div>
    </nav>

    <div class="container position-relative">
      <img src="img/Accsent.png" alt="bayang" class="position-absolute top-0 start-0 watermark" />
      <div class="header">
        <img src="img/logo.png" alt="Logo" class="logo" />
        <p class="header-text text-center">Let's Go Around The World</p>
      </div>
      <section id="hero" class="position-relative">
        <div class="container h-100 d-flex flex-row justify-content-between">
          <div class="row h-100">
            <div class="col">
              <h1>Let's Travel Now<br />And <span class="highlight">Visit New,</span> Very <br />Beautiful Place</h1>
              <p class="semi-bold">Don't Delay, It's Time For You To Travel Around The World And Discover Other New And Interesting Things</p>

              <button class="button-seccondary">Explore Now<img src="img/Frame 10.png" alt="bendera1" class="bendera1" /></button>
              <button class="button-primary1">Packages<img src="img/Frame 11.png" alt="bendera2" class="bendera2" /></button>
            </div>
          </div>

          <!-- <img src="img/Hero Banner.png" alt="" class="position-absoloute end-10 bottom-0">  -->
          <img src="img/Hero Banner.png" alt="" class="h-25 min-vw-10 d-none d-md-block" />
        </div>
      </section>
    </div>
    a
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <img src="img/fto.png" class="img-fluid" alt="Responsive image" />
        </div>
        <div class="col-md-6 content">
          <h1>Things You Need To</h1>
          <h1>Prepare Before Traveling</h1>

          <div class="list-group mt-3">
            <div class="service">
              <div class="number">01.</div>
              <div class="details">
                <h3>Best Food</h3>
                <p>We Provide The Best Quality</p>
                <p>Food To Our Customers.</p>
              </div>
            </div>

            <div class="service">
              <div class="number">02.</div>
              <div class="details">
                <h3>Best Travel Plan</h3>
                <p>We Provide The Best</p>
                <p>Travel Packages For You.</p>
              </div>
            </div>

            <div class="service">
              <div class="number">03.</div>
              <div class="details">
                <h3>Best Flights</h3>
                <p>We Provide The Best Flying</p>
                <p>Experience From Our Trusted Airline</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container mt-5">
          <div class="row">
              <div class="col-md-4">
               <div class="card">
                <img src="img/nusa dua.jpg" class="rekomendasi" alt="Nusa Dua">
                  <p class="card-text">
                    <span class="card-rating">
                      <img src="img/lokasi.png" alt="lokasi"><span style="height: 60px">Bali, Indonesia</span><img src="img/star.png" class="star">4.8</span>
                      
                      <h5 class="card-title">Nusa Dua</h5>  
                </p>
                <p class="card-price">Rp. 600.000</p>
            </div>
        </div>
    </div>  -->
    <section>
      <div class="container4">
        <div class="text-container">
          <h4>Populer <span class="highlight4">Destination</span></h4>
          <p1>TravelFun</p1>
        </div>
      </div>
    </section>
    <section>
      <div class="Destination-container d-flex justify-content-evenly">
        <div class="cards position-relative">
          <img src="img/nusa dua.jpg" alt="Nusa Dua Image" class="card-img" />
          <div class="info position-absolute bottom-0 w-100">
            <div class="info-detail">
              <div class="d-flex justify-content-between">
                <div class="location"><span class="icon">📍</span> Bali, Indonesia</div>
                <div class="rating">⭐ 4.8</div>
              </div>

              <div class="price">
                Nusa Dua <br />
                Rp.600.000
              </div>
            </div>
          </div>
        </div>
        <div class="cards position-relative">
          <img src="img/Rectangle 14.png" alt="Nusa Dua Image" class="card-img" />
          <div class="info position-absolute bottom-0 w-100">
            <div class="info-detail">
              <div class="d-flex justify-content-between">
                <div class="location"><span class="icon">📍</span> Jawa Timur, Indonesia</div>
                <div class="rating">⭐ 4.8</div>
              </div>

              <div class="price">
                Bromo <br />
                Rp.400.000
              </div>
            </div>
          </div>
        </div>
        <div class="cards position-relative">
          <img src="img/Rectangle 14 (1).png" alt="Nusa Dua Image" class="card-img" />
          <div class="info position-absolute bottom-0 w-100">
            <div class="info-detail">
              <div class="d-flex justify-content-between">
                <div class="location"><span class="icon">📍</span> NTT, Indonesia</div>
                <div class="rating">⭐ 4.9</div>
              </div>

              <div class="price">
                Pulau Komodo <br />
                Rp.900.000
              </div>
            </div>
          </div>
        </div>
        <div class="cards position-relative">
          <img src="img/Rectangle 14 (2).png" alt="Nusa Dua Image" class="card-img" />
          <div class="info position-absolute bottom-0 w-100">
            <div class="info-detail">
              <div class="d-flex justify-content-between">
                <div class="location"><span class="icon">📍</span> Magelang, Indonesia</div>
                <div class="rating">⭐ 4.7</div>
              </div>

              <div class="price">
                Borobudur <br />
                Rp.200.000
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid">
        <div class="text-container">
          <h4>Nice Place <span class="highlight4">For You</span></h4>
          <p1>To Come</p1>
        </div>
      </div>
      <section class="d-flex place justify-content-center gap-2">
        <div class="cards" >
          <img src="img/Rectangle 28.png" class="card-img-top" alt="...">
          <div class="card-body">

            <div class="price1">
              Camping<br /> </div>
            <div class="simbol">❤️</div>
            <div class="location1"><span class="icon">📍</span>Jawa Timur, Indonesia</div>
          </div>
        </div>
        <div class="cards" style="width: 18rem;">
          <img src="img/Rectangle 25.png" class="card-img-top" alt="...">
          <div class="card-body">

            <div class="price1">
              Scuba diving<br /> </div>
            <div class="simbol">❤️</div>
            <div class="location1"><span class="icon">📍</span>NTT, Indonesia</div>
          </div>
        </div>
        <div class="cards" style="width: 18rem;">
          <img src="img/Rectangle 26.png" class="card-img-top" alt="...">
          <div class="card-body">

            <div class="price1">
              Treaking<br /> </div>
            <div class="simbol">❤️</div>
            <div class="location1"><span class="icon">📍</span>Jawa Timur, Indonesia</div>
          </div>
        </div>
      </section>
      <section>
        <div class="container7">
          <h4>Look For The Latest News About</h4>
          <h4>Your<span class="highlight"> Tourist Destination</span></h4>
        </div>
      </section>
      <section class="d-flex flex-column flex-md-row gap-2 justify-content-center">
        <section class="flex-1">
          <div class="cards2 position-relative">
            <img src="img/Rectangle 27@2x.png" alt="Nusa Dua Image" class="card-img2" />
            <div class="info2 position-absolute bottom-0 h-50 w-100">
              
              <div class="info-detail2">
                <div class="d-flex justify-content-between align-center">
                 <div class="text-center">
                  <img src="img/admin.png" alt="adm" class="adm" />
                  <p class="header-text1 text-center">By Admin</p>
                 </div>
                  <!-- <div class="location2"><span class="icon2">📍</span> Jawa Timur, Indonesia</div> -->
                  <div class="date">29, July 2024</div><br/>
                  </div>
                  <!-- <p class="card-text" style="color: #9D8A8A;">28,Juli 2024</p>
                 -->
                  <div class="content">
                    <h1 class="title1">hhhhh</h1>
                  </div>
               
              
  
                
              </div>
            </div>
          </div>
        </section>
  
        <section class="flex-2">
              <div class="cardi mb-3" style="max-width: 670px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/gunung.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Enjoy the sensation on top of a</br>cool mountain with beautiful</h5>
                      <p class="card-text" style="color: #9D8A8A;">28,Juli 2024</p>
                      <p class="card-text"><small class="text-body-secondary"><a class="link" href="#" style="color: #FF0413;">Read More</small></p></a>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="cardi mb-3" style="max-width: 670px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/gurun.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">The desert is the most</br>interesting place on the face</h5>
                      <p class="card-text" style="color: #9D8A8A;">28,Juli 2024</p>
                      <p class="card-text"><small class="text-body-secondary"><a class="link" href="#" style="color: #FF0413;">Read More</small></p></a>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="cardi mb-3" style="max-width: 670px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/hutan.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Feel Adventurous In The</br>Wild In The Forest</h5>
                      <p class="card-text" style="color: #9D8A8A;">28,Juli 2024</p>
                      <p class="card-text"><small class="text-body-secondary"><a class="link" href="#" style="color: #FF0413;">Read More</small></p></a>
                    </div>
                
                </div>
                </div>
              </div>
        </section>
      </section>
     
      

    <!-- Footer Section -->
    <div class="footer px-5 py-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <img src="img/travel hitam.png" class="logof" />
            <div class="teks">
              <p>Traveling Now, Have Fun</p>
              <p>Don't Delay, It's Time For You To Travel Around The World And Discover Other New And Interesting Things.</p>
            </div>
          </div>
          <div class="col-md-4 offset-md-2">
            <h5>Stay Updated To Our Newsletter</h5>
            <div class="footer-subscribe">
              <input type="email" class="form-control" placeholder="Enter Your Email Address" />
              <button class="btn btn-dark mt-2">Subscribe</button>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-credits">
        <div class="footer-credits-container">
          <p>dibuat oleh Clarie, Menggunakan Tailwind CSS Dan JS @2024</p>
          <div class="social-icons">
            <a href="#"><img src="img/fb.png" /><i class="bi bi-facebook"></i></a>
            <a href="#"><img src="img/twt.png" /><i class="bi bi-twitter"></i></a>
            <a href="#"><img src="img/ig.png" /><i class="bi bi-instagram"></i></a>
            <a href="#"><img src="img/yt.png" /><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  {{-- </body> --}}



    {{-- <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="index.htm">
                                        <img src="assets/images/logo.png" class="h-logo img-fluid blur-up lazyload"
                                            alt="logo">
                                    </a>
                                </div>

                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li><a href="index.htm" class="nav-link menu-title">Home</a></li>
                                            <li><a href="shop.html" class="nav-link menu-title">Shop</a></li>
                                            <li><a href="cart/list.html" class="nav-link menu-title">Cart</a></li>
                                            <li><a href="about-us.html" class="nav-link menu-title">About Us</a></li>
                                            <li><a href="contact-us.html" class="nav-link menu-title">Contact Us</a>
                                            </li>
                                            <li><a href="blog.html" class="nav-link menu-title">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li>
                                        <div class="search-box theme-bg-color">
                                            <i data-feather="search"></i>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="wishlist/list.html">
                                                <i data-feather="heart"></i>
                                                <span id="wishlist-count" class="label label-theme rounded-pill">
                                                    0
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="cart/list.html">
                                                <i data-feather="shopping-cart"></i>
                                                <span id="cart-count" class="label label-theme rounded-pill">
                                                    0
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown">
                                        <div class="cart-media name-usr">
                                            @auth <span>{{Auth::user()->name}}</span> @endauth <i data-feather="user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul>
                                                @if(Route::has('login'))
                                                    @auth
                                                    @if(Auth::user()->utype === 'ADM')
                                                        <li>
                                                            <a href="{{route('admin.index')}}" class="d-block">Dashboard</a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a href="{{route('user.index')}}" class="d-block">My Account</a>
                                                        </li>
                                                    @endif
                                                        <li>
                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frmLogout').submit();" class="d-block">Logout</a>
                                                            <form id="frm9ogout" action="{{route('logout') }}" method="POST">
                                                                @csrf
                                                            </form>

                                                        </li>
                                            
                                                        
                                                @endauth
                                                <li>
                                                    <a href="{{route('login')}}" class="d-block">Login</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('register')}}" class="d-block">Register</a>
                                                </li>
                                                @endif

                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-full">
                                <form method="GET" class="search-full" action="http://localhost:8000/search">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" name="q" class="form-control search-type"
                                            placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="demo3.php" class="active">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.php">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>

    @yield('content')
    <div id="qvmodal"></div>

    <footer class="footer-sm-space mt-5">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="index.htm" class="footer-logo float-start">
                                    <img src="{{asset('assets/images/logo.png')}}" class="f-logo img-fluid blur-up lazyload"
                                        alt="logo">
                                </a>
                            </div>
                            <ul class="contact-lists" style="clear:both;">
                                <li>
                                    <span><b>phone:</b> <span class="font-light"> +1 0000000000</span></span>
                                </li>
                                <li>
                                    <span><b>Address:</b><span class="font-light"> NIT, Faridabad, Haryana,
                                            India</span></span>
                                </li>
                                <li>
                                    <span><b>Email:</b><span class="font-light"> contact@surfsidemedia.in</span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>About us</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="index.htm" class="font-dark">Home</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">Shop</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html" class="font-dark">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html" class="font-dark">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>New Categories</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="shop.html" class="font-dark">Latest Shoes</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">Branded Jeans</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">New Jackets</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">Colorfull Hoodies</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">Shiner Goggles</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Get Help</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="#" class="font-dark">Your Orders</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Track Orders</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Your Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Shopping FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                        <div class="footer-newsletter">
                            <h3>Let’s stay in touch</h3>
                            <div class="form-newsletter">
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control color-4" placeholder="Your Email Address">
                                    <span class="input-group-text" id="basic-addon4"><i
                                            class="fas fa-arrow-right"></i></span>
                                </div>
                                <p class="font-dark mb-0">Keep up to date with our latest news and special offers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <ul>
                            <li class="font-dark">We accept:</li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/1.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/2.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/3.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 font-dark">© 2023, Surfside Media.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade newletter-modal" id="newsletter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <img src="assets/images/newletter-icon.png" class="img-fluid blur-up lazyload" alt="">
                    <div class="modal-title">
                        <h2 class="tt-title">Sign up for our Newsletter!</h2>
                        <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                        <p class="font-light">Oh, and it's free!</p>

                        <div class="input-group mb-3">
                            <input placeholder="Email" class="form-control" type="text">
                        </div>

                        <div class="cancel-button text-center">
                            <button class="btn default-theme w-100" data-bs-dismiss="modal"
                                type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>$1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop-left-sidebar.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div
                                        class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/1.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/2.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/3.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/4.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div> --}}
    <div class="bg-overlay"></div>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/feather/feather.min.js')}}"></script>
    <script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>
    <script src="{{ asset('assets/js/slick/slick.js')}}"></script>
    <script src="{{ asset('assets/js/slick/slick-animation.min.js')}}"></script>
    <script src="{{ asset('assets/js/slick/custom_slick.js')}}"></script>
    <script src="{{ asset('assets/js/price-filter.js')}}"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ asset('assets/js/filter.js')}}"></script>
    <script src="{{ asset('assets/js/newsletter.js')}}"></script>
    <script src="{{ asset('assets/js/cart_modal_resize.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{ asset('assets/js/theme-setting.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>

    @stack('scripts')
    
</body>


</html>