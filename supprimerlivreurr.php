<?PHP
include "../Core/livreurrC.php";
$livreurrC=new livreurrC();
if (isset($_POST["cin"])){
	$livreurrC->supprimerlivreurr($_POST["cin"]);
	header('Location: Afficherlivreur.php');
}

?>
