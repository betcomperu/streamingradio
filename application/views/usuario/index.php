<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuario Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success btn-sm">Agregar Usuario</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idusuario</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Email</th>
						<th>User</th>
						<th>Pais</th>
						<th>Foto</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($usuario as $u){ ?>
                    <tr>
						<td><?php echo $u['idusuario']; ?></td>
						<td><?php echo $u['nombre']; ?></td>
						<td><?php echo $u['apellidos']; ?></td>
						<td><?php echo $u['email']; ?></td>
						<td><?php echo $u['user']; ?></td>
						
						<td><?php echo $u['pais']; ?></td>
						<td><?php echo $u['foto']; ?></td>
						<td>
                            <a href="<?php echo site_url('usuario/edit/'.$u['idusuario']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('usuario/remove/'.$u['idusuario']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
