<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Saisir un rapport de visite</h1>
            <p class="text text-center">
                Formulaire permettant de saisir un rapport de visite
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
            <img class="img-fluid size-img-page" src="assets/img/rapport.jpg">
            </div>

            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-8 py-lg-4 py-2">
                <?php if ($_SESSION['erreur']) {
                    echo '<p class="alert alert-danger text-center w-100">Un problème est survenu lors de l\'accès à un rapport de visite</p>';
                    $_SESSION['erreur'] = false;
                } ?>
                <form action="index.php?uc=rapportvisite&action=formulairesaisirrapportvisite" method="post" class="formulaire-recherche col-12 m-0">
                    <label class="titre-formulaire" for="listemedoc">Saisie du rapport de visite n° : <?php echo getNbrRapportVisite(); ?></label>

                    <table>
                        <tr> 
                            <td><p>Champs obligatoires <span class=" text-danger">*</span></p></td>
                        </tr>
                        <tr>
                            <td>Numéro du rapport de visite : <?php echo getNbrRapportVisite(); ?></td><br>
                        </tr> 
                        <tr>
                            <td>Matricule du collaborateur : <?php echo $_SESSION['matricule'] ?></td>
                        </tr> 
                        <tr>
                            <td>Date de visite <span class=" text-danger">*</span> : <input type="date" name="datedevisite" pattern="\d{4}/\d{2}/\d{2}" id="datedevisite" placeholder="Ex. : 2002/02/01" size="14" maxlength="20" title="Veuillez saisir une date au format aaaa/mm/jj" required></td>
                        </tr>  
                        <tr>
                            <td>Date de saisie du rapport de visite <span class=" text-danger">*</span> : <input type="date" name="datesaisierapport" pattern="\d{4}/\d{2}/\d{2}" id="datesaisierapport" placeholder="Ex. : 2002/02/02" size="14" maxlength="20" title="Veuillez saisir une date au format aaaa/mm/jj" required></td>
                        </tr>
                                          
                        <tr>
                            <td>
                                <select name="praticien" class="form-select mt-3">
                                <option value class="text-center">- Praticien concerné -</option>
                                <?php
                                    foreach ($pra as $praticien) {
                                        echo '<option value="' . $praticien['PRA_NUM'] . '" class="form-control">' . $praticien['PRA_NOM'] . ' ' . $praticien['PRA_PRENOM'] . '</option>';
                                    }
                                ?>
                                </select><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <label for="scales">Coefficient de confiance</label>
                                    <input type="text" id="coefconfiance" name="coefconfiance"  />
                                </div>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <fieldset>
                                <div>
                                    <label for="scales">Remplaçant ?</label>
                                    <input class="form-check-input" type="checkbox" id="remplacant" name="remplacant" />
                                </div>
                            </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select id="remplacantcontent" name="remplacant" class="form-select mt-3">
                                <option value class="text-center">- Remplaçant -</option>
                                <?php
                                    foreach ($pra as $praticien) {
                                        echo '<option value="' . $praticien['PRA_NUM'] . '" class="form-control">' . $praticien['PRA_NOM'] . ' ' . $praticien['PRA_PRENOM'] . '</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="motif" class="form-select mt-3">
                                <option value class="text-center">- Motif concerné -</option>
                                <?php
                                    foreach ($mot as $motif) {
                                        echo '<option>' . $motif['MOT_DESI'] .  '</option>';
                                    }
                                ?>
                                </select>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <fieldset>
                                <div>
                                    <label for="scales">Autre motif ?</label>
                                    <input class="form-check-input" type="checkbox" id="autremotif" name="autremotif" />
                                    <input class="d-none" type="text" id="autremotifcontent" name="autremotifcontent"  />
                                </div>
                            </fieldset><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Bilan du rapport de visite <span class=" text-danger">*</span> : <textarea type="text" name="bilanrapportdevisite" rows="3" id="bilanrapportdevisite"  size="40" minlength="20" maxlength="400" title="Veuillez saisir un texte d'au moins 20 caractères" required></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <select name="med1" class="form-select mt-3">
                                <option value class="text-center">- Médicament n°1 présenté -</option>
                                <?php
                                    foreach ($med as $medicament) {
                                        echo '<option value="' . $medicament['MED_DEPOTLEGAL'] . '" class="form-control">' . $medicament['MED_DEPOTLEGAL'] . ' - ' . $medicament['MED_NOMCOMMERCIAL'] . '</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="med2" class="form-select mt-3">
                                <option value class="text-center">- Médicament n°2 présenté -</option>
                                <?php
                                    foreach ($med as $medicament) {
                                        echo '<option value="' . $medicament['MED_DEPOTLEGAL'] . '" class="form-control">' . $medicament['MED_DEPOTLEGAL'] . ' - ' . $medicament['MED_NOMCOMMERCIAL'] . '</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="echantillon" class="form-select mt-3">
                                <option value class="text-center">- Échantillon offert -</option>
                                <?php
                                    foreach ($med as $medicament) {
                                        echo '<option value="' . $medicament['MED_DEPOTLEGAL'] . '" class="form-control">' . $medicament['MED_DEPOTLEGAL'] . ' - ' . $medicament['MED_NOMCOMMERCIAL'] . '</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <input type="number" id="quantite" name="quantite" min="0" max="5" value="0" />
                                    <label for="quantite">Quantité</label>
                                </div><br>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                            <fieldset>
                                <div>
                                    <label for="scales">Saisie définitive</label>
                                    <input class="form-check-input" type="checkbox" id="saisiedef" name="saisiedef" />
                                </div>
                            </fieldset>
                            </td>
                        </tr>
                        
                    </table>
                    
                    <input class="btn btn-info text-light valider" type="submit" value="Valider">
                </form>
            </div>
            
        </div>
    </div>
</section>

<script>
    const checkbox = document.querySelector("#autremotif");
    const text = document.querySelector("#autremotifcontent");

    checkbox.addEventListener('click', () => {
        if(text.classList.contains("d-none")){
            text.classList.remove("d-none")
            text.classList.add("d-block")
        }
        else{
            text.classList.remove("d-block")
            text.classList.add("d-none")
        }
  });

    const list = document.querySelector("#remplacant");
    const text = document.querySelector("#remplacantcontent");

    list.addEventListener('click', () => {
        if(text.classList.contains("d-none")){
            text.classList.remove("d-none")
            text.classList.add("d-block")
        }
        else{
            text.classList.remove("d-block")
            text.classList.add("d-none")
        }
  });
</script> 