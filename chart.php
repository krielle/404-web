<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "gfl");
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
 
$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label untuk nama character nya, tipe string
	array('label' => 'character', 'type' => 'string'),
	//membuat label untuk charfav, tipe harus number untuk kalkulasi persentasenya
	array('label' => 'charfav', 'type' => 'number')
);
 
//melakukan query ke database select
$sql = $conn->query("SELECT * FROM fav");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
	//membuat array
	$temp = array();
	//memasukkan data pertama yaitu characternya
	$temp[] = array('v' => (string)$data['character']);
	//memasukkan data kedua yaitu charfavnya
	$temp[] = array('v' => (int)$data['charfav']);
	//memasukkan data diatas ke dalam array $rows
	$rows[] = array('c' => $temp);
}
 
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);
 
?>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
 
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
 
	function drawChart() {
 
		// membuat data chart dari json yang sudah ada di atas
		var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
 
		// Set options, bisa anda rubah
		var options = {'width':600,
					   'height':500};
 
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	}
    </script>
</head>
<body>
    
	<!--Div yang akan menampilkan chart-->
    <br><br><br><br>
    <div class="container">
      <h1>404 Favorite Member Chart</h1>
    </div>
    <div id="chart_div"></div>
	<br><br>
</body>
</html>