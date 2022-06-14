<!DOCTYPE html>
<html lang="en">
<head>
<title>Basic Guitar Learning</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            width: 100%;
            height: 100vh;
            background-color: black;
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url("/guitar/images/guitar.jpg");
            background-size: cover;
            background-position: center;
        }
        .center {
          text-align:center
        }

    </style>
</head>

<body>
<div class="center" style="position: relative; top: 350px; margin-top=30px">
  <h2 style="color:white; font-family: Times New Roman, Times, serif;">WELCOME TO BASIC GUTAR LEARNING!</h2>
</div>
<div class="banner">
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Basic Guitar Learning</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-2">
        <li class="nav-item active">
          <a class="nav-link" href="./main.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./songlist.php">Song List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./singerlist.php">Singer List</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Chords
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Rock</a>
            <a class="dropdown-item" href="#">Pop</a>
            <a class="dropdown-item" href="#">Jazz</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Others</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</div>

<div class="container" style="position: relative; top:-360px; left:800px; margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2 style="color:white;">Top 5 Songs<span class="badge badge-danger">Hot!</h2>
      <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Singer</th>
        <th>Title</th>
        <th>Genre</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
    </div>
    <div class="col-sm-8"style="position: relative; left:-800px; top:-360px; margin-top=30px">
      <h2 style="color:white;">RECOMMENDED EASY SONG'S CHORD TO PLAY</h2>
      <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/loststars.jpg" alt="Lost Stars" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Lost Stars</h3>
        <p>by Adam Levine</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/watermelon3.png" alt="Watermelon Sugar" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Watermelon Sugar</h3>
        <p>by Harry Styles</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/bestpart.jpg" alt="Best Part" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Best Part</h3>
        <p>by Daniel Caesar feat. H.E.R</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  </div>
</div>
<div class="container" style="position: relative; left:-300px; top:-1200px">
  <h1 style="color:white">Genres</h1>
  <div class="btn-group-vertical btn-group-lg">
    <button type="button" class="btn btn-primary">Rock</button>
    <button type="button" class="btn btn-primary">Pop</button>
    <button type="button" class="btn btn-primary">Country</button>
  </div>
</div>
<div style="background-color: black" class="jumbotron text-center" style="margin-top:200px">
  <p style="font-weight:bold; color:orange">Basicguitarlearning.com</p>
</div>
</body>
</html>