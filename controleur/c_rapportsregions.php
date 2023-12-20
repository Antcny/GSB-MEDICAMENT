<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "formulairedate";
} else {
	$action = $_REQUEST['action'];
}
switch ($action) {
	case 'formulairedate': {
			$col = getAllNomCollaborateurs();
			// $datedebut = date('Y-m-d',strtotime($_POST['dudate']));
			// $datefin = date('Y-m-d',strtotime($_POST['audate']));
			// $report = getReportDate($datedebut, $datefin);
			include("vues/v_formulaireFourchetteDate.php");
			break;
		}
	
		case 'afficherrapport': {

			$date = getReportDate();
				
				include("vues/v_afficherRapportVisiteRegion.php");
			
			break;
		}

		case 'afficherdetailrapport': {

			// $infoRapport = getAllInformationRapportVisite($numrapport);
			var_dump($infoRapport);
				
				include("vues/v_afficherRapportVisiteRegionDetail.php");
			break;
		}

	default: {

			header('Location: index.php?uc=rapportsregions&action=rapportsregions');
			break;
		}
}
?>