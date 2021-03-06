<!--FIN MODAL PARA EL TRASLADO DE PACIENTES EN SERVICIOS-->
<div class="modal fade" id="modalBloqueoHoras">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Bloqueo de Hora</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
		<form class="form-horizontal FormularioAjax" id="formBloqueoHora" action="" method="POST" data-form="" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <input type="hidden" required readonly id="bloqueo_id" name="bloqueo_id" class="form-control"/>
					  <input type="hidden" required readonly id="colaborador_id" name="colaborador_id" class="form-control"/>
					  <input type="hidden" required readonly id="servicio_id" name="servicio_id" class="form-control"/>
					  <input type="hidden" required readonly id="proBloqueoHora" name="proBloqueoHora" class="form-control"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-4 mb-3">
					  <label for="bloqueo_fecha">Fecha <span class="priority">*<span/></label>
					 <input type="text" required readonly id="bloqueo_fecha" name="bloqueo_fecha" class="form-control"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label for="bloqueo_colaborador">Colaborador <span class="priority">*<span/></label>
				      <input type="text" required readonly id="bloqueo_colaborador" name="bloqueo_colaborador" class="form-control"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label for="bloqueo_servicio">Servicio <span class="priority">*<span/></label>
				      <input type="text" required readonly id="bloqueo_servicio" name="bloqueo_servicio" class="form-control"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <label for="bloqueo_obs">Observaciones <span class="priority">*<span/></label>
					  <textarea id="bloqueo_obs" name="bloqueo_obs" class="form-control" rows="3" required maxlength="250" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="Observaciones"></textarea>
					  <p id="charNum_bloqueo_obs">250 Caracteres</p>
					</div>
				</div>
				<div class="RespuestaAjax"></div>
			</form>
        </div>
	   <div class="modal-footer">
		 <button class="btn btn-primary ml-2" form="formBloqueoHora" type="submit" id="regTransferencia"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
	   </div>
      </div>
    </div>
</div>
<!--FIN MODAL PARA EL TRASLADO DE PACIENTES EN SERVICIOS-->

<!--FIN MODAL PARA EL TRASLADO DE PACIENTES EN SERVICIOS-->
<div class="modal fade" id="modalMoverServicioCitas">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Transferir</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
		<form class="form-horizontal FormularioAjax" id="formTransferirServicio" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <input type="hidden" required readonly id="agenda_id" name="agenda_id" class="form-control"/>
					  <input type="hidden" required readonly id="pacientes_id" name="pacientes_id" class="form-control"/>
					  <input type="hidden" required readonly id="servicio_id" name="servicio_id" class="form-control"/>
					  <input type="text" required readonly id="pro" name="pro" class="form-control"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-4 mb-3">
					  <label>Expediente <span class="priority">*<span/></label>
					 <input type="text" required readonly id="expediente" name="expediente" placeholder="Expediente o Identidad" class="form-control"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Fecha Cita <span class="priority">*<span/></label>
				      <input type="date" required readonly id="fecha" name="fecha" value="<?php echo date ("Y-m-d");?>" class="form-control"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Identidad <span class="priority">*<span/></label>
				      <input type="text" required readonly id="identidad" name="identidad" class="form-control"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <label>Nombre <span class="priority">*<span/></label>
					  <input type="text" required readonly id="nombre" name="nombre" class="form-control"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 mb-3">
					  <label>Servicio Anterior</label>
					  <input type="text" required readonly id="servicio_anterior" name="servicio_anterior" class="form-control"/>
					</div>
					<div class="col-md-6 mb-3">
					  <label>Servicio Nuevo</label>
						<select id="servicio_nuevo" name="servicio_nuevo" class="form-control" data-toggle="tooltip" data-placement="top" title="Servicio">
							<option value="">Seleccione<option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <label>Observaciones</label>
					  <input type="text" id="observaciones" name="observaciones" placeholder="Observaciones" class="form-control"/>
					</div>
				</div>
			</form>
        </div>
	   <div class="modal-footer">
		 <button class="btn btn-primary ml-2" form="formTransferirServicio" type="submit" id="regTransferencia"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
	   </div>
      </div>
    </div>
</div>
<!--FIN MODAL PARA EL TRASLADO DE PACIENTES EN SERVICIOS-->

<!--INICIO MODAL PARA EL INGRESO DE PACIENTES-->
<div class="modal fade" id="registrar">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Pacientes</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div>
        <div class="modal-body">		
			<form id="formulario" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">	

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item waves-effect waves-light">
					  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Informaci??n Personal</a>
					</li>
					<li class="nav-item waves-effect waves-light">
					  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="historia_clinica" aria-selected="false">Otra Informaci??n</a>
					</li>
				</ul>
				<br>
				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <input type="hidden" id="pacientes_id" name="pacientes_id" />
					  <input type="hidden" id="id-registro" name="id-registro" class="form-control"/>
					  <input type="text" required readonly id="pro" name="pro" class="form-control"/>
					</div>				
				</div>
				
				<div class="tab-content" id="myTabContent"><!-- INICIO TAB CONTENT-->
					<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB HOME-->
						<div class="form-row">
							<div class="col-md-12 mb-3" style="display: none;" id="grupo_nombre_usuario">
							  <label for="nombre">Nombre <span class="priority">*<span/></label>
							  <input type="text" required readonly id="nombre_usuario" name="nombre_usuario" class="form-control" readonly="readonly" />
							</div>					
						</div>	
						<div class="form-row">
							<div class="col-md-4 mb-3">
							  <label id="label_expediente">Expediente <span class="priority">*<span/></label>
							  <input type="text" required class="form-control" name="expediente" id="expediente" maxlength="100" readonly="readonly"/>
							</div>
							<div class="col-md-8 mb-3">
							  <label id="label_edad">Edad <span class="priority">*<span/></label>
							  <input type="text" required class="form-control" name="edad" id="edad" maxlength="100" readonly="readonly"/>
							</div>				
						</div>					
						
						<div class="form-row">			  
							<div class="col-md-4 mb-3">
							  <label>Fecha <span class="priority">*<span/></label>
							  <input type="date" required class="form-control" name="fecha_re" id="fecha_re" value="<?php echo date ("Y-m-d");?>" maxlength="100"/>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Identidad <span class="priority">*<span/></label>
							  <input type="number" required name="identidad" class="form-control" id="identidad" maxlength="100" value="0" autofocus />
							</div>
							<div class="col-md-4 mb-3">
							  <label>Apellidos <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								 <input type="text" required name="lastname" class="form-control" id="lastname" maxlength="100"/>
							     <div id="suggestions_apellido" class="suggestions"></div>
							  </div>								  
							</div>							
						</div>	
						
						<div class="form-row">			  
							<div class="col-md-4 mb-3">
							  <label>Nombres <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <input type="text" required name="name" class="search_query form-control" id="name" maxlength="100"/>
								  <div id="suggestions_name" class="suggestions"></div>
							  </div>								  
							</div>
							<div class="col-md-4 mb-3">
							  <label>Sexo <span class="priority">*<span/></label>
							  <select required name="sexo" id="sexo" class="custom-select" data-toggle="tooltip" data-placement="top" title="G??nero">
								<option value="">Seleccione</option>
					          </select> 
							</div>
							<div class="col-md-4 mb-3">
							  <label>Fecha de Nacimiento <span class="priority">*<span/></label>
							  <input type="date" required name="fecha" class="form-control" id="fecha" value="<?php echo date ("Y-m-d");?>" maxlength="100" title="Mes-Dia-A??o"/>
							</div>							
						</div>
						
						<div class="form-row">			  
							<div class="col-md-4 mb-3">
							  <label>Tel??fono <span class="priority">*<span/></label>
							  <input type="number" required name="telefono1" id="telefono1" placeholder="Ejemplo: 97567896" class="form-control" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" title="Este campo es utilizado para la plantilla SMS para enviar los mensajes de texto, debe llenarse"/>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Tel??fono </label>
						      <input type="number" name="telefono2" id="telefono2" placeholder="Ejemplo: 97567896" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" title="Este campo es utilizado para la plantilla SMS para enviar los mensajes de texto, debe llenarse" class="form-control"/>
					          </select> 
							</div>
							<div class="col-md-4 mb-3">
							  <label>Tipo <span class="priority">*<span/></label>
							  <select required name="tipo" id="tipo" class="custom-select" data-toggle="tooltip" data-placement="top" title="Tipo">
						      </select>  
							</div>								
						
						</div>	

						<div class="form-row">			  
							<div class="col-md-12 mb-3">
							  <label>Direcci??n <span class="priority">*<span/></label>
							  <textarea id="localidad" name="localidad" class="form-control" rows="3" required maxlength="250" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="Direcci??n Exacta"></textarea>
							  <p id="charNum_pacientes_localidad">250 Caracteres</p>
							</div>						
						</div>	
						
						<div class="form-row">		
							<div class="col-md-4 mb-3">
							  <label>Departamento <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="departamento" name="departamento" class="custom-select" data-toggle="tooltip" data-placement="top" title="Modalidad">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_departamento_pacientes">				
									<a data-toggle="modal" href="#" class="btn btn-outline-success"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>							
							<div class="col-md-4 mb-3">
							  <label>Municipios <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="municipio" name="municipio" class="custom-select" data-toggle="tooltip" data-placement="top" title="Religi??n">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_municipio_pacientes">				
									<a data-toggle="modal" href="#" class="btn btn-outline-success"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>						
						</div>					
					
					</div><!--FIN TAB HOME-->
					<div class="tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB OTRA INFORMACION-->
						<div class="form-row">			  
							<div class="col-md-4 mb-3">
							  <label>Pa??s <span class="priority">*<span/></label>
							  <select name="pais" id="pais" class="custom-select" data-toggle="tooltip" data-placement="top" title="Pa??s">
						      </select> 
							</div>
							<div class="col-md-4 mb-3">
							  <label>Estado Civil <span class="priority">*<span/></label>
							  <select name="estado_civil" id="estado_civil" class="custom-select" data-toggle="tooltip" data-placement="top" title="Estado Civil">
								<option value="">Seleccione</option>
					          </select> 
							</div>
							<div class="col-md-4 mb-3">
							  <label>Raza <span class="priority">*<span/></label>
							  <select name="raza" id="raza" class="custom-select" data-toggle="tooltip" data-placement="top" title="Raza">
						      </select> 
							</div>							
						</div>

						<div class="form-row">			  
							<div class="col-md-4 mb-3">
							  <label>Religi??n <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="religion" name="religion" class="custom-select" data-toggle="tooltip" data-placement="top" title="Religi??n">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_religion_pacientes">				
									<a data-toggle="modal" href="#" class="btn btn-outline-success"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Profesi??n <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="profesion" name="profesion" class="custom-select" data-toggle="tooltip" data-placement="top" title="Profesi??n">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_profesion_pacientes">				
									<a data-toggle="modal" href="#" class="btn btn-outline-success"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div> 
							</div>
							<div class="col-md-4 mb-3">
							  <label>Escolaridad <span class="priority">*<span/></label>
						      <select name="escolaridad" id="escolaridad" class="custom-select" data-toggle="tooltip" data-placement="top" title="Escolaridad">
								<option value="">Seleccione</option>
						      </select> 
							</div>							
						</div>

						<div class="form-row">			  
							<div class="col-md-6 mb-3">
							  <label>Lugar de Nacimiento <span class="priority">*<span/></label>
							  <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" placeholder="Lugar de Nacimiento" class="form-control" maxlength="100"/>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Correo</label>
						      <input type="email" name="correo" id="correo" placeholder="alguien@algo.com" class="form-control" title="Este correo ser?? utilizado para enviar las citas creadas y las reprogramaciones, como las notificaciones de las citas pendientes de los usuarios." maxlength="100"/><label id="validate"></label>
							</div>						
						</div>

						<div class="form-row">			  
							<div class="col-md-6 mb-3">
							  <label>Responsable <span class="priority">*<span/></label>
							  <input type="text" name="responsable" id="responsable" class="form-control" maxlength="100" placeholder="Responsable"/>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Parentesco <span class="priority">*<span/></label>
						      <input type="text" name="parentesco" id="parentesco" class="form-control" maxlength="100" placeholder="Parentesco"/>
							</div>						
						</div>

						<div class="form-row">			  
							<div class="col-md-6 mb-3">
							  <label>Tel??fono </label>
							  <input type="number" name="telefonoresp" placeholder="Ejemplo: 97567896" id="telefonoresp" value="" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" maxlength="100"/>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Tel??fono </label>
						      <input type="number" name="telefonoresp1" placeholder="Ejemplo: 97567896" id="telefonoresp1" value="" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" maxlength="100"/>
							</div>						
						</div>						
					</div><!--FIN TAB OTRA INFORMACION-->					
				
				</div>				
			</form>
        </div>		
		<div class="modal-footer">
			<button class="btn btn-primary ml-2" form="formulario" type="submit" id="reg"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			<button class="btn btn-warning ml-2" form="formulario" type="submit" id="edi"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Editar</button>			
		</div>			
      </div>
    </div>
</div>	
<!--FIN MODAL PARA EL INGRESO DE PACIENTES-->

<!--INICIO MODAL PARA EL REGISTRO DE PRECLINICA-->
<div class="modal fade" id="agregar_preclinica">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Precl??nica</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form id="formulario_agregar_preclinica">
				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <input type="hidden" required="required" readonly id="id-registro" name="id-registro" class="form-control"/>
					  <input type="text" required="required" readonly id="pro" name="pro" class="form-control"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-4 mb-3">
					  <label>Expediente <span class="priority">*<span/></label>
					 <input type="number" required="required" id="expediente" placeholder="Expediente o Identidad" name="expediente" class="form-control"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Fecha <span class="priority">*<span/></label>
				      <input type="date" required="required" id="fecha" name="fecha" value="<?php echo date ("Y-m-d");?>" class="form-control"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Identidad <span class="priority">*<span/></label>
				      <input type="text" required="required" readonly id="identidad" name="identidad" class="form-control"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 mb-3">
					  <label>Nombre <span class="priority">*<span/></label>
					  <input type="text" required="required" readonly id="nombre" name="nombre" class="form-control"/>
					</div>
					<div class="col-md-6 mb-3">
					  <label>Profesional <span class="priority">*<span/></label>
					  <input type="text" required="required" readonly id="profesional_consulta" name="profesional_consulta" class="form-control"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-4 mb-3">
					  <label>Presi??n Arterial</label>
					  <input type="text" required="required" id="pa" name="pa" class="form-control" placeholder="Presi??n Arterial"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Frecuencia Respiratoria</label>
					  <input type="number" required="required" id="fr" name="fr" class="form-control" placeholder="Frecuencia Respiratoria"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Frecuencia Cardiaca</label>
					  <input type="number" required="required" id="fc" name="fc" class="form-control" placeholder="Frecuencia Cardiaca"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-4 mb-3">
					  <label>Temperatura</label>
					 <input type="number" required="required" id="temperatura" name="temperatura" class="form-control" placeholder="Temperatura"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Peso</label>
					  <input type="text" required="required" id="peso" name="peso" class="form-control" placeholder="Peso"/>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Talla</label>
					  <input type="text" required="required" id="talla" name="talla" class="form-control" placeholder="Talla"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-4 mb-3">
					  <label>Glucometr??a</label>
					  <input type="text" required="required" id="glucometria" name="glucometria" placeholder="Glucometr??a" class="form-control"/>
					</div>
				</div>

				<div class="form-row" id="grupo">
					<div class="col-md-4 mb-3">
					  <label>Servicio</label>
						<select id="servicio" name="servicio" class="form-control" data-toggle="tooltip" data-placement="top" title="Servicio">
							<option value="">Seleccione<option>
						</select>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Unidad</label>
						<select id="unidad" name="unidad" class="form-control" data-toggle="tooltip" data-placement="top" title="Unidad">
							<option value="">Seleccione<option>
						</select>
					</div>
					<div class="col-md-4 mb-3">
					  <label>Profesional</label>
						<select id="medico" name="medico" class="form-control" data-toggle="tooltip" data-placement="top" title="Profesional">
							<option value="">Seleccione<option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <label>Observaciones</label>
					  <input type="text" id="observaciones" name="observaciones" placeholder="Observaciones" class="form-control"/>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="calidez" name="calidez" value="1">
						  <label class="form-check-label" for="queja">Visita a Sendero</label>
						</div>
					</div>
				</div>
			</form>
        </div>
	   <div class="modal-footer">
		 <button class="btn btn-primary ml-2" form="formulario_agregar_preclinica" type="submit" id="reg_preclinica"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
		 <button class="btn btn-primary ml-2" form="formulario_agregar_preclinica" type="submit" id="reg_preclinica_edicion"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
		 <button class="btn btn-warning ml-2" form="formulario_agregar_preclinica" type="submit" id="edit_preclinica"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Editar</button>
	   </div>
      </div>
    </div>
</div>
<!--FIN MODAL PARA EL REGISTRO DE PRECLINICA-->

<!--INICIO MODAL PARA EL REGISTRO DE POSTCLINICA-->
<div class="modal fade" id="agregar_postclinica">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Postclinica</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="invoice-form" id="formulario_agregar_postclinica">
				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <input type="hidden" required="required" readonly id="id-registro" name="id-registro" />
					  <input type="text" required="required" readonly id="pro" name="pro" class="form-control" readonly="readonly"/>
					</div>
				</div>

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item waves-effect waves-light">
					  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Postcl??nica</a>
					</li>
					<li class="nav-item waves-effect waves-light">
					  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="false">Tratamiento</a>
					</li>
				</ul>
				<br/>
				<div class="tab-content" id="myTabContent"><!-- INICIO TAB CONTENT-->
					<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB HOME-->
						tEST
					</div>
					<div class="tab-pane fade active show" id="menu1" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB HOME-->
						Hola
					</div>					
				</div>


				<div class="tab-content" id="myTabContent"><!-- INICIO TAB CONTENT-->
					<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB HOME-->
						<div class="form-row">
							<div class="col-md-4 mb-3">
							  <label>Expediente</label>
							 <input type="number" required="required" id="expediente" name="expediente" placeholder="Expediente o Identidad" class="form-control"/>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Fecha</label>
							 <input type="date" required="required" id="fecha" name="fecha" value="<?php echo date ("Y-m-d");?>" class="form-control"/>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Identidad</label>
							  <input type="text" required="required" readonly id="identidad" name="identidad" class="form-control"/>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-3">
							  <label>Expediente</label>
							 <input type="text" required="required" id="nombre" name="nombre" placeholder="Expediente o Identidad" class="form-control"/>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Profesional</label>
							 <input type="text" required="required" readonly id="profesional_consulta" name="profesional_consulta" placeholder="Profesional" class="form-control"/>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-4 mb-3">
							  <label>Patolog??a</label>
							  <div class="input-group mb-3">
								  <select id="patologia1" name="patologia1" class="custom-select" data-toggle="tooltip" data-placement="top" title="Patolog??a">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_municipio_pacientes">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Fecha</label>
							  <input type="date" required="required" id="fecha_siguiente" name="fecha_siguiente" value="<?php echo date ("Y-m-d");?>" class="form-control"/>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Hora</label>
							  <input type="time" required="required" id="hora" name="hora" class="form-control"/>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-4 mb-3">
							  <label>Servicio</label>
							  <select id="servicio" name="servicio" class="custom-select" data-toggle="tooltip" data-placement="top" title="Servicio">
								<option value="">Seleccione</option>
							  </select>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Unidad</label>
							  <select id="unidad" name="unidad" class="custom-select" data-toggle="tooltip" data-placement="top" title="Unidadd">
								<option value="">Seleccione</option>
							  </select>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Profesional</label>
							  <select id="colaborador" name="colaborador" class="custom-select" data-toggle="tooltip" data-placement="top" title="Profesional">
								<option value="">Seleccione</option>
							  </select>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-12 mb-3">
							  <label>Observaciones</label>
							  <input type="text" required="required" placeholder="Observaciones" id="observacion" name="observacion" class="form-control"/>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-12 mb-3">
							  <label>Procedimiento</label>
							  <input type="text" required="required" placeholder="Procedimiento" id="procedimiento" name="procedimiento" class="form-control"/>
							</div>
						</div>

					</div><!-- FIN TAB HOME-->
					<div class="tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB TRATAMIENTO-->
						<div class="panel panel-success">
							<div class="panel-heading">
							   <h3 class="panel-title"><center><b>Medicamentos</b></center></h3>
							</div>
								  <div class="form-group row table-responsive-xl overflow-auto">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<table class="table table-bordered table-hover" id="invoiceItem">
											<thead align="center" class="table-success">
												<tr>
													<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
													<th width="26%">Medicamento</th>
													<th width="20%">V??a</th>
													<th width="29%">Frecuencia</th>
													<th width="32%">Recomendaciones</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input class="itemRow" type="checkbox"></td>
													<td>
														<input type="hidden" name="productoID[]" id="productoID_0" class="form-control" placeholder="C??digo Producto" autocomplete="off">
														<div class="input-group mb-3">
															<input type="text" name="productName[]" id="productName_0" class="form-control producto" placeholder="Medicamento" autocomplete="off">
															<div id="suggestions_producto_0" class="suggestions"></div>
															<div class="input-group-append" id="grupo_buscar_colaboradores">
																<a data-toggle="modal" href="#" class="btn btn-outline-success buscar_productos"><div class="sb-nav-link-icon"></div><i class="buscar_producto fas fa-search-plus fa-lg"></i></a>
															</div>
														</div>
													</td>
													<td>
														<select name="via[]" id="via_0" class="custom-select" data-toggle="tooltip" data-placement="top" title="Via"></select>
													</td>
													<td>
														<input type="text" name="frecuencia[]" id="frecuencia_0" class="form-control price" placeholder="Frecuencia" autocomplete="off">
													</td>
													<td>
														<input type="text" name="recomendaciones[]" id="recomendaciones_0" class="form-control" placeholder="Recomendaciones" autocomplete="off">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="form-group row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<button class="btn btn-success ml-3" id="addRows" type="button" data-toggle="tooltip" data-placement="top" title="Agregar filas en la factura"><div class="sb-nav-link-icon"></div><i class="fas fa-plus fa-lg"></i> Agregar</button>
										<button class="btn btn-danger delete" id="removeRows" type="button" data-toggle="tooltip" data-placement="top" title="Remover filas en la factura"><div class="sb-nav-link-icon"></div><i class="fas fa-minus fa-lg"></i> Remover</button>
									</div>
									</div>
								  </div>
						</div>
					</div><!-- FIN TAB TRATAMIENTO-->
				</div><!-- FIN TAB CONTENT-->
			</form>
        </div>
	   <div class="modal-footer">
		 <button class="btn btn-primary ml-2" form="formulario_quejas" type="submit" id="reg_postclinica"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
		 <button class="btn btn-primary ml-2" form="formulario_quejas" type="submit" id="reg_postclinica_edicion"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
		 <button class="btn btn-warning ml-2" form="formulario_quejas" type="submit" id="edit_posclinica"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Editar</button>
	   </div>
      </div>
    </div>
</div>
<!--FIN MODAL PARA EL REGISTRO DE POSTCLINICA-->

<!--INICIO MODAL PARA EL REGISTRO DE ENTREVISTA EN TRABAJO SOCIAL-->
<div class="modal fade" id="agregar_postclinica">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Postclinica</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="invoice-form" id="formulario_agregar_postclinica">
				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <input type="hidden" required="required" readonly id="id-registro" name="id-registro" />
					  <input type="text" required="required" readonly id="pro" name="pro" class="form-control" readonly="readonly"/>
					</div>
				</div>

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item waves-effect waves-light">
					  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Postcl??nica</a>
					</li>
					<li class="nav-item waves-effect waves-light">
					  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="false">Tratamiento</a>
					</li>
				</ul>

				<div class="tab-content" id="myTabContent"><!-- INICIO TAB CONTENT-->
					<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB HOME-->
						<div class="form-row">
							<div class="col-md-4 mb-3">
							  <label>Expediente</label>
							 <input type="number" required="required" id="expediente" name="expediente" placeholder="Expediente o Identidad" class="form-control"/>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Fecha</label>
							 <input type="date" required="required" id="fecha" name="fecha" value="<?php echo date ("Y-m-d");?>" class="form-control"/>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Identidad</label>
							  <input type="text" required="required" readonly id="identidad" name="identidad" class="form-control"/>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-3">
							  <label>Expediente</label>
							 <input type="text" required="required" id="nombre" name="nombre" placeholder="Expediente o Identidad" class="form-control"/>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Profesional</label>
							 <input type="text" required="required" readonly id="profesional_consulta" name="profesional_consulta" placeholder="Profesional" class="form-control"/>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-4 mb-3">
							  <label>Patolog??a</label>
							  <div class="input-group mb-3">
								  <select id="patologia1" name="patologia1" class="custom-select" data-toggle="tooltip" data-placement="top" title="Patolog??a">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_municipio_pacientes">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Fecha</label>
							  <input type="date" required="required" id="fecha_siguiente" name="fecha_siguiente" value="<?php echo date ("Y-m-d");?>" class="form-control"/>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Hora</label>
							  <input type="time" required="required" id="hora" name="hora" class="form-control"/>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-4 mb-3">
							  <label>Servicio</label>
							  <select id="servicio_postclinica" name="servicio_postclinica" class="custom-select" data-toggle="tooltip" data-placement="top" title="Servicio">
								<option value="">Seleccione</option>
							  </select>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Unidad</label>
							  <select id="unidad" name="unidad" class="custom-select" data-toggle="tooltip" data-placement="top" title="Unidadd">
								<option value="">Seleccione</option>
							  </select>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Profesional</label>
							  <select id="colaborador" name="colaborador" class="custom-select" data-toggle="tooltip" data-placement="top" title="Profesional">
								<option value="">Seleccione</option>
							  </select>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-12 mb-3">
							  <label>Observaciones</label>
							  <input type="text" required="required" placeholder="Observaciones" id="observacion" name="observacion" class="form-control"/>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-12 mb-3">
							  <label>Procedimiento</label>
							  <input type="text" required="required" placeholder="Procedimiento" id="procedimiento" name="procedimiento" class="form-control"/>
							</div>
						</div>

					</div><!-- FIN TAB HOME-->
					<div class="tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB TRATAMIENTO-->
						<div class="panel panel-success">
							<div class="panel-heading">
							   <h3 class="panel-title"><center><b>Medicamentos</b></center></h3>
							</div>
								  <div class="form-group row table-responsive-xl overflow-auto">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<table class="table table-bordered table-hover" id="invoiceItem">
											<thead align="center" class="table-success">
												<tr>
													<th width="2%"><input id="checkAllPostcllinica" class="formcontrol" type="checkbox"></th>
													<th width="26%">Medicamento</th>
													<th width="20%">V??a</th>
													<th width="29%">Frecuencia</th>
													<th width="32%">Recomendaciones</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input class="itemRowPostcllinica" type="checkbox"></td>
													<td>
														<input type="hidden" name="productoIDPostcllinica[]" id="productoIDPostcllinica_0" class="form-control" placeholder="C??digo Producto" autocomplete="off">
														<div class="input-group mb-3">
															<input type="text" name="productNamePostcllinica[]" id="productNamePostcllinica_0" class="form-control producto" placeholder="Medicamento" autocomplete="off">
															<div id="suggestions_productoPostcllinica_0" class="suggestions"></div>
															<div class="input-group-append" id="grupo_buscar_colaboradores">
																<a data-toggle="modal" href="#" class="btn btn-outline-success buscar_productosPostcllinica"><div class="sb-nav-link-icon"></div><i class="buscar_productoPostcllinica fas fa-search-plus fa-lg"></i></a>
															</div>
														</div>
													</td>
													<td>
														<select name="via[]" id="via_0" class="custom-select" data-toggle="tooltip" data-placement="top" title="Via"></select>
													</td>
													<td>
														<input type="text" name="frecuenciaPostcllinica[]" id="frecuenciaPostcllinica_0" class="form-control price" placeholder="Frecuencia" autocomplete="off">
													</td>
													<td>
														<input type="text" name="recomendacionesPostcllinica[]" id="recomendacionesPostcllinica_0" class="form-control" placeholder="Recomendaciones" autocomplete="off">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="form-group row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<button class="btn btn-success ml-3" id="addRowsPostcllinica" type="button" data-toggle="tooltip" data-placement="top" title="Agregar filas en la factura"><div class="sb-nav-link-icon"></div><i class="fas fa-plus fa-lg"></i> Agregar</button>
										<button class="btn btn-danger delete" id="removeRowsPostcllinica" type="button" data-toggle="tooltip" data-placement="top" title="Remover filas en la factura"><div class="sb-nav-link-icon"></div><i class="fas fa-minus fa-lg"></i> Remover</button>
									</div>
									</div>
								  </div>
						</div>
					</div><!-- FIN TAB TRATAMIENTO-->
				</div><!-- FIN TAB CONTENT-->
			</form>
        </div>
	   <div class="modal-footer">
		 <button class="btn btn-primary ml-2" form="formulario_quejas" type="submit" id="reg"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
		 <button class="btn btn-primary ml-2" form="formulario_quejas" type="submit" id="edit"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
	   </div>
      </div>
    </div>
</div>

<!--FIN MODAL PARA EL REGISTRO DE ENTREVISTA EN TRABAJO SOCIAL-->
<div class="modal fade" id="modal_entrevista_trabajo_social">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Entrevista</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formulario_entrevista_trabajo_social" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item waves-effect waves-light">
					  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home_entrevista" role="tab" aria-controls="home_entrevista" aria-selected="false">Informaci??n Personal</a>
					</li>
					<li class="nav-item waves-effect waves-light">
					  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu_entrevista" role="tab" aria-controls="menu_entrevista" aria-selected="false">Entrevista</a>
					</li>
					<li class="nav-item waves-effect waves-light">
					  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu_intervencion" role="tab" aria-controls="menu_intervencion" aria-selected="false">Intervenci??n</a>
					</li>
				</ul>
				<br>
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<input type="text" required="required" id="pro_entrevista" name="pro_entrevista" class="form-control" readonly="readonly"/>
						<input type="hidden" required="required" id="pacientes_id" name="pacientes_id" class="form-control"/>
					</div>
				</div>

				<div class="tab-content" id="myTabContent"><!-- INICIO TAB CONTENT-->

					<div class="tab-pane fade active show" id="home_entrevista" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB HOME-->

						<div class="form-row">
							<div class="col-md-4 mb-3">
							  <label>Expediente <span class="priority">*<span/></label>
							 <input type="number" id="expediente" name="expediente" placeholder="Expediente o Identidad" class="form-control" required>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Fecha <span class="priority">*<span/></label>
							  <input type="date" id="fecha" name="fecha" value="<?php echo date ("Y-m-d");?>" class="form-control" required>
							</div>
							<div class="col-md-4 mb-3">
							  <label>Modalidad <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="modalidad" name="modalidad" class="custom-select" data-toggle="tooltip" data-placement="top" title="Modalidad">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_modalidad_entrevista" style="display: none">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-12 mb-3">
							  <label>Nombre <span class="priority">*<span/></label>
							 <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" readonly>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-3">
							  <label>Persona Entrevistada <span class="priority">*<span/></label>
							  <input type="text" required="required" id="entrevistado" name="entrevistado"  placeholder="Persona Entrevistada" class="form-control" required>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Relaci??n <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="relacion" name="relacion" class="custom-select" data-toggle="tooltip" data-placement="top" title="Relaci??n">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_relacion_entrevista" style="display: none">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-3">
							  <label>Solicitado Por <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="solicitado" name="solicitado" class="custom-select" data-toggle="tooltip" data-placement="top" title="Solicitado Por">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_solicitado_por_entrevista">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Agenda <span class="priority">*<span/></label>
							  <input type="text" required="required" id="agenda" name="agenda" placeholder="Indicaciones para el ??rea de Admisi??n" class="form-control" required>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-4 mb-3">
							  <label>Servicio <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="servicio_id" name="servicio_id" class="custom-select" data-toggle="tooltip" data-placement="top" title="Servicio">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_sevicio_entrevista" style="display: none">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
						</div>

					</div><!--FIN TAB HOME-->

					<div class="tab-pane fade" id="menu_entrevista" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB ENTREVISTA-->

						<div class="col-md-12 mb-3">
							<div class="card">
							  <div class="card-header text-white bg-info mb-3" align="center">
								Motivo de la Entrevista
							  </div>
							  <div class="card-body">
								<div class="input-group">
							      <textarea id="motivo" name="motivo" required placeholder="Motivo de la Entrevista" class="form-control" maxlength="250" rows="3"></textarea>
								  <div class="input-group-prepend" style="display: none">
									<span class="input-group-text">
										<i class="btn btn-outline-success fas fa-microphone-alt fa-lg" id="search_motivo_entrevista_start"></i>
										<i class="btn btn-outline-success fas fa-microphone-slash fa-lg" id="search_motivo_entrevista_stop"></i>
									</span>
								  </div>
								</div>
								<p id="charNumMotivoE">255 Caracteres</p>
							  </div>
							</div>
						</div>

						<div class="card">
							  <div class="card-header text-white bg-info mb-3" align="center">
								Desarrollo de la Entrevista
							  </div>
							  <div class="card-body">
								<div class="input-group">
								  <textarea id="desarrollo" name="desarrollo" required placeholder="Desarrollo de la Entrevista" class="form-control" maxlength="250" rows="3"></textarea>
								  <div class="input-group-prepend" style="display: none">
									<span class="input-group-text">
										<i class="btn btn-outline-success fas fa-microphone-alt fa-lg" id="search_desarrollo_entrevista_start"></i>
										<i class="btn btn-outline-success fas fa-microphone-slash fa-lg" id="search_desarrollo_entrevista_stop"></i>
									</span>
								  </div>
								</div>
								<p id="charNumDesarrollo">255 Caracteres</p>
							  </div>
						</div>

						<div class="card">
							  <div class="card-header text-white bg-info mb-3" align="center">
								Valoraci??n de la Situaci??n-Impresi??n Dignostica
							  </div>
							  <div class="card-body">
								<div class="input-group">
								  <textarea id="valoracion" name="valoracion" required placeholder="Motivo de la Entrevista" class="form-control" maxlength="250" rows="3"></textarea>
								  <div class="input-group-prepend" style="display: none">
									<span class="input-group-text">
										<i class="btn btn-outline-success fas fa-microphone-alt fa-lg" id="search_valoracion_situacion_start"></i>
										<i class="btn btn-outline-success fas fa-microphone-slash fa-lg" id="search_valoracion_situacion_stop"></i>
									</span>
								  </div>
								</div>
								<p id="charNumValoracion">255 Caracteres</p>
							  </div>
						</div>

						<div class="card">
							  <div class="card-header text-white bg-info mb-3" align="center">
								Observaciones-Plan de Intervenci??n
							  </div>
							  <div class="card-body">
								<div class="input-group">
								  <textarea id="observaciones" name="observaciones" required placeholder="Observaciones Plan de Intervenci??n" class="form-control" maxlength="250" rows="3"></textarea>
								  <div class="input-group-prepend" style="display: none">
									<span class="input-group-text">
										<i class="btn btn-outline-success fas fa-microphone-alt fa-lg" id="search_observaciones_start"></i>
										<i class="btn btn-outline-success fas fa-microphone-slash fa-lg" id="search_observaciones_stop"></i>
									</span>
								  </div>
								</div>
								<p id="charNumSituacion">255 Caracteres</p>
							  </div>
						</div>

					</div><!--FIN TAB ENTREVISTA-->

					<div class="tab-pane fade" id="menu_intervencion" role="tabpanel" aria-labelledby="home-tab"><!-- INICIO TAB ENTREVISTA-->

						<div class="form-row">
							<div class="col-md-6 mb-3">
							  <label>Clasificaci??n 1 <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="clasificacion1" name="clasificacion1" class="custom-select" data-toggle="tooltip" data-placement="top" title="Clasificaci??n 1">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_clasificacion_ts_1">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Tipolog??a 1 <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="tipologia1" name="tipologia1" class="custom-select" data-toggle="tooltip" data-placement="top" title="Tipolog??a 1">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_tipologia_ts_1">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-3">
							  <label>Clasificaci??n 2 <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="clasificacion2" name="clasificacion2" class="custom-select" data-toggle="tooltip" data-placement="top" title="Clasificaci??n 2">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_clasificacion_ts_2">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Tipolog??a 2 <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="tipologia2" name="tipologia2" class="custom-select" data-toggle="tooltip" data-placement="top" title="Tipolog??a 2">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_tipologia_ts_2">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-3">
							  <label>Clasificaci??n 3 <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="clasificacion3" name="clasificacion3" class="custom-select" data-toggle="tooltip" data-placement="top" title="Clasificaci??n 3">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_clasificacion_ts_3">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
							<div class="col-md-6 mb-3">
							  <label>Tipolog??a 3 <span class="priority">*<span/></label>
							  <div class="input-group mb-3">
								  <select id="tipologia3" name="tipologia3" class="custom-select" data-toggle="tooltip" data-placement="top" title="Tipolog??a 3">
									<option value="">Seleccione</option>
								  </select>
								  <div class="input-group-append" id="buscar_tipologia_ts_3">
									<a data-toggle="modal" href="#" class="btn btn-outline-success" id="servicio_boton"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
								  </div>
							   </div>
							</div>
						</div>

					</div><!--FIN TAB ENTREVISTA-->
				</div>
			</form>
        </div>
		<div class="modal-footer">
			<button class="btn btn-primary ml-2" form="formulario_entrevista_trabajo_social" type="submit" id="reg_entrevista"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			<button class="btn btn-warning ml-2" form="formulario_entrevista_trabajo_social" type="submit" id="edi_entrevista"><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
			<button class="btn btn-danger ml-2" form="formulario_entrevista_trabajo_social" type="submit" id="delete_entrevista"><div class="sb-nav-link-icon"></div><i class="fa fa-trash fa-lg"></i> Editar</button>
		</div>
      </div>
    </div>
</div>
<!--FIN MODAL PARA EL REGISTRO DE ENTREVISTA EN TRABAJO SOCIAL-->

<!--INICIO MODAL SOLICITADO POR TS-->
<div class="modal fade" id="modalSolicitadoPorTS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda Colaborador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formularioSolicitadoPorTS">
				<div class="table-responsive">
					<table id="dataTableSolicitadoPorTS" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Solicitado por</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL SOLICITADO POR TS-->

<!--INICIO MODAL CLASIFICACION TS-->
<div class="modal fade" id="modalClasificacionTS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda Clasificaci??n Diagnostica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formularioClasificacionTS">
				<div class="table-responsive">
					<table id="dataTableClasificacionTS" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Clasificaci??n Diagnostica</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL CLASIFICACIONTS-->

<!--INICIO MODAL TIPOLOGIA TS-->
<div class="modal fade" id="modalTipologiaTS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda Clasificaci??n Diagnostica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formularioTipologiaTS">
				<div class="table-responsive">
					<table id="dataTableTipologiaTS" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Clasificaci??n Diagnostica</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL TIPOLOGIA-->

<!--INICIO MODAL BUSQUEDA CENTRO REFERENCIAS-->
<div class="modal fade" id="modalCentroReferencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Centros</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formularioBusquedaCentroReferencia">
				<div class="table-responsive">
					<table id="dataTableCentroReferencias" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
							<th>Seleccionar</th>
							<th>Centro</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL BUSQUEDA CENTRO REFERENCIAS-->

<!--INICIO MODAL BUSQUEDA PATOLOGIA-->
<div class="modal fade" id="modalPatologia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Patolog??as</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formularioBusquedaPatologia">
				<div class="table-responsive">
					<table id="dataTablePatologias" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
							<th>Seleccionar</th>
							<th>Patolog??a</th>
							<th>Descripci??n</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL BUSQUEDA PATOLOGIA-->

<!--INICIO MODAL BUSQUEDA PRODUCTOS-->
<div class="modal fade" id="modal_productos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Productos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formulario_busqueda_productos">
			<input type="hidden" id="row" name="row" class="form-control"/>
			<input type="hidden" id="col" name="col" class="form-control"/>
				<div class="table-responsive">
					<table id="dataTableProductos" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
							<th>Seleccionar</th>
							<th>Producto</th>
							<th>Concentraci??n</th>
							<th>Unidad</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL BUSQUEDA PRODUCTOS-->

<!--INICIO MODAL SERVICIOS-->
<div class="modal fade" id="modal_busqueda_servicios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Servicios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formulario_busqueda_servicios">
				<div class="table-responsive">
					<table id="dataTableServicios" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Servicio</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL SERVICIOS-->

<!--INICIO MODAL UNIDAD-->
<div class="modal fade" id="modalBusquedaUnidad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Undad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formularioBusquedaUnidad">
				<div class="table-responsive">
					<table id="dataTableUnidad" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Servicio</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL UNIDAD-->

<!--INICIO MODAL PROFESIONALES-->
<div class="modal fade" id="modalBusquedaProfesionales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Profesonales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formularioBusquedaProfesionales">
				<div class="table-responsive">
					<table id="dataTableProfesionales" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Servicio</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL PROFESIONALES-->

<!--INICIO MODAL DEPARTAMENTOS-->
<div class="modal fade" id="modal_busqueda_departamentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda Departamentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formulario_busqueda_departamentos">
				<div class="table-responsive">
					<table id="dataTableDepartamentos" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Departamento</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL DEPARTAMENTOS-->

<!--INICIO MODAL DEPARTAMENTOS-->
<div class="modal fade" id="modal_busqueda_municipios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda Municipios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formulario_busqueda_municipios">
				<div class="table-responsive">
					<table id="dataTableMunicipios" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Departamento</th>
								<th>Municipio</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL DEPARTAMENTOS-->

<!--INICIO MODAL RELIGION-->
<div class="modal fade" id="modal_busqueda_religion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Religiones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formulario_busqueda_religion">
				<div class="table-responsive">
					<table id="dataTableReligion" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Religi??n</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL RELIGION-->

<!--INICIO MODAL PACIENTES-->
<div class="modal fade" id="modal_busqueda_pacientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Pacientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formulario_busqueda_pacientes">
				<div class="table-responsive">
					<table id="dataTablePacientes" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Usuario</th>
								<th>Identidad</th>
								<th>Expediente</th>
								<th>Correo</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL PACIENTES-->

<!--INICIO MODAL PROFESION-->
<div class="modal fade" id="modal_busqueda_profesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Profesiones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formulario_busqueda_profesion">
				<div class="table-responsive">
					<table id="dataTableProfesiones" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Profesi??n</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL PROFESION-->

<!--INICIO MODAL PROFESION-->
<div class="modal fade" id="modal_busqueda_estado_reprogramacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">B??squeda de Profesiones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="formulario_busqueda_estado_reprogramacion">
				<div class="table-responsive">
					<table id="dataTableEstadoReprogramacion" class="table table-striped table-condensed table-hover" style="width:100%">
						<thead align="center">
							<tr>
								<th>Seleecionar</th>
								<th>Estado</th>
							</tr>
						</thead>
					</table>
				</div>
			  </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL PROFESION-->

<!--INICIO MODAL CONFIRMAR ACCESO-->
<div class="modal fade" id="modal_acceso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false">
  <div class="modal-dialog modal-content-centered" role="document">
	<div class="modal-content">
	<form class="form-horizontal FormularioAjax" id="formulario_acceso">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="myModalLabel"><i class="fas fa-sign-in-alt"></i> Confirmar Ingreso</h4>
		<input type="hidden" id="row" name="row" class="form-control"/>
		<input type="hidden" id="col" name="col" class="form-control"/>
	  </div>
	  <div class="modal-body">
		<div class="form-group">
			 <p for="end" class="col-sm-2 control-label">Contrase??a</p>
			 <div class="col-sm-4">
				<input type="password" required="required" id="pass1" name="pass1" class="form-control"/>
			 </div>
			 <p for="end" class="col-sm-2 control-label">Contrase??a</p>
			 <div class="col-sm-4">
				<input type="password" required="required" id="pass2" name="pass2" class="form-control"/>
			 </div>
		 </div>
	  </div>
	  <div class="modal-footer">
		<button class="btn btn-primary ml-2" type="submit" id="confirmar_acceso"><div class="sb-nav-link-icon"></div><i class="fas fa-sign-in-alt fa-lg"></i> Confirmar</button>
	  </div>
	</form>
	</div>
  </div>
</div>
<!--FIN MODAL CONFIRMAR ACCESOS-->
