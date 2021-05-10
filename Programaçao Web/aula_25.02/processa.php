 <?php
	//$txt = $_POST["texto0"];
	for($i = 0; $i <=4; $i++)
	{
		$text = $_POST["texto$i"];
		echo $text."<br/>";
	}
 
 ?>