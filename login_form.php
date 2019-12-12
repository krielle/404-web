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
?>
<br><br><br>
<div class="container">
        <div class="row d-flex align-items-center justfy-content-center">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['error'])) {
                            if ($_GET['error'] == 1) { ?>
                                <h4 class="text-danger">Username atau password salah.</h4>
                        <?php }
                        } ?>
                        <form action="index.php?page=proses_login" method="post">
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="username">
                            </div>
                            <b></b>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
<br><br><br>