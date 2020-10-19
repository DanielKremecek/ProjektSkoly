<br>
<div class="card mb-3">
    <div  class="card-header prim-barva">
        <h3 align="center">Přihlášení</h3>
    </div>
    <div align="center" class="card-body">
        <?php 
        $attributes = array(
            'accept-charset' => "UTF-8",
            'role' => 'form',
            'class' => 'form-signin',
            'method' => 'post',
        );
        echo form_open('login-finish', $attributes); ?>
        <div class="col-sm-6">
            <fieldset>
                <label class="panel-login">
                    <div class="login_result"></div>
                </label>
                <input align="center" class="form-control" placeholder="Uživatelské jméno" id="username" type="text" name="username">
                <br>
                <input class="form-control" placeholder="Heslo" id="password" type="password" name="password">
                <br>
                <input class="btn btn-lg prim-barva btn-block" type="submit" id="login" value="Přihlásit">
            </fieldset>
        </div>
        </form>
    </div>
</div>