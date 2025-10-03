<h1>Modificar Investigador</h1>
<form method="POST" action="investigador.php?action=update&id=<?php echo $id; ?>">
    <div class="mb-3">
        <label for="Primer_apellido" class="form-label">Primer apellido</label>
        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="<?php echo isset($data['primer_apellido']) ? $data['primer_apellido'] : ''; ?>" placeholder="Primer apellido" required>
    </div>
    <div class="mb-3">
        <label for="Segundo_apellido" class="form-label">Segundo apellido</label>
        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="<?php echo isset($data['segundo_apellido']) ? $data['segundo_apellido'] : ''; ?>" placeholder="Segundo apellido" required>
    </div>
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo isset($data['nombre']) ? $data['nombre'] : ''; ?>" placeholder="Nombre" required>
    </div>
    <div class="mb-3">
        <label for="Fotografia" class="form-label">Fotografía</label>
        <input type="text" class="form-control" id="fotografia" name="fotografia" value="<?php echo isset($data['fotografia']) ? $data['fotografia'] : ''; ?>" placeholder="Fotografía" required>
    </div>
    <div class="mb-3">
        <label for="Id_institucion" class="form-label">Id de la Institución</label>
        <input type="number" class="form-control" id="id_institucion" name="id_institucion" value="<?php echo isset($data['id_institucion']) ? $data['id_institucion'] : ''; ?>" placeholder="Id Institución" required>
    </div>
    <div class="mb-3">
        <label for="Semblanza" class="form-label">Semblanza</label>
        <input type="text" class="form-control" id="semblanza" name="semblanza" value="<?php echo isset($data['semblanza']) ? $data['semblanza'] : ''; ?>" placeholder="Semblanza">
    </div>
    <div class="mb-3">
        <label for="Id_tratamiento" class="form-label">Id del tratamiento</label>
        <input type="text" class="form-control" id="id_tratamiento" name="id_tratamiento" value="<?php echo isset($data['id_tratamiento']) ? $data['id_tratamiento'] : ''; ?>" placeholder="Id del tratamiento">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>
</form>