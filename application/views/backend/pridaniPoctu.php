<br><br>
<div class="card sek-barva mb-3"></div><div class="card-header prim-barva">
      <form method="post" action="<?php echo base_url()?>Pocet_prijatych_controller/form_validation">  
           <?php  
           if(isset($user_data))  
           {  
            echo '<h2 align="center">Editace počtu přijatých studentů</h2></div><div class="card-body">';
            foreach($user_data->result() as $row) {  
           ?> 
            <div class="form-group row">  
                <label for="form-pocet" class="col-sm-2 col-form-label prim-barva">Počet</label> 
                <div class="col-sm-10">
                    <input type="text" name="pocet" value="<?php echo $row->pocet; ?>" class="form-control" id="form-pocet"/>  
                    <span class="text-danger"><?php echo form_error("pocet"); ?></span>
                </div>
            </div>
            <div class="form-group row">  
                <label for="form-rok" class="col-sm-2 col-form-label prim-barva">Rok</label> 
                <div class="col-sm-10">
                    <input type="text" name="rok" value="<?php echo $row->rok; ?>" class="form-control" id="form-rok"/>  
                    <span class="text-danger"><?php echo form_error("rok"); ?></span>
                </div>
            </div>
          <div class="form-group row">  
                <label for="form-obor" class="col-sm-2 col-form-label prim-barva">Obor</label> 
                <div class="col-sm-10">
                    <select name="obor" class="form-control" id="obor">
                    <?php  
                    if($obor_data->num_rows() > 0)  {  
                        foreach($obor_data->result() as $row)  {  
                    ?>  
                        <option value="<?php echo $row->obor; ?>"><?php echo $row->nazev_oboru; ?></option>
                    <?php       
                    }  
                    }  
                     ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">  
                <label for="form-skola" class="col-sm-2 col-form-label prim-barva">Škola</label> 
                <div class="col-sm-10">
                    <select name="skola" class="form-control" id="skola">
                    <?php  
                    if($skola_data->num_rows() > 0)  {  
                        foreach($skola_data->result() as $row)  {  
                    ?>  
                        <option value="<?php echo $row->skola; ?>"><?php echo $row->nazev_skoly; ?></option>
                    <?php       
                    }  
                    }  
                     ?>
                    </select>
                </div>
            </div>
            <div align="center" class="form-group">  
                <input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>" />  
                <input type="submit" name="update" value="Update" class="btn prim-barva btn-lg" />  
            </div>       
            <?php       
            }  
            }  
           else  
           {  
           ?>  
           <h2 align="center">Přidávání dat</h2></div>
        <div class="card-body">
            <div class="form-group row">  
                <label for="form-obor" class="col-sm-2 col-form-label prim-barva">Obor</label> 
                <div class="col-sm-10">
                    <select name="obor" class="form-control" id="mesto">
                    <?php  
                    if($obor_data->num_rows() > 0)  {  
                        foreach($obor_data->result() as $row)  {  
                    ?>  
                        <option value="<?php echo $row->obor; ?>"><?php echo $row->nazev_oboru; ?></option>
                    <?php       
                    }  
                    }  
                     ?>
                    </select>
                </div>
            </div>
            
            <div class="form-group row">  
                <label for="form-pocet" class="col-sm-2 col-form-label prim-barva">Počet přijatých</label> 
                <div class="col-sm-10">
                    <input type="text" name="pocet" class="form-control" id="form-pocet"/>  
                    <span class="text-danger"><?php echo form_error("pocet"); ?></span>
                </div>
            </div>
            <div class="form-group row">  
                <label for="form-rok" class="col-sm-2 col-form-label prim-barva">Rok</label> 
                <div class="col-sm-10">
                    <input type="text" name="rok" class="form-control" id="form-rok"/>  
                    <span class="text-danger"><?php echo form_error("rok"); ?></span>
                </div>
            </div>  
            <div class="form-group row">  
                <label for="form-skola" class="col-sm-2 col-form-label prim-barva">Škola</label> 
                <div class="col-sm-10">
                    <select name="skola" class="form-control" id="skola">
                    <?php  
                    if($skola_data->num_rows() > 0)  {  
                        foreach($skola_data->result() as $row)  {  
                    ?>  
                        <option value="<?php echo $row->skola; ?>"><?php echo $row->nazev_skoly; ?></option>
                    <?php       
                    }  
                    }  
                     ?>
                    </select>
                </div>
            </div>
            <div align="center" class="form-group">  
                <input type="submit" name="insert" value="Zapsat" class="btn prim-barva btn-lg" />  
            </div>       
           <?php  
           }  
           ?>  
      </form> 
           <?php  
           if($this->uri->segment(2) == "inserted")  
           {
                echo '<div class="alert alert-success" align="center">Údaje o počtu přijatých studentů byly přidány do databáze</div>';  
           }  
           if($this->uri->segment(2) == "updated")  
           {  
                echo '<div class="alert alert-success" align="center">Údaje o počtu přijatých studentů byly úspěšně upraveny</div>';  
           }  
           ?>  
    </div>
      <br /><br />  
      <h3 align="center">Seznam počtu přijatých studentů</h3><br />  
    <div class="card-body">
        <div class="table-responsive">  
            <table class="table">  
                <thead class="prim-barva">
                    <tr>  
                     <td align="center">ID</td> 
                     <td>Obor</td>
                     <td>Počet</td>
                     <td>Rok</td>
                     <td>Škola</td>
                     <td align="center">Upravit</td> 
                     <td align="center">Smazat</td>    
                    </tr>  
                </thead>
           <?php  
           if($fetch_data->num_rows() > 0)  
           {  
                foreach($fetch_data->result() as $row)  
                {  
           ?>  
                <tbody class="tabulka-barva">
                <tr>  
                     <td align="center"><?php echo $row->id; ?></td> 
                     <td><?php echo $row->obor; ?></td> 
                     <td><?php echo $row->pocet; ?></td>  
                     <td><?php echo $row->rok; ?></td>  
                     <td><?php echo $row->skola; ?></td>   
                     <td align="center"><a href="<?php echo base_url(); ?>Pocet_prijatych_controller/update_data/<?php echo $row->id ?>"><span class="fa fa-edit"></span></a></td>  
                     <td align="center"><a href="<?php echo base_url(); ?>Pocet_prijatych_controller/delete_data/<?php echo $row->id; ?>"><span class="fa fa-trash"></span></a></td>  
                </tr> 
                </tbody>
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="7" align="center"><div class="alert alert-warning">Nebyla nalezena žádná data!</div></td>
                </tr>  
           <?php  
           }  
           ?>  
           </table>  
    </div>  
</div>
<br>
<script>  
    // Mazání záznamů      
    $(document).ready(function(){  
        $('.delete_data').click(function(){  
            var id = $(this).attr("id");  
            if(confirm("Opravdu chcete tento záznam nenávratně smazat?"))  {  
                window.location="<?php echo base_url(); ?>Pocet_prijatych_controller/delete_data/"+id;  
            } else {  
                return false;  
            }  
        });  
    });  
</script>  
