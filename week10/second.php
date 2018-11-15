<?php 
	$makerOfCar = $_POST['maker'];
	$modelOfCar = $_POST['model'];
	$yearOfCar = $_POST['year']; 
	$engineOfCar = $_POST['engine'];
	$priceOfCar = $_POST['price'];

	function checkbox_verify($name){
		if(empty($_POST[$name])) return "no";
		return "yes";
	}

	echo "	<div>You added new item: <strong>$makerOfCar $modelOfCar</strong></div><br>
			<div>Produced in $yearOfCar(" .(2018-$yearOfCar). " years old) with $engineOfCar engine</div><br>
			<div>Tax payed:" .checkbox_verify('a1'). "</div><br>
			<div>Technical check passed:" .checkbox_verify('a2'). "</div><br>
			<div>Does not require investment:" .checkbox_verify('a3'). "</div><br>
			<div>$ $priceOfCar"
?>


