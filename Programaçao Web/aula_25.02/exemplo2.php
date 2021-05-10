<?php

	echo"<form method=\"POST\" action=\"processa.php\">";
	for($i = 0 ; $i <=4; $i++)
	{
	 echo" $i :<input type=\"text\" name=\"texto$i\"><br>";
	}
	echo"<input type=\"submit\" value=\"Enviar\"><br>";
	echo"</form>";
?>