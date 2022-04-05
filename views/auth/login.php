<h1>Se Coonecter</h1>

<form method="POST" action="/login" >
<div class="form-group">
                    <div class="mb-3">
                        <label for="username" class="form-label">username</label>
                        <input type="text" class="form-control"  name="username" id="username" >
                      </div>

                      <div class="mb-3">
                        <label for="password" class="form-label">Mot de Passe</label>
                        <input type="password" class="form-control"  name="password" id="password" >
                      </div>
                      <button type="submit" class="btn btn-primary"><?= isset($params['entreprise']) ? 'Enregistrer les Modifications' : 'Enregistrer'?></button>
                    </div>
                  
                </form>
            