<?php

  $title = 'songchord';
  require_once './include/header.php';
  require_once './include/config.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $pass->getSongDetail($id);
  }
  else{
    echo "Error on parsing id from database.";
  }

?>

<body>

<div class="container" style="position: relative; top:-900px; right: 300px; margin-top:30px;">
  <div class="row">
    <h2 style="color:white;"> <?php echo $result['Title'];?></h2>
     <div class="col-md-5" style="top:50px; right:140px">
        <div min-width: 936px;  min-height: 475px;>
        <p style="color:white"> <b>Singer:</b> <?php echo $result['SingerName'];?></p>
        <p style="color:white"> <b>Tuning:</b> <?php echo $result['Tuning'];?></p>
        <p style="color:white"> <b>Capo:</b> <?php echo $result['Capo'];?></p>
        <p style="color:white"> <b>Key:</b> <?php echo $result['GuitarKey'];?></p>
        <img src="<?php echo $result['Lyrics'];?>">
        </div>  
      </div>
    </div>
</div>

</body> 