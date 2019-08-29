	<form action=" <?= site_url('ControladorCrud/update')?>/<?= $notas->id_notas ?>" method="post" class="col-4">
		
		<div class="form-group ">
			<input type="text" name="titulo" placeholder="Titulo" class="form-control" value=" <?= $notas->titulo; ?>">
		</div>
		<div class="form-group ">
			<input type="text" name="contenido" placeholder="Contenido" class="form-control" value="<?= $notas->contenido; ?>">
		</div>

		<button type="submit" class="btn btn-primary btn-block">Enviar</button>
		

	</form>