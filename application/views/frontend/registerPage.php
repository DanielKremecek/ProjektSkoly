<br>
<div class="card mb-3 tab-barva">
    <div class="card-header prim-barva">
        <h3 align="center">Registrace</h3>
    </div>
    <div class="card-body">
        <?php
        $attributes = array(
            'method' => 'post',
            'accept-charset' => "UTF-8",
            'role' => 'form'
        );


        echo form_open('register-finish', $attributes);
        ?>

        <div class="form-group row <?php echo $this->session->data['name']->status;?>">
            <label for="form-name" class="col-sm-2 col-form-label prim-barva"><i class="fa fa-user" aria-hidden="true"></i> Jméno</label>
            <div class="col-sm-10">
                <input data-toggle="tooltip" title="Povinná položka" type="text" class="form-control" name="name" id="form-name" placeholder="Křestní jméno" value="<?php echo $this->session->data['name']->value; ?>"/>
            </div>
            <p class="text-warning"><?php echo $this->session->data['name']->message; ?></p>
        </div>

        <div class="form-group row <?php echo $this->session->data['surname']->status;?>">
            <label for="form-surname" class="col-sm-2 col-form-label prim-barva"><i class="fa fa-user" aria-hidden="true"></i> Příjmení</label>
            <div class="col-sm-10">
                <input data-toggle="tooltip" title="Povinná položka" type="text" class="form-control" name="surname" id="form-surname" placeholder="Příjmení" value="<?php echo $this->session->data['surname']->value; ?>"/>
            </div>
            <p class="text-warning"><?php echo $this->session->data['surname']->message; ?></p>
        </div>


        <br>


        <div class="form-group row <?php echo $this->session->data['username']->status;?>">
            <label for="form-username" class="col-sm-2 col-form-label prim-barva"><i class="fa fa-user" aria-hidden="true"></i> Uživatelské jméno</label>
            <div class="col-sm-10">
                <input data-toggle="tooltip" title="Povinná položka" type="text" class="form-control" name="username" id="form-username" placeholder="Uživatelské jméno" value="<?php echo $this->session->data['username']->value; ?>"/>
            </div>
            <p class="text-warning"><?php echo $this->session->data['username']->message; ?></p>
        </div>

        <div class="form-group row <?php echo $this->session->data['email']->status;?>">
            <label for="form-email" class="col-sm-2 col-form-label prim-barva"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
            <div class="col-sm-10">
                <input data-toggle="tooltip" title="Povinná položka" type="text" class="form-control" name="email" id="form-email" placeholder="Email" value="<?php echo $this->session->data['email']->value; ?>"/>
            </div>
            <p class="text-warning"><?php echo $this->session->data['email']->message; ?></p>
        </div>


        <br>


        <div class="form-group row <?php echo $this->session->data['password']->status;?>">
            <label for="form-password" class="col-sm-2 col-form-label prim-barva"><i class="fa fa-lock" aria-hidden="true"></i> Heslo</label>
            <div class="col-sm-10">
                <input data-toggle="tooltip" title="Povinná položka" type="password" class="form-control" name="password" id="form-password" placeholder="Heslo (<?php echo $omezeni[0]; ?> až <?php echo $omezeni[1]; ?> znaků)" value="<?php echo $this->session->data['password']->value; ?>"/>
            </div>
            <p class="text-warning"><?php echo $this->session->data['password']->message; ?></p>
            <span id="helpBlockPassword" class="help-block">Heslo musí mít minimálně <?php echo $omezeni[0]; ?> a maximálně <?php echo $omezeni[1]; ?> znaků.</span>
        </div>

        <div class="form-group row <?php echo $this->session->data['confirm']->status;?>">
            <label for="form-confirm" class="col-sm-2 col-form-label prim-barva"><i class="fa fa-lock" aria-hidden="true"></i> Potvrzení hesla</label>
            <div class="col-sm-10">
                <input data-toggle="tooltip" title="Povinná položka" type="password" class="form-control" name="confirm" id="form-confirm" placeholder="Heslo znovu" value="<?php echo $this->session->data['confirm']->value; ?>"/>
            </div>
            <p class="text-warning"><?php echo $this->session->data['confirm']->message; ?></p>
        </div>

        <div align="center" class="form-group">
            <input class="btn btn-lg prim-barva" type="submit" id="register" value="Registrovat">	
        </div>
        </form>
    </div>
</div>