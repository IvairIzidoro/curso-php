<?php 

include_once('include-header.php');

/*  Arquivo gerado por Ivair Izidoro   */

?>

<div class="panel panel-default">
    <div class="panel-body">
    
     <h1>Lista de tarefas: Ivair</h1>
        <div class="formulario">
            <form class="formTarefa form-horizontal" action="saveTarefa.php" method="post">

                <div class="form-group">
                    <label for="tarefa" class="col-sm-3 control-label">Tarefa:</label>
                       
                        <div class="col-sm-6">
                            <input type="text" name="tarefa" id="tarefa" class="form-control">
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-12">
                         <input type="submit" name="enviar" value="Enviar" class="btn btn-default">        
                    </div>
                </div>

            </form>
        </div>            
    </div>
</div>

<div class="panel panel-default">
   <div class="panel-heading">
     <h2> Tarefas Recentes: </h2>
   </div>
   <div class="panel-body2">
       <table class="tabel table-striped">
           <thead>
                <th>Tarefa: </th> 
                <th>&nbsp;</th> 
                <th>&nbsp;</th> 
            </thead> 
            <tbody>
            <?php 
                $query = mysql_query("SELECT * FROM tarefas") or die (mysql_error());
                while($row = mysql_fetch_array($query, MYSQL_NUM)){
            ?>
                    <tr>
                       <td><?=$row[1]?></td>
                       <td><a href="editar.php?id=<?= $row[0] ?>"  class="btn btn-success">Editar</a></td>
                       <td><a href="excluir.php?id=<?= $row[0] ?>" class="btn btn-warning" >Remover</a></td>  
                    </tr>
                    <?php } ?>               
               </tbody>
           </table>
       </div>
   </div>
        
<?php include_once('include-footer.php');?>   