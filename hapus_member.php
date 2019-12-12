<?php

if(defined("IS_INDEX") == false)
{
    echo "<section class='py-5 text-center'>
    <div class='container'>
      <center><img src ='image/stop.png' class ='img-fluid' alt = 'stop' width ='300px'></center>
      <br><br><br>
      <h1><center>Please Follow the Tutorials, Commander!!</center></h1>
      <center><img src ='image/chibi1.jpg' class ='img-fluid' alt ='deve' width ='800px'></center>
      <br><br>
    </div>
  </section>";
  die();
}

$code = $_GET['code'];

hapus_member($code);

echo "<script>
    window.location='index.php?page=member';
    </script>";
?>
