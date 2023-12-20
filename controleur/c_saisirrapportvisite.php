<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "formulairesaisirrapportvisite";
} else {
	$action = $_REQUEST['action'];
}
switch ($action) {
	case 'formulairesaisirrapportvisite': {

		$mot = getMotifVisite();
		$pra = getAllNomPraticiens();
		$med = getAllNomMedicament();
		$numrapport = getNbrRapportVisite();
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$insert = insertion($numrapport);
			$insert2 = insertion2($numrapport);
			$insert3 = insertion3();
		}

		// if($_POST['quantite']>0){
		// 	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// 		$insert2 = insertion2($numprapport);
		// }
		// }
 
		// if($_POST['datedevisite']<=$_POST['datesaisierapport']){
		//	include("vues/v_problemeSurvenu.php");
		// }
		
		
		
}
		
		// var_dump(getNbrRapportVisite());
		include("vues/v_formulairesaisirrapportvisite.php");
		break;
		
	

	default: {

		header('Location: index.php?uc=rapportvisite&action=formulairesaisirrapportvisite');
		break;
	}
}
?>