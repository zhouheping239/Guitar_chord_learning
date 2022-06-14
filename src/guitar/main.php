<?php

  $title = 'main';
  require_once './include/header.php';
  require_once './include/config.php';

  $top = $pass->getTopSongs();
  $feature = $pass->getFeatureSongs();
?>
 
<body>
<div class="center" style="position: relative; top: -700px; margin-top=30px">
  <h2 style="color:white; font-family: Times New Roman, Times, serif;">WELCOME TO BASIC GUTAR LEARNING!</h2>
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
      </tr>
    </thead>
    <tbody>
      <?php while($t = $top->fetch(PDO::FETCH_ASSOC)){ ?>
      <tr>
        <td> <a style="color:white"href="songchord.php?id=<?php echo $t['SongID'];?> ">
        <?php echo $t['Title']?> </a> </td> 
        <td><?php echo $t['SingerName']?></td>
      </tr>
      <?php }?>
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