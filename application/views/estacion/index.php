<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Estaciones de Radio Streaming</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('estacion/add'); ?>" class="btn btn-success btn-sm">Agregar Estación</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						
						<th>Categoria</th>
						<th>Nombre Estacion</th>
						<th>Detalle de la Estacion</th>
						<th>Url</th>
						<th>Pais</th>
						<th>Acciones</th>
                    </tr>
                    <?php foreach($estacion as $e){ ?>
                    <tr>
						
						<td><?php echo $e['categoria']; ?></td>
						<td><?php echo $e['nombrestacion']; ?></td>
						<td><?php echo $e['detallestacion']; ?></td>
						<td><?php echo $e['url']; ?></td>
						<td><?php echo $e['pais']; ?></td>
						<td>
                            <a href="<?php echo site_url('estacion/edit/'.$e['idestacion']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('estacion/remove/'.$e['idestacion']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
