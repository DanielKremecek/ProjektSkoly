<nav class="navbar navbar-expand-lg navbar-dark prim-barva">
    <a class="navbar-brand" href="<?php echo base_url();?>/admin">Administrace</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_content" aria-controls="navbar_content" aria-expanded="false" aria-label="Rozvinout navigační menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar_content">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/pridaniMesta">Města</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/pridaniSkoly">Školy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/pridaniPoctu">Počty</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/logout"><span class="fa fa-sign-out"></span> Odhlásit</a>
            </li>
        </ul>
    </div>
</nav>