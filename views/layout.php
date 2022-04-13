<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">
    <title>OSC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success ">
  <a class="navbar-brand" href="/entreprises">OSC Femmes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="/entreprises">Partenaires</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://brieffemme.test/admin/entreprises">Admin</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['auth'])): ?>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Se Déconnecter</a>
      </li>
      <?php endif ?>
     </ul>
  </div>
</nav>
    <div class="container">
    <?= $content ?>
    </div>
</body>
</html>