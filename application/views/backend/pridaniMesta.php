<br><br>
<div class="card sek-barva mb-3"></div><div class="card-header prim-barva">
      <form method="post" action="<?php echo base_url()?>Mesto_controller/form_validation">  
      <br><br>
           <?php  
           if(isset($user_data))  
           {  
            echo '<h2 align="center">Editace měst</h2></div><div class="card-body">';
            foreach($user_data->result() as $row) {  
           ?>  
            <div class="form-group row">  
                <label for="form-nazev" class="col-sm-2 col-form-label prim-barva">Název města</label> 
                <div class="col-sm-10">
                    <input type="text" name="nazev" value="<?php echo $row->nazev; ?>" class="form-control" id="form-nazev"/>  
                    <span class="text-danger"><?php echo form_error("nazev"); ?></span>
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
           <h1 align="center">Přídání města</h1>
    </div>
<div class="card-body">
            <div class="form-group row">  
                <label for="form-nazev" class="col-sm-2 col-form-label prim-barva">Název města</label> 
                <div class="col-sm-10">
                    <input type="text" name="nazev" class="form-control" id="form-nazev"/>  
                    <span class="text-danger"><?php echo form_error("nazev"); ?></span> 
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
                echo '<div class="alert alert-success" align="center">Údaje o akci pro seznam měst byly přidány do databáze</div>';  
           }  
           if($this->uri->segment(2) == "updated")  
           {  
                echo '<div class="alert alert-success" align="center">Údaje o akci pro seznam měst byly úspěšně upraveny</div>';  
           }  
           ?>  
            </div>
      <br /><br />  
      <h3 align="center">Seznam měst</h3><br />  
    <div class="card-body">
        <div class="table-responsive">  
            <table class="table">  
                <thead class="prim-barva">
                    <tr>  
                     <td align="center">ID</td> 
                     <td>Název</td>
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
                     <td align="center"><a href="<?php echo base_url(); ?>Mesto_controller/update_data/<?php echo $row->id ?>"><span class="fa fa-edit"></span></a></td>  
                     <td align="center"><a href="<?php echo base_url(); ?>Mesto_controller/delete_data/<?php echo $row->id; ?>"><span class="fa fa-trash"></span></a></td>  
                </tr> 
                </tbody>
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="5" align="center"><div class="alert alert-warning">Nebyla nalezena žádná data!</div></td>
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
                window.location="<?php echo base_url(); ?>Mesto_controller/delete_data/"+id;  
            } else {  
                return false;  
            }  
        });  
    });  
</script>  