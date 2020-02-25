<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Estacion Edit</h3>
            </div>
			<?php echo form_open('estacion/edit/'.$estacion['idestacion']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="categoria" class="control-label">Categoria</label>
						<div class="form-group">
							<select name="categoria" class="form-control">
								<option value="">select</option>
								<?php 
								$categoria_values = array(
									'Jazz'=>'Jazz',
									'Rock'=>'Rock',
									'Pop'=>'Pop',
									'Folklore'=>'Folklore',
									'Espiritual'=>'Espiritual',
									'Noticias'=>'Noticias',
									'Variado'=>'Variado',
								);

								foreach($categoria_values as $value => $display_text)
								{
									$selected = ($value == $estacion['categoria']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombrestacion" class="control-label">Nombrestacion</label>
						<div class="form-group">
							<input type="text" name="nombrestacion" value="<?php echo ($this->input->post('nombrestacion') ? $this->input->post('nombrestacion') : $estacion['nombrestacion']); ?>" class="form-control" id="nombrestacion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detallestacion" class="control-label">Detallestacion</label>
						<div class="form-group">
							<input type="text" name="detallestacion" value="<?php echo ($this->input->post('detallestacion') ? $this->input->post('detallestacion') : $estacion['detallestacion']); ?>" class="form-control" id="detallestacion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="url" class="control-label">Url</label>
						<div class="form-group">
							<input type="text" name="url" value="<?php echo ($this->input->post('url') ? $this->input->post('url') : $estacion['url']); ?>" class="form-control" id="url" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pais" class="control-label">Pais</label>
						<div class="form-group">
							<input type="text" name="pais" value="<?php echo ($this->input->post('pais') ? $this->input->post('pais') : $estacion['pais']); ?>" class="form-control" id="pais" />
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