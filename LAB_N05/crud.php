<?php
/*llamar un archivo incluir el archivo y el once solo una vez lo va a cargar*/
include_once 'db.php';

/*insertar*/
if(isset($_POST['save']))
{
	/*real_escape_string valida que solo halla una cadena de caracteres*/
	$fn = $MySQLiconn->real_escape_string($_POST['fn']);
	$ln = $MySQLiconn->real_escape_string($_POST['ln']);

	/*query es un metedo */
	$SQL = $MySQLiconn->query("INSERT INTO data(fn,ln) VALUES('$fn','$ln')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}
/**/

/*delete*/
/*Se verifica si a pasado por url la varibale del*/
if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM data WHERE id=".$_GET['del']);
	/*recargue la pagina*/
	header("Location: index.php");
}

/**/

/*update*/
/*recibir*/
if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM data WHERE id =".$_GET['edit']);
	/*fetch_array la data que es un objeto aun arreglo*/
	$getROW = $SQL ->fetch_array();
}
if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE data SET fn='".$_POST['fn']."', ln='".$_POST['ln']."' WHERE id=".$_GET['edit']);
	header("Location: index.php");
}


