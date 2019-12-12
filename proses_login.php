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


$username = $_POST['username'];
$password = $_POST['password'];

$cek_login = proses_login($username, $password);

print_r($cek_login);
if ($cek_login) {
    $_SESSION['username'] = $username;
    redirect_to("home-center");
} else {
    redirect_to("login_form&error=1");
}
?>