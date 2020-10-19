<br><br>
<h1 align="center">Domovská strana</h1>
<hr>
<div class="card mb-3 sek-barva">
    <div class="card-header prim-barva">
        <h3 align="center">Záznamy zemí</h3>
    </div>
    <div class="card-body sek-barva">
        <div class="table-responsive">
            <table id="mytable" class="table">
                <thead class="prim-barva">
                    <tr>
                        <th>ID</th>
                        <th>Škola</th>
                        <th>Město</th>
                    </tr>
                </thead>
                <tbody class="tab-barva">
                    <?php
                        foreach ($data as $d){
                            echo    "<tr>";
                            echo        "<td>", $d->id, "</td>";
                            echo        "<td>", $d->nazev, "</td>";
                            echo        "<td>", $d->nazevMesta, "</td>";
                            echo    "</tr>";
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="jquery.min.js"></script>
<script src="ddtf.js"></script>
<script>
    $('mytable').ddTableFilter();
</script>