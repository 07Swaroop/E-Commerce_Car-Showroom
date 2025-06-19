<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>$(document).ready(function () {
      $('.slider').bxSlider({ auto: true, mode: 'fade', controls: false, pager: true, touchEnabled: false, speed: 1000 });


    });</script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .book {
      background-color: #f8f8f8;
      font-family: 'Segoe UI', sans-serif;
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .booking-container {
      max-width: 700px;
      margin: 50px auto;
      padding: 30px;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .booking-title {
      text-align: center;
      margin-bottom: 30px;
      font-weight: 700;
      color: #701818;
    }

    .form-label {
      font-weight: 500;
      color: #333;
    }

    .btn-book {
      background-color: #6e1212;
      color: #fff;
      font-weight: 600;
      border: none;
      padding: 10px 25px;
      border-radius: 5px;
    }

    .btn-book:hover {
      background-color: #6e1212;
    }

    .form-section {
      margin-bottom: 20px;
    }

    @media (max-width: 576px) {
      .booking-container {
        padding: 20px;
      }
    }

    /* hondapage */
    /* body {
          background-color: #f8f9fa;
        } */
    .ctopen {
      font-size: 30px;
      font-weight: 600;
      color: #6b1d1c;
    }

    .rating-badge {
      background-color: #1cb14a;
      color: white;
      padding: 0.25rem 0.5rem;
      border-radius: 5px;
      font-weight: 500;
    }

    .car-img {
      width: 80%;
      height: 400px;
      justify-content: center;
      margin-left: 50px;
    }

    .price-box {
      background-color: #fff;
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 0.5rem;
      margin-top: 120px;
    }

    .btn-red {
      background-color: #a12222;
      color: white;

    }

    .btn-red:hover {
      background-color: #a51919;
    }

    .slider-container {
      overflow: hidden;
      position: relative;
    }

    .slider-track {
      display: flex;
      gap: 15px;
      animation: scrollSlider 30s linear infinite;
    }

    .car-card {
      flex: 0 0 auto;
      width: 250px;
      background: white;
      border-radius: 12px;
      padding: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .carimg1 {
      width: 100%;
      max-height: 120px;
      object-fit: contain;
      margin-left: -25px;
    }

    .compare-link {
      font-size: 14px;
      color: #6b1d1c;
      margin-top: 10px;
      display: block;
    }

    @keyframes scrollSlider {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    /* Optional: duplicate content for seamless loop */
    .slider-track>* {
      scroll-snap-align: start;
    }

    .car-card button {
      font-size: medium;

    }

    /* tabing content */
    .nav-tabs .nav-link {
      color: #000;
      border: 1px solid #dfdcdc;
      background-color: white;
    }

    .nav-tabs .nav-link.active {
      background-color: rgb(95, 143, 95);
      color: #fff;
      border-color: rgb(95, 143, 95);
    }

    .tab-content {
      background-color: white;
    }

    .tab-content h5 {
      color: #b85c00;
      font-weight: bold;
    }

    .tab-content p {
      font-size: 17px;
    }

    .tab b {
      font-size: 20px;

    }

    .tab-content {
      border: 1px solid rgb(238, 235, 235);
      padding: 20px;
    }

    .services {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      background: #fff;
      border-radius: 10px;
      margin: 40px 0px;
    }

    .service-item {
      text-align: center;
      margin: 10px;
    }

    .service-item img {
      width: 40px;
      margin-bottom: 8px;
    }

    /* contact */
    .contact-info {
      text-align: center;
      border: 1px solid #e0e0e0;
      padding: 20px;
      height: 100%;
      background-color: #f9f9f9;
      border-radius: 8px;
    }

    .contact-info i {
      font-size: 2rem;
      color: #333;
    }

    .contact-info h6 {
      color: orange;
      margin-top: 10px;
      font-weight: bold;
    }

    .form-control,
    .form-label {
      margin-bottom: 15px;
    }

    .map-responsive {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-responsive iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
  </style>
</head>

<body>
  <header>
    <div class="mrq">
      <marquee behavior="scroll" direction="left">Welcome to Fail Wheels! Enjoy Exciting discounts and atest arrivals
      </marquee>
    </div>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="Images/logofinal1.png" class="im1" height="70px" width="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutcar.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="Honda.php" role="button" data-toggle="dropdown"
                aria-expanded="false">
                Product
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="category.php?viewid=6">Honda</a>
                <a class="dropdown-item" href="category.php?viewid=7">Mahindra </a>
                <a class="dropdown-item" href="category.php?viewid=8">Maruti</a>
                <a class="dropdown-item" href="category.php?viewid=9">Toyota</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactdemo.php">Contact</a>
            </li>
            <li>
              <a class="nav-link" href="cart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span id='cart-item'> </span></a>
              
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>