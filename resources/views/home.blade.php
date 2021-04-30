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
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
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
  background-color: #aaa;
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


<div class="row">
  <div class="side">
    <h3>About MegSkin</h3>
   <hr>
  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
  <img src="{{ '../vendor/adminlte/dist/img/3.jpeg' }}" alt="jhon" style="width:100%">
  <h4>Astuti Mega</h4>
  <p class="title">IF C 2019</p>
  <p>Universitas Suryakancana</p>
  <br>
</div>
  
  </div>
  <div class="main">
    <h2>INNISFREE</h2>
    <h5>Cianjur, April 1, 2021</h5>
<img src="{{ '../vendor/adminlte/dist/img/4.jpg' }}" alt="" style="width:100%">
    <p>Innisfree adalah merek all-natural pertama Korea Selatan, dan banyak bahan produk bersumber dari Pulau Jeju. Produk perusahaan berkisar dari makeup hingga produk perawatan kulit untuk wanita dan untuk pria. Produk Innisfree termasuk Super Volcanic Pore Clay Mask,[14] Olive Real Cleansing Foam,[15] dan Wine Peeling Jelly Softene</p>
    <br>
    <h2>LANEIGE</h2>
    <h5>Cianjur, April 1, 2021</h5>
    <img src="{{ '../vendor/adminlte/dist/img/5.jpg' }}" alt="" style="width:100%">
    <p>Laneige mengembangkan produk perawatan kulit, dengan beberapa bahan baku, yakni bahan kimia (magnesium, mangan, dan seng), bahan alami (khamir truffle dan teh hijau), serta bahan medis (asam salisilat, keratinase, ghassoul, dan melia yang diekstrak dari pepagannya).</p>
    <h2>NACIFIC</h2>
    <h5>Cianjur, April 1, 2021</h5>
    <img src="{{ '../vendor/adminlte/dist/img/6.jpg' }}" alt="" style="width:100%">
    <p>Nacific mengembangkan produk perawatan kulit, dengan beberapa bahan baku, yakni bahan kimia (magnesium, mangan, dan seng), bahan alami (khamir truffle dan teh hijau), serta bahan medis (asam salisilat, keratinase, ghassoul, dan melia yang diekstrak dari pepagannya).</p>
  </div>
</div>

<div class="footer">  
  <h2>Footer</h2>
</div>

</body>
</html>

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
</style>
@stop

@section('js')
        <script>console.log ('Hi!')</script>
@stop
