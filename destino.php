<?php
if (strlen($_POST['mensaje'])> 5) 
{
	include "mayorAcinco.php";
	//echo "hago algo";
}
else
{
	include "menorAcinco.php";
	//echo "no hago nada";
}
?>