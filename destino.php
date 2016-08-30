<?php
if (strlen($_POST['mensaje'])> 5) 
{
	include "mayorAcinco.html";
	echo "hago algo";
}
else
{
	include "menorAcinco.html";
	echo "no hago nada";
}
?>