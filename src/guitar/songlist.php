<?php

  $title = 'songlist';
  require_once './include/header.php';
  require_once './include/config.php';

  $results = $pass->getSongs();
?>

<body>
<div class="container" style="position: relative; top:-850px; right: 300px; margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2 style="color:white;">Song List:</h2>
      <?php 
        while($song = $results->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <div class="col-md-5">
        <a href="songchord.php?id=<?php echo $song['SongID'];?> ">
        <h4 style="color:white"><?php echo $song['Title'];?></h4>
        </a>
      </div>
      <?php } ?>
      </div>
   </div>
</div>

</body>
