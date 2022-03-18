<h1 class="text-center text-success font-weight-bold"> les Entreprises </h1>

<?php foreach ($params['entreprises'] as $entreprise): ?>
   
    <div class="card mb-3">
    <div class="card-body">
    <h2><?= $entreprise->nom ?></h2>
    <p><?= $entreprise->siege ?></p>
    <p><?= $entreprise->telephone ?></p>
    <p><?= $entreprise->siteWeb ?></p>
    <p><?= $entreprise->quartier_id?></p>
    <small><?= $entreprise->dateCreation?></small><br><br>
    <a href="/entreprises/<?= $entreprise->id ?>" class="btn btn-primary">Lire plus</a>
    </div>
    </div>

<?php endforeach ?>