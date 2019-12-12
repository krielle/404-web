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
<h3>
	Edit Member Form
    <span class="float-right">
        <a href="index.php?page=member" class = " btn btn-dark">
        	Back
        </a>    
    </span>
</h3>
<br/>

<?php
	$code = $_GET['code'];
	$data = get_member_by_code($code);
?>


<form action="index.php?page=update_member" method="post">

	<input type="hidden" name="code" value="<?php echo $code;?>" />

	<table>
		<tr>
			<td>Name</td>
			<td>:</td>
			<td><input type="text" name="name" value="<?php echo $data['name'];?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td>:</td>
			<td><input type="text" name="address" value="<?php echo $data['address'];?>"></td>
		</tr>
		<td></td>
		<td></td>
		<td><input type="submit"/></td>
	</table>
	
</form>
<br><br><br><br>