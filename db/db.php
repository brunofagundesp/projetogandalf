<?php
$db_host = "senacprojeto.database.windows.net";
$db_name = "PI2";
$db_user = "senacii";
$db_pass = "Senac2017";
$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";

if(!$db = odbc_connect($dsn, $db_user, $db_pass)){

	echo "ERRO AO CONECTAR AO BANCO DE DADOS";
	exit();
}
?>