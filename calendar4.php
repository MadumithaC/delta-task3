<!DOCTYPE html>
<?php 
$servername = "localhost";
$username = "root";
$psw = "";
$dbname = "appointments";
$con5 = new mysqli($servername, $username, $psw, $dbname);
if ($con5->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<style>
	table {
font-family: 'Aclonica';
		width: 100%;
		height:600px;
		background-color: #eeaeee;
    border-spacing: 0;
    text-align: center;
    border: 1px solid #ddd;
}
tr, td {
	border: 1px solid #ddd;
}
.btn {
    background-color: #008cba; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 6px;
}

	</style>
	<script>
		function prevmonth(month, year) {
           if(month==1) {
           	--year;
           	month=13;
           }
           --month;
           var monthnum = ""+month+"";
           var mlen = monthnum.length;
           if(mlen<= 1) {
           	monthnum= "0"+monthnum;
           }
           document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthnum+"&year="+year;
		}
		 function nextmonth(month, year) {
             if(month==12) {
           	++year;
           	month=0;
           }
           ++month;
           var monthnum = ""+month+"";
           var mlen = monthnum.length;
           if(mlen<= 1) {
           	monthnum= "0"+monthnum;
           }
           document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthnum+"&year="+year;
		 }
	</script>
	</head>
<body>
<?php
if(isset($_GET['day'])) {
	$day = $_GET['day'];
}
else {
	$day = date("j"); 
}
if(isset($_GET['month'])) {
	$month = $_GET['month'];
}
else {
$month = date("n");
}
 if(isset($_GET['year'])) {
 	$year = $_GET['year'];
 }
 else {
$year = date("Y");
}

$currenttimestamp = strtotime("$year-$month-$day");
$monthname = date("F", $currenttimestamp);
$numdays = date("t", $currenttimestamp);
$weekcount = 0;
?>

	<table>
		<tr>
		<td><input type="button" class="btn" value="<" name="previousbutton" onclick="prevmonth(<?php echo $month.",".$year?>)"></td>
		<td colspan="5"><?php echo $monthname.", ".$year; ?></td>
		
		<td><input type="button" class="btn" value=">" name="nextbutton" onclick="nextmonth(<?php echo $month.",".$year?>)"></td>
	</tr>
	<tr>
		<td>Sun</td>
		<td>Mon</td>
		<td>Tue</td>
		<td>Wed</td>
		<td>Thu</td>
		<td>Fri</td>
		<td>Sat</td>
	</tr>
	<?php
     echo "<tr>";

    for($i=1; $i<$numdays; $i++, $weekcount++) {
    	$timestamp = strtotime("$year-$month-$i");
    	if($i==1) {
    		$firstday = date("w", $timestamp);
    	
    	for($j=0; $j<$firstday;$j++,$weekcount++) {
    		echo "<td>&nbsp;</td>";
    	}
    }
if($weekcount%7 ==0) {
	echo "</tr><tr>";
}

$monthnum = $month;
$mlen = strlen($monthnum);
$daynum = $i;
$dlen = strlen($daynum);

           
           if($mlen<= 1) {
           	$monthnum= "0".$monthnum;
           }
            if($dlen<= 1) {
           	$daynum= "0".$daynum;
           }

echo "<td align ='center'><a href='".$_SERVER['PHP_SELF']."?month=".$monthnum."&day=".$daynum."&year=".$year."&v=true'>".$i."</a></td>";
}

     echo "</tr>";

	?>	


	</table>
	<?php
	if(isset($_GET['v'])) {
		echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Add Appointment</a>";
		if(isset($_GET['f'])) {
			include("addform.php");
		}
	}
	?>
</body>
</body>
</html>