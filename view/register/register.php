<div class="container mt-5" id="form">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Inscription</h3>
            <hr />
            <p id="elem" class="text-center text-danger"></p>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Addresse email</label>
                    <input type="email" class="form-control" id="login" aria-describedby="emailHelp" required>
                    <div class="elem orm-text text-danger"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="<?= isset($types) ? $types : 'password' ?>" class=" form-control" id="password" required>
                    <div class="elem form-text text-danger"></div>
                </div>
                <div class="mb-3 form-check">
                    <small><a href="">Politique de confidentialité</a></small>
                    <hr />
                    <div class="check">
                        <input type="checkbox" class="form-check-input checkbox" id="checkbox" value="1" required>
                    </div>
                    <label class="form-check-label" for="exampleCheck1">J'accepte</label>
                </div>
                <div class="text-center button">
                    <button type="button" class="btn btn-primary btn-lg" id="btnRegister">S'enregistrer </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="assets/js/register.js"></script>