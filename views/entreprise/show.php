<div class="container-fluid" style="margin-top: 80px">
<h2 class="text-center text-success font-weight-bold">Detail Entreprise</h2>

<div  class="border border-success col-6 rounded  mx-6" >
<tr>
<h1><?= $params['entreprise'] ->nom ?></h1>
<td><?= $params['entreprise'] ->siege ?></td><br>
</td><?= $params['entreprise'] ->siteWeb ?></td><br>
</td><?= $params['entreprise']->ninea ?></td><br>
<td><?= $params['entreprise']->dispositifFormation ?></td><br>
<td><?= $params['entreprise']->organigramme ?></td><br>
<td><?= $params['entreprise']->contrat ?></td><br>
<td><?= $params['entreprise']->ninea ?></td><br>
<td><?= $params['entreprise']->registre ?></td>
</tr><br><br>
<div><a href="/entreprises" class="btn btn-secondary">Retour</a></div>

</div>

</div>


