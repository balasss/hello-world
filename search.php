<?php
/***************************
Created by : 
Date	   : 
File Name  : 
Desc       : 
****************************/
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
$link = mysqli_connect("localhost","root","") or die ("Conn err:" . mysqli_error());

mysqli_select_db("world") or die ("DB err:" . mysqli_error());
	    $action=$_REQUEST['action'];
		$id=$_REQUEST['id'];
		
		$sql="select * from city where id='$id'";
		$row=mysqli_query($sql) or die ("qry_err".mysqli_error());
		 echo $data= mysqli_fetch_array($row);
		
				echo '<br/> ID: '.$data['ID'];
	            echo '<br/> Name: '.$data['Name'];
				echo '<br/> CountryCode: '.$data['CountryCode'];
	            echo '<br/> District: '.$data['District'];
				echo '<br/> Population: '.$data['Population'];
		

?>
