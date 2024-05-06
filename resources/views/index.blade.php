@extends('layouts.main')
@section('container') 
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid px-0">
          <a class="navbar-brand font-weight-bolder ms-sm-3" href="/polusi-app" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
            Polusi App
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                  Pages
                  <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                </a>
                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                          <div class="d-none d-lg-block">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Landing Pages
              </h6>
              <a href="#information" class="dropdown-item border-radius-md">
                  <span>About Us</span>
              </a>
              <a href="#kontak" class="dropdown-item border-radius-md">
                  <span>Contact Us</span>
              </a>
          
             
              </div>
           
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </div>
  </div>
</div>

<!-- header -->
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('/assets/img/banjir.png')">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">PERINGATAN DAN PENCEGAHAN BANJIR BERBASIS IOT</h1>
          <p class="lead text-white mt-3">Website ini terhubung dengan sistem IOT untuk otomatisasi dinding penghalang banjir dan monitoring ketinggian air dan cuaca. 
          </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <!-- kunjungan -->
<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto py-3">
        <div class="row">
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"><span id="current-time"></span></h1>
              <h5 class="mt-3">Waktu</h5>
             
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"> <span >0</span></h1>
              <h5 class="mt-3">Titik Terjadi Banjir</h5>
              
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary" >5</h1>
              <h5 class="mt-3">Titik Pengamatan</h5>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- information -->
<section class="pt-5 pb-5" id="information">
  <div class="container">
    <div class="row">
      <div class="col text-center my-3">
        <span class="text-4xl text-center font-weight-bold text-dark my-2 mx-2"><i class="material-icons text-dark text-4xl my-3">opacity</i>Nilai Ketinggian air</span>
        <div><h5>Nilai ketinggian Air dihitung dari daratan terhadap ketinggian air </h5></div>
      </div>
     
    </div>
   
  </div>
  <div class="container">
    <div class="row">

      <div class="col-lg-12 pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">150 - 200 CM  - Sangat Aman</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 16%;"></div>
          </div>
        </div>
      </div>
  
      <div class="col-lg-12  pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">100 - 150 CM  - Aman</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">0 - 100 CM -  Hati- Hati</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%; background-color: orange;"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">0 - 100 CM Diatas Pemukaan  - Bahaya</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">100 - 200 CM Diatas Permukaan - Sangat Bahaya</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color: blueviolet;"></div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  
</section>


<section class="my-5 py-5" id="titik">
  <div class="container">
    <div class="row">
      <div class="col text-center my-3">

        <span class="text-4xl text-center font-weight-bold text-dark my-2 mx-2"><i class="material-icons text-dark text-4xl my-3">location_on</i>Titik Pengamatan dan kualitas</span>
      </div>
     
    </div>
  </div> 
  <div id="point-utama" class="container d-flex ">
      
    @foreach ($posts as $post)
    <div class="row">
      <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">
          <div id="point1" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="opacity: 0.5 ;">
            <div id="point1" class="back back-background" style="opacity: 0.5 !important; cursor: pointer;" >
              <iframe src="{{ $post["maps"] }}" width="400" height="350" ></iframe>
              
            </div> 
            <div class="card-body text-center ">
              <span id="point1"></span>
              <h3 class="text-white">{{ $post["lokasi"] }}</h3>
              <a href="/detail/{{ $post["slug"] }}" class="btn btn-white btn-sm w-70 mx-auto">Selengkapnya</a>
            </div>
          </div>    
      </div>
    </div>
    @endforeach
    
      
   
  </div>
 

</section>


<section class="my-8">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-12 my-auto">
          <h3 class="text-gradient text-primary mb-0">Notification Realtime</h3>
          <h3>Bagaimana cara kerja dan cara mendapat notifikasi sistem banjir?</h3>
          <p class="pe-md-5 mb-4">
            Sistem notifikasi banjir bekerja dengan memberikan email terhadap ketinggian air dimana kondisi dalam kondisi sangat aman, aman, hati- hati, bahaya, sangat bahaya, user bisa mendaftar informasi dengan registrasi di website ini. Stay Safe your Family.
          </p>
          <div class="github-buttons mb-5">
            <a href="/daftar"  class="btn bg-gradient-primary mb-5 mb-sm-0">Registrasi</a>
            <div class="github-button">
              <span></span>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-12 my-auto">
          <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2">
            <img class="w-75 border-radius-lg shadow-lg" src="/assets/img/notifikasi.png" alt="Product Image">
          </a>
        </div>
      </div>
    </div>
  </section>
  

<section id="kontak">
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center">Contact us</h3>
        <form role="form" id="contact-form" method="post" autocomplete="off">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <label class="form-label">First Name</label>
                  <input class="form-control" aria-label="First Name..." type="text" >
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <div class="input-group input-group-dynamic">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-dynamic">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="input-group mb-4 input-group-static">
              <label>Your message</label>
              <textarea name="message" class="form-control" id="message" rows="4"></textarea>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer pt-5 mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3 mb-4 ">
        <div>
          <a href="https://www.creative-tim.com/product/material-kit">
            <img src="./assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
          </a>
          <h6 class="font-weight-bolder mb-4">Polusi App</h6>
        </div>
     
      </div>



      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Company</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="#about" target="_blank">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#titik" target="_blank">
                Services
              </a>
            </li>
          </ul>
        </div>
      </div>


      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Help & Support</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="#kontak" target="_blank">
                Contact Us
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#kontak" target="_blank">
                Knowledge Center
              </a>
            </li>
          </ul>
        </div>
      </div>


      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> Material Kit by <a href="https://www.linkedin.com/in/imam-abdul-fatah/" target="_blank">Imam Abdul Fatah</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
@endsection
