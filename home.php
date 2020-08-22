<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

	<style>
	@import url("https://fonts.googleapis.com/css?family=Hind:400,700");
html, body {
  font-family: 'Hind', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #d9e2fd;
  width: 100%;
  height: 100%;
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}

h3 {
  text-align: center;
  font-weight: 400;
  margin-bottom: 0;
}

.carousel-wrapper {
  position: relative;
  width: 70%;
  height: 70%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #FFFFFF;
  background-image: linear-gradient(#FFFFFF 50%, #FFFFFF 50%, #F0F3FC 50%);
  box-shadow: 0px 12px 39px -19px rgba(0, 0, 0, 0.75);
  overflow: hidden;
}
.carousel-wrapper .carousel {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  height: auto;
}
.carousel-wrapper .carousel .carousel-cell {
  padding: 10px;
  background-color: #FFFFFF;
  width: 20%;
  height: auto;
  min-width: 120px;
  margin: 0 20px;
  transition: transform 500ms ease;
}
.carousel-wrapper .carousel .carousel-cell .more {
  display: block;
  opacity: 0;
  margin: 5px 0 15px 0;
  text-align: center;
  font-size: 10px;
  color: #CFCFCF;
  text-decoration: none;
  transition: opacity 300ms ease;
}
.carousel-wrapper .carousel .carousel-cell .more:hover, .carousel-wrapper .carousel .carousel-cell .more:active, .carousel-wrapper .carousel .carousel-cell .more:visited, .carousel-wrapper .carousel .carousel-cell .more:focus {
  color: #CFCFCF;
  text-decoration: none;
}
.carousel-wrapper .carousel .carousel-cell .line {
  position: absolute;
  width: 2px;
  height: 0;
  background-color: black;
  left: 50%;
  margin: 5px 0 0 -1px;
  transition: height 300ms ease;
  display: block;
}
.carousel-wrapper .carousel .carousel-cell .price {
  position: absolute;
  font-weight: 700;
  margin: 45px auto 0 auto;
  left: 50%;
  transform: translate(-50%);
  opacity: 0;
  transition: opacity 300ms ease 300ms;
}
.carousel-wrapper .carousel .carousel-cell .price sup {
  top: 2px;
  position: absolute;
}
.carousel-wrapper .carousel .carousel-cell.is-selected {
  transform: scale(1.2);
}
.carousel-wrapper .carousel .carousel-cell.is-selected .line {
  height: 35px;
}
.carousel-wrapper .carousel .carousel-cell.is-selected .price, .carousel-wrapper .carousel .carousel-cell.is-selected .more {
  opacity: 1;
}
.carousel-wrapper .flickity-page-dots {
  display: none;
}
.carousel-wrapper .flickity-viewport, .carousel-wrapper .flickity-slider {
  overflow: visible;
}

.panel-body{
	height:200px;
}
.search{
	position-right:400px;
	position-left:30px;
	float:right;
	
	margin-right:150px;
}
.img{
	margin-top:150px;
}




</style>
		
		
		
    <title>amazon.in</title>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" <img src="img0.png"></a>
   <img src="img0.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          options
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Home</a>
          <a class="dropdown-item" href="#">Shop by category</a>
		  <a class="dropdown-item" href="#">Todays Deals</a>
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="#">Your Order</a>
		  <a class="dropdown-item" href="#">Buy Again</a>
		  <a class="dropdown-item" href="#">Your Wishlist</a>
		  <a class="dropdown-item" href="#">Your Account</a>
          <a class="dropdown-item" href="#">Sell on Amazon</a>
        </div>
      </li>
    </ul>

 

  <div class="search"
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
	 </div>
</nav>
	
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img3.png" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="img4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



	<div class="card-deck">
  <div class="card">
    <img src="img1.1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Home essential || Amazon brand & more</h5>
      <p class="card-text">Decorate your House with different bedsheets and different type of home accesory</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="img1.2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Donations, recharges, bills, medicines & more</h5>
      <p class="card-text">Life become easier when you recharge with Amazonpay and get upto 50% discount </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="img1.3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Top picks for your home</h5>
      <p class="card-text">Decorate your house with different type of electronics and enjoy your life </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>


	<div class="carousel-wrapper">
  <div class="carousel" data-flickity>
    <div class="carousel-cell">
      <h3>Product 1</h3>
      <a class="more" href="">Explore more</a>
      <img src="img2.1.png" />
      <div class="line"></div>
      <div class="price">
        <span>250<sup>rupee</sup></span>
      </div>
    </div>
    <div class="carousel-cell">
      <h3>Product 2</h3>
      <a class="more" href="">Explore more</a>
      <img src="img2.2.png" />
      <div class="line"></div>
      <div class="price">
        <span>19000<sup>rupee</sup></span>
      </div>
    </div>
    <div class="carousel-cell">
      <h3>Product 3</h3>
      <a class="more" href="">Explore more</a>
      <img src="img2.3.png" />
      <div class="line"></div>
      <div class="price">
        <span>120<sup>rupee</sup></span>
      </div>
    </div>
  </div>
</div>
<div class="img">
<img src="img5.png">
</div>

	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>