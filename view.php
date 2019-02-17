<?php
/***************************
Created by : 
Date	   : 
File Name  : 
Desc       : 
****************************/
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
$link = mysql_connect("localhost","root","") or die ("Conn err:" . mysql_error());

mysql_select_db("world") or die ("DB err:" . mysql_error());

function view(){

 			$sql="select * from city";
			$result=mysql_query($sql) or die ("Qry err:".mysql_error());
			$count=mysql_num_rows($result);
			echo "Total city count $count";
			echo "<table border=1>";
			echo "<tr>";
			echo "<td>City Name</td>";
			echo "</tr>";
				while($data=mysql_fetch_array($result)){		
			echo "<tr>";
			//echo "<td>$data[Name]</td>";
			echo"<td><a href='search.php?action=search&id=$data[Name]'>$data[Name]</a></td>";	
			echo "</tr>";
			}
			echo "</table>";
}
view();

?>
