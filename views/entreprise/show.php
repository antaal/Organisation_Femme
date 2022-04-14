<div class="container" style="margin-top: 20px">
<h1 class="text-center text-success font-weight-bold">Detail Entreprise</h1>

<div  class=" col-6 rounded text-center  mx-6" style="margin-top: 20px; margin-left:25%; background-color:papayawhip">
<tr >
<h2 class="text-center"><td><?= $params['entreprise'] ->nom ?></td></h2>
<h3><td><?= $params['entreprise'] ->siege ?></td></h3>
<h3></td><?= $params['entreprise'] ->siteWeb ?></td></h3>
<h3></td><?= $params['entreprise']->ninea ?></td></h3>
<h3><td><?= $params['entreprise']->registre ?></td></h3>
<h3><td><?= $params['entreprise']->dispositifFormation ?'Formation Disponible':'Formation Non Disponible'?></td></h3>
<h3><td><?= $params['entreprise']->organigramme ?'Organigramme Disponible':'Pas d\'Organigramme'?></td></h3>
<h3><td><?= $params['entreprise']->contrat ?'Contrat Disponible':'Contrat Non Disponible'?></td></h3>

</tr>
<div class="text-center"><a href="/entreprises" class="btn btn-success  ">Retour</a></div>

</div>

</div>