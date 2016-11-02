<?php
	//var_dump($_SERVER);

//	echo $_SERVER['HTTP_CONNECTION'];
//	echo "</br>";
//	echo $_SERVER['HTTP_CACHE_CONTROL'];
//	echo "</br>";
//	echo $_SERVER['HTTP_ACCEPT'];
//	echo "</br>";
//	echo $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'];
//	echo "</br>";
//	echo $_SERVER['HTTP_USER_AGENT'];
//	echo "</br>";
//	echo $_SERVER['HTTP_ACCEPT_ENCODING'];
//	echo "</br>";
//	echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
//	echo "</br>";
//	echo $_SERVER['PATH'];
//	echo "</br>";
//	echo $_SERVER['COMSPEC'];
//	echo "</br>";
//	echo $_SERVER['PATHEXT'];
//	echo "</br>";
//	echo $_SERVER['WINDIR'];
//	echo "</br>";
//	echo $_SERVER['SERVER_SIGNATURE'];
//	echo "</br>";
//	echo $_SERVER['SERVER_SOFTWARE'];
//	echo "</br>";
//	echo $_SERVER['SERVER_NAME'];
//	echo "</br>";
//	echo $_SERVER['SERVER_ADDR'];
//	echo "</br>";
//	echo $_SERVER['SERVER_PORT'];
//	echo "</br>";
//	echo $_SERVER['REMOTE_ADDR'];
//	echo "</br>";
//	echo $_SERVER['SERVER_ADMIN'];
//	echo "</br>";
//	echo $_SERVER['SCRIPT_FILENAME'];
//	echo "</br>";
//	echo $_SERVER['REMOTE_PORT'];
//	echo "</br>";
//	echo $_SERVER['GATEWAY_INTERFACE'];
//	echo "</br>";
//	echo $_SERVER['SERVER_PROTOCOL'];
//	echo "</br>";
//	echo $_SERVER['REQUEST_METHOD'];
//	echo "</br>";
//	echo $_SERVER['QUERY_STRING'];
//	echo "</br>";
//	echo $_SERVER['REQUEST_URI'];
//	echo "</br>";
//	echo $_SERVER['SCRIPT_NAME'];
//	echo "</br>";
//	


echo "<table border='1'>";
	foreach ($_SERVER as $key => $value){
		echo "<tr>";
		echo "<td>$key</td>";
		echo "<td>$value</td>";
		echo "</tr>";
	}
echo "</table>";
	//var_dump();
//echo " 当前时间 ： ".date("Y-m-d H:i:s");
//echo "</br>";
//HTTP_USER_AGENT
//echo $_SERVER['REMOTE_IP'];
// $LINK=mysqli_connect("localhost","root","wo2095296");
// var_dump($LINK)
//echo $_SERVER['SELF'];
//echo "</br>";
//echo $_SERVER['REMOTE_ADDR'];
//echo "</br>";
//echo $_SERVER['HTTP_CLIENT_IP'];
//echo "</br>";
//echo $_SERVER['HTTP_X_FORWARDED_FOR'];
?>