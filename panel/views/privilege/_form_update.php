<h1>Modificar Privilegio</h1>
<form method="POST"  action="privilege.php?action=update&id=<?php echo $id; ?>">
    <div class="mb-3">
        <label for="privilege" class="form-label">Nombre del privilegio</label>
        <input type="text" class="form-control" id="privilege" name="privilege" value="<?php echo isset($data['privilege']) ? $data['privilege'] : ''; ?>" placeholder="Privilegio" required>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>
</form>
<a href="./privilege.php"><button class="btn btn-danger">Cancelar</button></a>