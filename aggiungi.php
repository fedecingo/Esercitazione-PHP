<!DOCTYPE html>
<html>
<title>Cingolani</title>

<body>
<?php
$host = "sql.divini5g.com";
$user = "divini5g07622";
$pass = "gucci";
$nome = "divini5g07622";
$tab_nome = "cingolani";

mysql_connect($host,$user,$pass) or die("Impossibile collegarsi al server");
@mysql_select_db("$nome") or die("Impossibile connettersi al database $nome");

$cognome= $_POST["cognome"];
$nome= $_POST["nome"];
$email= $_POST["email"];

$sql= "INSERT INTO $tab_nome (cognome, nome, email)";
$sql .="VALUES ('$cognome', '$nome', '$email')";

if (mysql_query($sql)) {
	echo "La nuova persona è stata aggiunta correttamente";
}
else{
	echo "Errore nell'inserimento: " . mysql_error();
}
?>
</body>
</html>