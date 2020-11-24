<br><br>
<div class="card sek-barva mb-3"></div><div class="card-header prim-barva">
      <form method="post" action="<?php echo base_url()?>Skola_controller/form_validation">  
           <?php  
           if(isset($user_data))  
           {  
            echo '<h2 align="center">Editace škol</h2></div><div class="card-body">';
            foreach($user_data->result() as $row) {  
           ?>  
            <div class="form-group row">  
                <label for="form-nazev" class="col-sm-2 col-form-label prim-barva">Název školy</label> 
                <div class="col-sm-10">
                    <input type="text" name="nazev" value="<?php echo $row->nazev; ?>" class="form-control" id="form-nazev"/>  
                    <span class="text-danger"><?php echo form_error("nazev"); ?></span>
                </div>
            </div>
          <div class="form-group row">  
                <label for="form-nazev" class="col-sm-2 col-form-label prim-barva">Město</label> 
                <div class="col-sm-10">
                    <input type="text" name="mesto" value="<?php echo $row->mesto; ?>" class="form-control" id="form-mesto"/>  
                    <select name="mesto" class="form-control" id="mytable">
                    <?php  
                    if($fetch_data->num_rows() > 0)  {  
                        foreach($fetch_data->result() as $row)  {  
                    ?>  
                        <option><?php echo $row->mestoNazev; ?></option>
                    <?php       
                    }  
                    }  
                     ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">  
                <label for="form-geolat" class="col-sm-2 col-form-label prim-barva">geolat</label> 
                <div class="col-sm-10">
                    <input type="text" name="geolat" value="<?php echo $row->geolat; ?>" class="form-control" id="form-geolat"/>  
                    <span class="text-danger"><?php echo form_error("geolat"); ?></span>
                </div>
            </div>
            <div class="form-group row">  
                <label for="form-geolong" class="col-sm-2 col-form-label prim-barva">geolong</label> 
                <div class="col-sm-10">
                    <input type="text" name="geolong" value="<?php echo $row->geolong; ?>" class="form-control" id="form-geolong"/>  
                    <span class="text-danger"><?php echo form_error("geolong"); ?></span>
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
           <h2 align="center">Přídání školy</h2></div>
    <div class="card-body">
            <div class="form-group row">  
                <label for="form-nazev" class="col-sm-2 col-form-label prim-barva">Název školy</label> 
                <div class="col-sm-10">
                    <input type="text" name="nazev" class="form-control" id="form-nazev"/>  
                    <span class="text-danger"><?php echo form_error("nazev"); ?></span>
                </div>
            </div>
            <div class="form-group row">  
                <label for="form-geolat" class="col-sm-2 col-form-label prim-barva">Město</label> 
                <div class="col-sm-10">
                    <select name="mesto" class="form-control" id="mesto">
                    <?php  
                    if($fetch_data->num_rows() > 0)  {  
                        foreach($fetch_data->result() as $row)  {  
                    ?>  
                        <option class=""><?php echo $row->mesto; ?></option>
                    <?php       
                    }  
                    }  
                     ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">  
                <label for="form-geolat" class="col-sm-2 col-form-label prim-barva">geolat</label> 
                <div class="col-sm-10">
                    <input type="text" name="geolat" class="form-control" id="form-geolat"/>  
                    <span class="text-danger"><?php echo form_error("geolat"); ?></span>
                </div>
            </div>
            <div class="form-group row">  
                <label for="form-geolong" class="col-sm-2 col-form-label prim-barva">geolong</label> 
                <div class="col-sm-10">
                    <input type="text" name="geolong" class="form-control" id="form-geolong"/>  
                    <span class="text-danger"><?php echo form_error("geolong"); ?></span>
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
                echo '<div class="alert alert-success" align="center">Údaje o akci pro seznam škol byly přidány do databáze</div>';  
           }  
           if($this->uri->segment(2) == "updated")  
           {  
                echo '<div class="alert alert-success" align="center">Údaje o akci pro seznam škol byly úspěšně upraveny</div>';  
           }  
           ?>  
    </div>
      <br /><br />  
      <h3>Seznam škol</h3><br />  
    <div class="card-body">
        <div class="table-responsive">  
            <table class="table">  
                <thead class="prim-barva">
                    <tr>  
                     <td align="center">ID</td> 
                     <td>Název školy</td>
                     <td>Město</td>
                     <td>geolat</td>
                     <td>geolong</td>
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
                     <td><?php echo $row->nazev; ?></td>  
                     <td><?php echo $row->mesto; ?></td>  
                     <td><?php echo $row->geolat; ?></td>  
                     <td><?php echo $row->geolong; ?></td>   
                     <td align="center"><a href="<?php echo base_url(); ?>Skola_controller/update_data/<?php echo $row->id ?>"><span class="fa fa-edit"></span></a></td>  
                     <td align="center"><a href="<?php echo base_url(); ?>Skola_controller/delete_data/<?php echo $row->id; ?>"><span class="fa fa-trash"></span></a></td>  
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
                window.location="<?php echo base_url(); ?>Skola_controller/delete_data/"+id;  
            } else {  
                return false;  
            }  
        });  
    });  
</script>  

<script src="<?php echo base_url('assets/jquery/jquery-3.2.1.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/custom/js/ddtf.js'); ?>" type="text/javascript"></script>
<script>
    $('#mytable').ddTableFilter();
</script>
