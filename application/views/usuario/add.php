<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Add</h3>
            </div>
            <?php echo form_open('usuario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apellidos" class="control-label">Apellidos</label>
						<div class="form-group">
							<input type="text" name="apellidos" value="<?php echo $this->input->post('apellidos'); ?>" class="form-control" id="apellidos" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user" class="control-label">User</label>
						<div class="form-group">
							<input type="text" name="user" value="<?php echo $this->input->post('user'); ?>" class="form-control" id="user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="clave" class="control-label">Clave</label>
						<div class="form-group">
							<input type="text" name="clave" value="<?php echo $this->input->post('clave'); ?>" class="form-control" id="clave" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pais" class="control-label">Pais</label>
						<div class="form-group">
							<input type="text" name="pais" value="<?php echo $this->input->post('pais'); ?>" class="form-control" id="pais" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto" class="control-label">Foto</label>
						<div class="form-group">
							<input type="text" name="foto" value="<?php echo $this->input->post('foto'); ?>" class="form-control" id="foto" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>