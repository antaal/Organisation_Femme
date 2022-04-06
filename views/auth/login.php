<?php if (isset($_SESSION['errors'])): ?>

<?php foreach($_SESSION['errors'] as $errorsArray): ?>
    <?php foreach($errorsArray as $errors): ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>
<?php endforeach ?>

<?php endif ?>

<?php session_destroy(); ?>
<h1>Se Connecter</h1>

<form method="POST" action="/login" >
<div class="form-group">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nom d'Utilisateur</label>
                        <input type="text" class="form-control"  name="username" id="username" >
                      </div>

                      <div class="mb-3">
                        <label for="password" class="form-label">Mot de Passe</label>
                        <input type="password" class="form-control"  name="password" id="password" >
                      </div>
                      <button type="submit" class="btn btn-primary">Se Connecter</button>
                    </div>
                  
                </form>
            