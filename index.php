


<HTML>
<HEAD>
</HEAD>

<BODY>
<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">

<form method = "POST" action = "destino.php"> 
<input type = "text" name = "mensaje" >
<input type = "submit" >

</form>

</BODY>

</HTML>

<?php
echo "Hola php"."<br>";
echo "muestro la variable REQUEST"."<br>";
var_dump($_REQUEST);
echo "<br>";
echo "muestro la variable GET "."<br>";
var_dump($_GET);
echo "<br>";
echo "muestro la variable POST"."<br>";
var_dump($_POST);
echo "<br>";


if (isset($_POST['mensaje'])) 
{
	echo $_POST['mensaje'];
}
else
{
	echo "Primer ingreso...";
}

?>