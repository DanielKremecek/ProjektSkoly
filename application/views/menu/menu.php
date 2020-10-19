<nav class="navbar navbar-expand-lg navbar-dark prim-barva">
    <a class="navbar-brand" href="<?php echo base_url();?>">Školy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_content" aria-controls="navbar_content" aria-expanded="false" aria-label="Rozvinout navigační menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar_content">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">Domovská strana</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>mapa">Mapa</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>login"><span class="fa fa-lock"></span> Přihlásit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>register"><span class="fa fa-user"></span> Registrace</a>
            </li>
        </ul>
    </div>
</nav>