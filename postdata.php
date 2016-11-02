<?php
	/*if(!empty($_POST)){
		$d1=$_POST['data1'];
$d2=$_POST['data1'];
echo "d1=$d1,d2=$d2";
echo "<hr/>";
var_dump($_POST);
	}else{
		echo "error!";
	}*/
	$data3=$_POST['data3'];
	$data4=$_POST['data4'];
	$yuansuan=$_POST['yuansuan'];
	if($yuansuan=="+"){
		$result="$data3"+"$data4";
	}else if($yuansuan=="-"){
		$result="$data3"-"$data4";
	}else if($yuansuan=="*"){
		$result="$data3"*"$data4";
	}
	
	echo $result;

?>