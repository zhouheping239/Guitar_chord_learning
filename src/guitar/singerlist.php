<?php

  $title = 'songlist';
  require_once './header.php';
  require_once './config.php';

  $results = $pass->getSingers();
?>

<body>
<div class="container" style="position: relative; top:-850px; right: 300px; margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2 style="color:white;">Singer List:</h2>
      <?php 
        while($singer = $results->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <div   min-width: 936px;  min-height: 475px;>
        <a href = "google.com">
        <h4 style="color:white"><?= $singer['SingerName'];?></h4>
        </a>
      </div>
      <?php } ?>
      </div>
   </div>
</div>

</body>