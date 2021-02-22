<?php

session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>STORMLY</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
</head>

<body style="	background-color: rgba(196, 189, 189, 0.973);">
    <div class="bg-black">
    <!-- <nav class="navbar navbar-expand-lg navbar-warming bg-warning"class="navbar-background"> -->
      <!-- <nav class="navbar navbar-expand-lg navbar-danger bg-warning" class="navbar-background"> -->

        <nav class="navbar navbar-expand-lg navbar-custom" class="navbar-background">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                    <li class="nav-item">
                        <a class="navbar-brand app2-name" href="index.php"><img src="img/logo.png" class="img-responsive" id="logo" alt=""><strong>Stormly</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand app2-name"href="current.html"> &#160&#160&#160&#160&#160&#160Current</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand app2-name" href="forecast.html">&#160&#160&#160&#160&#160&#160Forecast</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand app2-name" href="about_us.html">&#160&#160&#160&#160&#160&#160About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="navbar-brand app2-name" href="feedback.html">&#160&#160&#160&#160&#160&#160Feedback</a>
                  </li>
                  <li class="nav-item">
                    <a class="navbar-brand app2-name" href="logout.php">&#160&#160&#160&#160&#160&#160Logout</a>
                </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </div>
</body>

</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>weather</title>
  </head>
  <body>
    <!-- <div class="bg-black"> -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="cloudy.jpg" width="1600" height="500" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="cold">SO COLD!!!</h5>
              <p class="cold">The coldest temperature ever officially recorded was -89.2°C. Brrrr!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1527722123791-ac58199069df?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"width="1600" height="500" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1504123010103-b1f3fe484a32?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"  width="1600" height="500" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="third-page">EERINESS!!!</h5>
              <p class="third-page">You can tell the temperature by counting a cricket’s chirps!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
    </div>



<div class="tag-line">
  <br><br> 
   <h2>Always Have Access to <span class="free">Stormly</span> at Your Fingertips, It's <span class="free">Free!!</span></h2> 
   <br><br> 
  </div>

<!-- cards -->


  <div class="container my-4"><div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static" style="background-color:rgb(211, 206, 206);">
          <h3 class="mb-0" style="font-family: 'Merriweather', serif;">Smog returns</h3>
          <br>
          <div class="mb-1 text-muted"></div>
          <p class="card-text mb-auto">Pollution in New Delhi dropped to a 20-year low during the COVID-19 national lockdown. Now with rising pollution levels,Delhi is losing the gains. For the first time since June,the city’s air </p>
          <a href="https://www.nrdc.org/experts/anjali-jaiswal/return-delhi-smog-even-more-life-threatening-covid" target="_blank" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="india-gate.jpg" width="369" height="310"  alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static" style="background-color:rgb(211, 206, 206);">
          <h3 class="mb-0" style="font-family: 'Merriweather', serif;">Heavy Downpour</h3><br>
          <!-- <div class="mb-1 text-muted">Nov 11</div> -->
          <p class="mb-auto">Tamil Nadu chief minister Edappadi K Palaniswami on Monday announced a relief of Rs 1,116.97 crore, under input subsidy head, towards the damages meted out to the</p>
          <a href="https://timesofindia.indiatimes.com/city/chennai/tamil-nadu-cm-announces-rs-1116-97-crore-relief-to-11-43-lakh-farmers-affected-by-crop-damage/articleshow/80635857.cms" target="_blank" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="downpour.jpg" width="369" height="310" alt="">
        </div>
      </div>
    </div>
  </div></div>









  <div class="container my-4"><div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static" style="background-color:rgb(211, 206, 206)";>
          <h3 class="mb-0" style="font-family: 'Merriweather', serif;">North India Shivers</h3><br>
          <!-- <div class="mb-1 text-muted">Nov 12</div> -->
          <p class="card-text mb-auto">A cold wave gripped the national capital too as frosty winds from the snow-clad western Himalayas brought the minimum temperature </p>
          <a href="https://www.ndtv.com/india-news/north-india-shivers-as-srinagar-records-lowest-temperature-in-8-years-2352120" target="_blank" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="snow.jpg" width="369" height="300"  alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static" style="background-color:rgb(211, 206, 206)";>
          <h3 class="mb-0" style="font-family: 'Merriweather', serif;">Thunderstorm</h3><br>
          <!-- <div class="mb-1 text-muted">Nov 11</div> -->
          <p class="mb-auto">Thunder and lightning have sparked awe and fear in humans since time immemorial. In both modern and ancient cultures, these natural phenomena are often thought to be governed </p>
          <a href="https://theconversation.com/thunderstorms-create-radioactivity-scientists-discover-87946" target="_blank" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="thunder-storm.jpg" width="369" height="300" alt="">
        </div>
      </div>
    </div>
  </div></div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
        <!-- </div> -->
  </body>
</html>