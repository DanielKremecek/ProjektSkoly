<br><br>
<h1 align="center">Domovská strana</h1>
<hr>
<div class="card mb-3 prim-barva">
    <div class="card-header prim-barva">
        <h3 align="center">Záznamy škol</h3>
    </div></div>
    <div class="card-body sek-barva">
        <div class="table-responsive">
            <table id="mytable" class="table">
                <thead class="prim-barva">
                    <tr>
                        <th>ID</th>
                        <th>Škola</th>
                        <th>Obor</th>
                        <th>Počet přijatých</th>
                        <th>Rok</th>
                    </tr>
                </thead>
                <tbody class="tab-barva">
                    <?php
                        foreach ($data as $d){
                            echo    "<tr>";
                            echo        "<td align='center'>", $d->id, "</td>";
                            echo        "<td>", $d->nazev, "</td>";
                            //echo        "<td>", $d->nazevMesta, "</td>";
                            echo        "<td align='center'>", $d->obor, "</td>";
                            echo        "<td align='center'>", $d->pocet, "</td>";
                            echo        "<td align='center'>", $d->rok, "</td>";
                            echo    "</tr>";
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>

<script src="<?php echo base_url('assets/jquery/jquery-3.2.1.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/custom/js/ddtf.js'); ?>" type="text/javascript"></script>
<script>
    $('#mytable').ddTableFilter();
</script>