<h1>Modifier<?= $params['entreprise']->nom ?></h1>



                <form method="POST" action="/admin/entreprises/edit/<?= $params['entreprise']->id ?>">


                <div class="form-group">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control"  name="nom" id="nom" value="<?= $params['entreprise']->nom ?>">
                  </div>
                   <div class="mb-3">
                    <label for="siege" class="form-label">Siège</label>
                    <input type="text" class="form-control" name="siege" id="siege" value="<?= $params['entreprise']->siege ?>">
                  </div>
               <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" name="telephone" id="telephone" value="<?= $params['entreprise']->telephone ?>">
                  </div>
                 <!-- <div class="mb-3">
                    <label for="dateEte" class="form-label">Date de Création</label>
                    <input type="date" class="form-control" name="dateCreation" id="dateEte" value="<?= $params['entreprise']->nom ?>">
                  </div> -->
                <div class="mb-3">
                    <label for="registre" class="form-label">Registre</label>
                    <input type="text" class="form-control"  name="registre" id="registre" value="<?= $params['entreprise']->registre ?>">
                  </div>
                 <div class="mb-3">
                    <label for="ninea" class="form-label">Ninea</label>
                    <input type="text" class="form-control" name="ninea" id="ninea" value="<?= $params['entreprise']->ninea ?>">
                  </div>
                <div class="mb-3">
                    <label for="siteWeb" class="form-label">Site Web</label>
                    <input type="text" class="form-control" name="siteWeb" id="siteWeb" value="<?= $params['entreprise']->siteWeb ?>">
                  </div>
                <div class="mb-3 form-check">
                    <input type="checkbox"  name="dispositifFormation" class="form-check-input" id="dispositifFormation" value="<?= $params['entreprise']->dispositifFormation ?>">
                    <label class="form-check-label" for="dispositifFormation">Avez-vous un Dispositif de formation ?</label>
                  </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="organigramme" id="organigramme" value="<?= $params['entreprise']->organigramme ?>">
                    <label class="form-check-label" for="organigramme">Avez-vous un organigramme ?</label>
                  </div>
                 <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="contrat" id="contrat" value="<?= $params['entreprise']->contrat ?>">
                    <label class="form-check-label" for="contrat">Avez-vous des contrats ?</label>
                  </div>

               <!-- <select class="form-select" name="quartier_id" aria-label="list des régions">
                  <option selected>Sélectionner la localité</option>
                    @foreach ($quartiers as $quartier)
                      <option value="{{ $quartier->id }}">{{ $quartier->nom }}</option>
                    @endforeach
                </select> -->


                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
                  
                </form>
            