<h1>Privilegios</h1>
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <a href="privilege.php?action=create" class="btn btn-success">Nuevo</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Privilegio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $privilege): ?>
    <tr>
      <th scope="row"><?php echo $privilege['id_privilege']; ?></th>
      <td><?php echo $privilege['privilege']; ?></td>
      <td>
        <div class="btn-group" privilege="group" aria-label="Basic mixed styles example">
            <a href="privilege.php?action=update&id=<?php echo $privilege['id_privilege']; ?>" class="btn btn-warning">Editar</a>
            <a href="privilege.php?action=delete&id=<?php echo $privilege['id_privilege']; ?>"  class="btn btn-danger">Eliminar</a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>