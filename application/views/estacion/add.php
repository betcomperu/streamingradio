<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Estacion Add</h3>
            </div>
            <?php echo form_open('estacion/add'); ?>
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
									$selected = ($value == $this->input->post('categoria')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombrestacion" class="control-label">Nombrestacion</label>
						<div class="form-group">
							<input type="text" name="nombrestacion" value="<?php echo $this->input->post('nombrestacion'); ?>" class="form-control" id="nombrestacion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detallestacion" class="control-label">Detallestacion</label>
						<div class="form-group">
							<input type="text" name="detallestacion" value="<?php echo $this->input->post('detallestacion'); ?>" class="form-control" id="detallestacion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="url" class="control-label">Url</label>
						<div class="form-group">
							<input type="text" name="url" value="<?php echo $this->input->post('url'); ?>" class="form-control" id="url" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pais" class="control-label">Pais</label>
						<div class="form-group">
							
							<select class="form-control" id="pais" name="pais" value="<?php echo $this->input->post('pais'); ?>">
                                  <option value="AF" >Afganistán</option>
                                  <option value="AL" >Albania</option>
                                  <option value="DZ" >Argelia</option>
                                  <option value="AS" >Samoa Americana</option>
                                  <option value="AD" >Andorra</option>
                                  <option value="AO" >Angola</option>
                                  <option value="AI" >Anguilla</option>
                                  <option value="AQ" >Antártida</option>
                                  <option value="AG" >Antigua y Barbuda</option>
                                  <option value="AR" >Argentina</option>
                                  <option value="AM" >Armenia</option>
                                  <option value="AW" >Aruba</option>
                                  <option value="AU" >Australia</option>
                                  <option value="AT" >Austria</option>
                                  <option value="AZ" >Azerbaiyán</option>
                                  <option value="BS" >Bahamas</option>
                                  <option value="BH" >Bahrein</option>
                                  <option value="BD" >Bangladesh</option>
                                  <option value="BB" >Barbados</option>
                                  <option value="BY" >Bielorrusia</option>
                                  <option value="BE" >Bélgica</option>
                                  <option value="BZ" >Belice</option>
                                  <option value="BJ" >Benin</option>
                                  <option value="BM" >Bermudas</option>
                                  <option value="BT" >Bután</option>
                                  <option value="BO" >Bolivia</option>
                                  <option value="BA" >Bosnia y Herzegovina</option>
                                  <option value="BW" >Botswana</option>
                                  <option value="BV" >Isla Bouvet</option>
                                  <option value="BR" >Brasil</option>
                                  <option value="IO" >Territorios británicos del océano Índico</option>
                                  <option value="BN" >Brunei</option>
                                  <option value="BG" >Bulgaria</option>
                                  <option value="BF" >Burkina Faso</option>
                                  <option value="BI" >Burundi</option>
                                  <option value="KH" >Camboya</option>
                                  <option value="CM" >Camerún</option>
                                  <option value="CA" >Canadá</option>
                                  <option value="CV" >Cabo Verde</option>
                                  <option value="KY" >Islas Caimán</option>
                                  <option value="CF" >República Centroafricana</option>
                                  <option value="TD" >Chad</option>
                                  <option value="CL" >Chile</option>
                                  <option value="CN" >China</option>
                                  <option value="CX" >Isla de Christmas</option>
                                  <option value="CC" >Islas de Cocos o Keeling</option>
                                  <option value="CO" >Colombia</option>
                                  <option value="KM" >Comores</option>
                                  <option value="CG" >Congo</option>
                                  <option value="CD" >Congo, República Democrática del</option>
                                  <option value="CK" >Islas Cook</option>
                                  <option value="CR" >Costa Rica</option>
                                  <option value="CI" >Costa de Marfíl</option>
                                  <option value="HR" >Croacia (Hrvatska)</option>
                                  <option value="CU" >Cuba</option>
                                  <option value="CY" >Chipre</option>
                                  <option value="CZ" >República Checa</option>
                                  <option value="DK" >Dinamarca</option>
                                  <option value="DJ" >Djibouti</option>
                                  <option value="DM" >Dominica</option>
                                  <option value="DO" >República Dominicana</option>
                                  <option value="TP" >Timor Oriental</option>
                                  <option value="EC" >Ecuador</option>
                                  <option value="EG" >Egipto</option>
                                  <option value="SV" >El Salvador</option>
                                  <option value="GQ" >Guinea Ecuatorial</option>
                                  <option value="ER" >Eritrea</option>
                                  <option value="EE" >Estonia</option>
                                  <option value="ET" >Etiopía</option>
                                  <option value="FK" >Islas Malvinas</option>
                                  <option value="FO" >Islas Faroe</option>
                                  <option value="FJ" >Fiji</option>
                                  <option value="FI" >Finlandia</option>
                                  <option value="FR" >Francia</option>
                                  <option value="GF" >Guayana Francesa</option>
                                  <option value="PF" >Polinesia Francesa</option>
                                  <option value="TF" >Territorios franceses del Sur</option>
                                  <option value="GA" >Gabón</option>
                                  <option value="GM" >Gambia</option>
                                  <option value="GE" >Georgia</option>
                                  <option value="DE" >Alemania</option>
                                  <option value="GH" >Ghana</option>
                                  <option value="GI" >Gibraltar</option>
                                  <option value="GR" >Grecia</option>
                                  <option value="GL" >Groenlandia</option>
                                  <option value="GD" >Granada</option>
                                  <option value="GP" >Guadalupe</option>
                                  <option value="GU" >Guam</option>
                                  <option value="GT" >Guatemala</option>
                                  <option value="GN" >Guinea</option>
                                  <option value="GW" >Guinea-Bissau</option>
                                  <option value="GY" >Guayana</option>
                                  <option value="HT" >Haití</option>
                                  <option value="HM" >Islas Heard y McDonald</option>
                                  <option value="HN"  selected >Honduras</option>
                                  <option value="HK" >Hong Kong</option>
                                  <option value="HU" >Hungría</option>
                                  <option value="IS" >Islandia</option>
                                  <option value="IN" >India</option>
                                  <option value="ID" >Indonesia</option>
                                  <option value="IR" >Irán</option>
                                  <option value="IQ" >Irak</option>
                                  <option value="IE" >Irlanda</option>
                                  <option value="IL" >Israel</option>
                                  <option value="IT" >Italia</option>
                                  <option value="JM" >Jamaica</option>
                                  <option value="JP" >Japón</option>
                                  <option value="JO" >Jordania</option>
                                  <option value="KZ" >Kazajistán</option>
                                  <option value="KE" >Kenia</option>
                                  <option value="KI" >Kiribati</option>
                                  <option value="KR" >Corea</option>
                                  <option value="KP" >Corea del Norte</option>
                                  <option value="KW" >Kuwait</option>
                                  <option value="KG" >Kirguizistán</option>
                                  <option value="LA" >Laos</option>
                                  <option value="LV" >Letonia</option>
                                  <option value="LB" >Líbano</option>
                                  <option value="LS" >Lesotho</option>
                                  <option value="LR" >Liberia</option>
                                  <option value="LY" >Libia</option>
                                  <option value="LI" >Liechtenstein</option>
                                  <option value="LT" >Lituania</option>
                                  <option value="LU" >Luxemburgo</option>
                                  <option value="MO" >Macao</option>
                                  <option value="MG" >Madagascar</option>
                                  <option value="MW" >Malawi</option>
                                  <option value="MY" >Malasia</option>
                                  <option value="MV" >Maldivas</option>
                                  <option value="ML" >Malí</option>
                                  <option value="MT" >Malta</option>
                                  <option value="MH" >Islas Marshall</option>
                                  <option value="MQ" >Martinica</option>
                                  <option value="MR" >Mauritania</option>
                                  <option value="MU" >Mauricio</option>
                                  <option value="YT" >Mayotte</option>
                                  <option value="MX" >México</option>
                                  <option value="FM" >Micronesia</option>
                                  <option value="MD" >Moldavia</option>
                                  <option value="MC" >Mónaco</option>
                                  <option value="MN" >Mongolia</option>
                                  <option value="MS" >Montserrat</option>
                                  <option value="MA" >Marruecos</option>
                                  <option value="MZ" >Mozambique</option>
                                  <option value="MM" >Birmania</option>
                                  <option value="NA" >Namibia</option>
                                  <option value="NR" >Nauru</option>
                                  <option value="NP" >Nepal</option>
                                  <option value="AN" >Antillas Holandesas</option>
                                  <option value="NL" >Países Bajos</option>
                                  <option value="NC" >Nueva Caledonia</option>
                                  <option value="NZ" >Nueva Zelanda</option>
                                  <option value="NI" >Nicaragua</option>
                                  <option value="NE" >Níger</option>
                                  <option value="NG" >Nigeria</option>
                                  <option value="NU" >Niue</option>
                                  <option value="NF" >Norfolk</option>
                                  <option value="MP" >Islas Marianas del Norte</option>
                                  <option value="NO" >Noruega</option>
                                  <option value="OM" >Omán</option>
                                  <option value="PK" >Paquistán</option>
                                  <option value="PW" >Islas Palau</option>
                                  <option value="PA" >Panamá</option>
                                  <option value="PG" >Papúa Nueva Guinea</option>
                                  <option value="PY" >Paraguay</option>
                                  <option value="PE" >Perú</option>
                                  <option value="PH" >Filipinas</option>
                                  <option value="PN" >Pitcairn</option>
                                  <option value="PL" >Polonia</option>
                                  <option value="PT" >Portugal</option>
                                  <option value="PR" >Puerto Rico</option>
                                  <option value="QA" >Qatar</option>
                                  <option value="RE" >Reunión</option>
                                  <option value="RO" >Rumania</option>
                                  <option value="RU" >Rusia</option>
                                  <option value="RW" >Ruanda</option>
                                  <option value="SH" >Santa Helena</option>
                                  <option value="KN" >Saint Kitts y Nevis</option>
                                  <option value="LC" >Santa Lucía</option>
                                  <option value="PM" >St. Pierre y Miquelon</option>
                                  <option value="VC" >San Vicente y Granadinas</option>
                                  <option value="WS" >Samoa</option>
                                  <option value="SM" >San Marino</option>
                                  <option value="ST" >Santo Tomé y Príncipe</option>
                                  <option value="SA" >Arabia Saudí</option>
                                  <option value="SN" >Senegal</option>
                                  <option value="SC" >Seychelles</option>
                                  <option value="SL" >Sierra Leona</option>
                                  <option value="SG" >Singapur</option>
                                  <option value="SK" >República Eslovaca</option>
                                  <option value="SI" >Eslovenia</option>
                                  <option value="SB" >Islas Salomón</option>
                                  <option value="SO" >Somalia</option>
                                  <option value="ZA" >República de Sudáfrica</option>
                                  <option value="ES" >España</option>
                                  <option value="LK" >Sri Lanka</option>
                                  <option value="SD" >Sudán</option>
                                  <option value="SR" >Surinam</option>
                                  <option value="SJ" >Islas Svalbard y Jan Mayen</option>
                                  <option value="SZ" >Suazilandia</option>
                                  <option value="SE" >Suecia</option>
                                  <option value="CH" >Suiza</option>
                                  <option value="SY" >Siria</option>
                                  <option value="TW" >Taiwán</option>
                                  <option value="TJ" >Tayikistán</option>
                                  <option value="TZ" >Tanzania</option>
                                  <option value="TH" >Tailandia</option>
                                  <option value="TG" >Togo</option>
                                  <option value="TK" >Islas Tokelau</option>
                                  <option value="TO" >Tonga</option>
                                  <option value="TT" >Trinidad y Tobago</option>
                                  <option value="TN" >Túnez</option>
                                  <option value="TR" >Turquía</option>
                                  <option value="TM" >Turkmenistán</option>
                                  <option value="TC" >Islas Turks y Caicos</option>
                                  <option value="TV" >Tuvalu</option>
                                  <option value="UG" >Uganda</option>
                                  <option value="UA" >Ucrania</option>
                                  <option value="AE" >Emiratos Árabes Unidos</option>
                                  <option value="UK" >Reino Unido</option>
                                  <option value="US" >Estados Unidos</option>
                                  <option value="UM" >Islas menores de Estados Unidos</option>
                                  <option value="UY" >Uruguay</option>
                                  <option value="UZ" >Uzbekistán</option>
                                  <option value="VU" >Vanuatu</option>
                                  <option value="VA" >Ciudad del Vaticano (Santa Sede)</option>
                                  <option value="VE" >Venezuela</option>
                                  <option value="VN" >Vietnam</option>
                                  <option value="VG" >Islas Vírgenes (Reino Unido)</option>
                                  <option value="VI" >Islas Vírgenes (EE.UU.)</option>
                                  <option value="WF" >Islas Wallis y Futuna</option>
                                  <option value="YE" >Yemen</option>
                                  <option value="YU" >Yugoslavia</option>
                                  <option value="ZM" >Zambia</option>
                                  <option value="ZW" >Zimbabue</option>
                                  </select>
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