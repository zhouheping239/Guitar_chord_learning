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
</body>
</html>
