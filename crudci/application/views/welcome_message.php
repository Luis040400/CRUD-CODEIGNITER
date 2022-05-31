<div class="container">
	<!--Titulo-->
	<div class="row">
		<h2>CRUD en CI 3</h2>
		<div class="text-right"><a href="<?php echo base_url('prueba') ?>">Prueba</a></div>
	</div>
	<!--Formulario-->
	<div class="mb-5">
		<form method="POST" action="<?php echo base_url('welcome/agregar') ?>" id="form-persona">
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" require placeholder="Nombre" id="nombre">
				</div>
				<div class="form-group col-sm-4">
					<label for="ap">Apellido Paterno</label>
					<input type="text" name="ap" class="form-control" require placeholder="Apellido paterno" id="ap">
				</div>
				<div class="form-group col-sm-4">
					<label for="am">Apellido Materno</label>
					<input type="text" name="am" class="form-control" require placeholder="Apellido materno" id="am">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="">Fecha de nacimiento</label>
					<input type="date" name="fn" required class="form-control" id="fn">
				</div>
				<div class="form-group col-sm-4">
					<label for="am">Genero</label>
					<input type="text" name="genero" class="form-control" require placeholder="Genero" id="genero">
				</div>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Guardar</button>
		</form>
	</div>
	<!--Tabla-->
	<div class="row">
		<div class="card col-md-12">
			<div class="card-header">
				<h4>Tabla de personas</h4>
			</div>
			<div class="card-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Fecha de Nacimiento</th>
							<th>Genero</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$count = 0;
						foreach ($personas as $persona) {
							echo '
								<tr>
								<td>' . ++$count . '</td>
								<td>' . $persona->nombre . ' ' . $persona->ap . '</td>
								<td>' . $persona->fn . '</td>
								<td>' . $persona->genero . '</td>
								<td><button type="button" class="btn btn-warning btn-sm" onClick="llenar_datos(' . $persona->id . ', `' . $persona->nombre . '`, `' . $persona->ap . '`, `' . $persona->am . '`, `' . $persona->fn . '`, `' . $persona->genero . '`)">Editar</button><a href="' . base_url('welcome/eliminar/' . $persona->id) . '" type="button" class="btn btn-danger btn-sm">Eliminar</a></td>
								</tr>
								';
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	let url = "<?php echo base_url('welcome/editar'); ?>";
	const llenar_datos = (id, nombre, ap, am, fn, genero) => {
		let path = url + "/" + id;
		document.getElementById('form-persona').setAttribute('action', path);
		document.getElementById('nombre').value = nombre;
		document.getElementById('ap').value = ap;
		document.getElementById('am').value = am;
		document.getElementById('fn').value = fn;
		document.getElementById('genero').value = genero;
	};
</script>
</body>

</html>