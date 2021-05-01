@extends('adminlte::page')

@section('title', 'MegSkin')

@section('content_header')
    <!-- <h1> Welcome to MegSkin</h1> -->
@stop

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  /* background: #1abc9c; */
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: white;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */


/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: white;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
  <img src="{{ '../vendor/adminlte/dist/img/1.jpg' }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ '../vendor/adminlte/dist/img/orchid.jpg' }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=" {{ '../vendor/adminlte/dist/img/sparkling.jpg' }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


<!-- <div class="row">
  <div class="side">
    <h3>About MegSkin</h3>
   <hr>
  Add icon library
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <div class="card">
  <img src="{{ '../vendor/adminlte/dist/img/3.jpeg' }}" alt="jhon" style="width:100%">
  <h4>Astuti Mega</h4>
  <p class="title">IF C 2019</p>
  <p>Universitas Suryakancana</p>
  <br>
</div> -->

  
  <!-- </div> -->
  <div class="main">
  <h2 style="text-align:center; text-family:bold;">BEST SELLER</h2>
  </div>
<div class="row">
<div class="column">
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="{{ '../vendor/adminlte/dist/img/1 (1).jpg' }}" alt="Paris" style="width:300px;height:200px">
    </div>
    <div class="flip-box-back">
      <h2>Innisfree</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aliquam omnis itaque recusandae, sed beatae, deserunt voluptatum provident unde accusantium dolorem quod placeat debitis quisquam iste fugit fuga libero iusto!</p>
    </div>
    
  </div>
</div>
</div>

<div class="column">
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="{{ '../vendor/adminlte/dist/img/1 (3).jpg' }}" alt="Paris" style="width:300px;height:200px">
    </div>
    <div class="flip-box-back">
      <h2>Laneige</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, ea doloribus voluptas laborum neque dignissimos minima. Mollitia nihil, officiis aliquam aliquid totam quis rem quos, suscipit optio veritatis reiciendis sequi.</p>
    </div>
    
  </div>
</div>
</div>

<div class="column">
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="{{ '../vendor/adminlte/dist/img/1 (2).jpg' }}" alt="Paris" style="width:300px;height:200px">
    </div>
    <div class="flip-box-back">
      <h2>Nacific</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, dolore totam. Vero nesciunt nulla, aut reprehenderit natus porro repellat inventore assumenda voluptatum non maiores perspiciatis. Maxime inventore quia odit eveniet?</p>
    </div>
    
  </div>
</div>
</div>
</div>
<br>
<br> <br> <br>

    <!-- The video -->
<div class="videoy"><video autoplay muted loop id="myVideo">
  <source src="{{ '../vendor/adminlte/dist/img/8.mp4' }}" type="video/mp4">
</video>
</div>
<!-- Optional: some overlay text to describe the video -->
<br>
<br> <br> <br>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width slides/quotes -->
  <div class="mySlides">
    <q>Innisfree is a naturalism-oriented cosmetics brand created by Amore Pacific in 2000. The brand name derives from Irish poet W. B. Yeats' poem, 'The Lake Isle of Innisfree'. It has stores in South Korea, Hong Kong, China, Japan, Taiwan, Singapore, Malaysia, Thailand, Vietnam, Indonesia, Philippines, India, United States, Canada, Australia, and United Arab Emirates.

Innisfree's brand concept emphasises nature with particular reference to Jeju Island, South Korea.[1]</q>
    <p class="author">- Innisfree</p>
  </div>

  <div class="mySlides">
    <q>Laneige (Hangul: 라네영) is a South Korean cosmetics brand owned by Amorepacific Corporation. [1]

The Laneige brand was launched by Amore Pacific in 1994. [2] The brand name is derived from the french word La Neige meaning Snow.</q>
    <p class="author">- Laneige</p>
  </div>

  <div class="mySlides">
    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur alias omnis voluptatibus tenetur. Sequi voluptates quaerat ipsam quia dicta repudiandae nemo adipisci nihil temporibus error accusantium consequatur, enim voluptatum.</q>
    <p class="author">- Nacific</p>
  </div>

  <!-- Next/prev buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


</body>
</html>
@stop
@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
    </div>
    <strong>CopyRight &copy; {{date('Y')}}
    <a href="" target="_blank">MegSkin</a>.</strong> All Right reserved
@stop

@section('css')
<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 200px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 14px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 14px;
}

a {
  text-decoration: none;
  font-size: 15px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

/* The flip box container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid transparent;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-box-front {
  background-color: transparent;
  color: black;
}

/* Style the back side */
.flip-box-back {
  /* background-color: transparent; */
  color: black;
  transform: rotateY(180deg);
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}

* {
  box-sizing: border-box;
}



#myVideo {
  
  right: 20px;
  bottom: 30px;
  max-width:900px;
  display: block;
margin-left: auto;
margin-right: auto;
}


/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
  text-align: center;
  padding: 20px;
  background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}

</style>
@stop

@section('js')
        <script>console.log ('Hi!')</script>

        <script>var video = document.getElementById("myVideo");
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}</script>
@stop
