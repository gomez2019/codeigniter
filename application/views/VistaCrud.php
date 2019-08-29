

<div class="row p-5">


	<form action=" <?= site_url('ControladorCrud/create') ?>" method="post" class="col-4">
		
		<div class="form-group ">
			<input type="text" name="titulo" placeholder="Titulo" class="form-control">
		</div>
		<div class="form-group ">
			<input type="text" name="contenido" placeholder="Contenido" class="form-control">
		</div>

		<button type="submit" class="btn btn-primary btn-block">Enviar</button>
		

	</form>


	


<table class="table table-bordered col-8 ">
	<thead>		
		<tr>
			<th>titulo</th>
			<th>contenido</th>
			<th>Acciones</th>
			
		</tr>
	</thead>

	<tbody>		
		<?php foreach($notas as $nota) :?>
			<tr>
				<td><?= $nota->titulo ?></td>
				<td><?= $nota->contenido ?></td>
				<td> <a href="<?= site_url('ControladorCrud/edit')?>/<?= $nota->id_notas ?>">Editar </a>  |
				 <a onclick ="return confirm('presione ok para eliminar')" href="<?= site_url('ControladorCrud/delete')?>/<?= $nota->id_notas ?>">Eliminar </a> </td>

			</tr>
		<?php endforeach ?>
	</tbody>	
</table>





</div>



