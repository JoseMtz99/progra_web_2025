<h1>Nuevo Privilegio</h1>
<form method="POST"  action="privilege.php?action=create">
    <div class="mb-3">
        <label for="privilege" class="form-label">Nombre del rol</label>
        <input type="text" class="form-control" id="privilege" name="privilege" placeholder="Privilegio" required>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>
</form>
<a href="./privilege.php"><button class="btn btn-danger">Cancelar</button></a>