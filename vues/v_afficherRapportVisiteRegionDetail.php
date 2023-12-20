<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Rapport</h1>
            <p class="text text-center">
                Information sur ce rapport
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                <img class="img-fluid w-75" src="assets/img/rapport.png">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <div class="formulaire">
                    <p><span class="carac">Numéro de rapport </span> : <?php echo $infoRapport['RAP_NUM'] ?></p>
                    <p><span class="carac">Auteur du rapport</span> : <?php echo $infoRapport['COL_MATRICULE'] ?></p>
                    <p><span class="carac">Date de visite</span> : <?php echo date("d/m/Y", strtotime($infoRapport['DATE_VISITE'])) ?></p>
                    <p><span class="carac">Date du rapport</span> : <?php echo date("d/m/Y", strtotime($infoRapport['RAP_DATE'])); ?></p>
                    <p><span class="carac">Bilan du rapport</span> : <?php echo $infoRapport['RAP_BILAN'] ?></p>
                    <p><span class="carac">Numéro du praticien</span> : <?php echo $infoRapport['PRA_NUM'] ?></p>
                    <p><span class="carac">Praticien remplaçant</span> : <?php echo $infoRapport['PRA_NUM_REMPLACANT'] ?></p>
                    <p><span class="carac">Motif</span> : <?php echo $infoRapport['MOT_CODE'] ?></p>
                    <p><span class="carac">Autre motif</span> : <?php echo $infoRapport['RAP_MOTIF_AUTRE'] ?></p>
                    <p><span class="carac">Médicament 1</span> : <?php echo $infoRapport['MED_DEPOTLEGAL_Presente1'] ?></p>
                    <p><span class="carac">Médicament 2</span> : <?php echo $infoRapport['MED_DEPOTLEGAL_Presente2'] ?></p>
                    <p><span class="carac">État du rapport</span> : <?php echo $infoRapport['ID_ETAT'] ?></p>

                    <a class="btn btn-info text-light me-3" href="index.php?uc=accueil">Retour à l'accueil</a>
                </div>
            </div>
        </div>
</section>