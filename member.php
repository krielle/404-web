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

<br><br><br><br>
<h3>Member Data
    <span class="float-right">
        <a href="index.php?page=form_add_member" class = " btn btn-dark">Add Member
        </a>    
    </span>
</h3>

<?php
    $data = get_data_member();
?>
<br>
<table class="table table-bordered">
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    <?php
        while($row = mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$row['code']."</td>
            <td>".$row['name']."</td>
            <td>".$row['address']."</td>
            <td>
                <a href='index.php?page=edit_member&code=".$row['code']."'>Edit</a> |
                <a href='index.php?page=hapus_member&code=".$row['code']."'>Hapus</a>
            </td>
        </tr>";
        }
    ?>
</table>
<br><br><br><br>