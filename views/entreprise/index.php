
     <div class="container" style="margin-top: 80px">
         <h1 class="text-center text-success font-weight-bold">Liste des entreprises</h1>
         <div class="row">
             <div class="col">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                    <th scope="col">Siège</th>
                      <th scope="col">Ninéa</th>
                        <th scope="col">Localité</th>
                        <th scope="col">Date</th>
                        <th scope="col">Détails</th>
                    </tr>
                  </thead>
                    <tbody>
                    <?php foreach ($params['entreprises'] as $entreprise): ?>
                        <tr>
                        <th scope="row"><?= $entreprise->id ?></th>
                          <td><?= $entreprise->nom ?></td>
                         <td><?= $entreprise->siege ?></td>
                          <td><?= $entreprise->ninea ?></td>
                            <td><?= $entreprise->quartier_id?></td>
                            <td><small class="bg-success w-100 rounded">Crée le <?= $entreprise->getCreatedAt() ?></small><br><br></td>

                            <td>
                            <?= $entreprise->getButton() ?>
                            </td>

                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
             </div>
         </div>
     </div>

