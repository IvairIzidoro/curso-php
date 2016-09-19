<?php  
//Documento criado por Ivair Izidoro
require_once('./config/db.php');

$id = $_GET['id'];

$query = mysql_query(" SELECT * FROM tarefas WHERE id = $id " ) or die (mysql_error());
$result = mysql_fetch_array($query);

 ?>

<?php include_once('include-header.php');?>
	<h1>Tarefa: <?= $result['tarefa']?></h1>
        <form class="formEditarTarefa" action="updateTarefa.php" method="post">
	        <div class="form-group">	
                <label for="tarefa" class="col-sm3 control-label">Tarefa</label>
	            <input type="hidden" name="id" value="<?= $result['id']?>" >
		    </div>
		    <div class="form-group col-sm-6">
		        <input type="text" name="tarefa" id="tarefa" value="<?= $result['tarefa']?> " class="form-control">
		    </div>
		    <div class="form-group">
		        <input type="submit" name="enviar" value="Enviar" class="col-sm-2 btn btn-success">
            </div>
		</form>
<?php include_once('include-footer.php');?>	
