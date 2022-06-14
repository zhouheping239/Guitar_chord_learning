<?php

  $title = 'songchord';
  require_once './header.php';
  require_once './config.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $results = $pass->getSongDetail($id);
  }
  else{
    echo "YOU FUCKED UP";
  }

?>

<body>

<div class="container" style="position: relative; top:-900px; right: 300px; margin-top:30px;">
  <div class="row">
    <h2 style="color:white;"> <?php echo $results['Title'];?></h2>
     <div class="col-md-5" style="top:40px; ">
        <div min-width: 936px;  min-height: 475px;>
        <p style="color:white"> <b>Singer:</b> <?php echo $results['SingerName'];?></p>
        <p style="color:white"> <b>Tuning:</b> <?php echo $results['Tuning'];?></p>
        <p style="color:white"> <b>Capo:</b> <?php echo $results['Capo'];?></p>
        <p style="color:white"> <b>Key:</b> <?php echo $results['GuitarKey'];?></p>
        </div>  
      </div>
    </div>
</div>

</body> 