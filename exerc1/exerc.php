<?php 

if(isset($_POST['firstname'])){
	$firstName = $_POST['firstname'];
}

if(isset($_POST['lastname'])){
	$lastName = $_POST['lastname'];
}
if(isset($_POST['address'])){
	$address = $_POST['address'];
}
if(isset($_POST['neighborhood'])){
	$neighborhood = $_POST['neighborhood'];
}
if(isset($_POST['city'])){
	$city = $_POST['city'];
}
if(isset($_POST['state'])){
	$state = $_POST['state'];
}

$aDados = array("First_Name"=>$firstName,"Last_Name"=>$lastName,"Address"=>$address,"Neighborhood"=>$neighborhood,"City"=>$city, "State"=>$state);

//print_r($aDados);

foreach ($aDados as $key => $value) {
	echo "$key : ".strtoupper($value)." <br />";
}
