<h1>Administration des Entreprises</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Siege</th>
      <th scope="col">Telephone</th>
      <th scope="col">Quartier</th>
      <th scope="col">Créer le </th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($params ['entreprises'] as $entreprise) : ?>

        <tr>
      <th scope="row"><?= $entreprise->id ?></th>
      <td><?= $entreprise->nom ?></td>
      <td><?= $entreprise->siege ?></td>
      <td><?= $entreprise->telephone ?></td>
      <td><?= $entreprise->quartier_id ?></td>
      <td><?= $entreprise->getCreatedAt() ?></td>
      <td>
          <a href="/admin/entreprises/edit/<?= $entreprise->id ?>" class="btn btn-warning">Modifier</a>
          <form action="/admin/entreprises/delete/<?= $entreprise->id ?>" method="POST" class="d-inline">
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
      </td>
    </tr>


    <?php endforeach ?>
  </tbody>
</table>
