<style type="text/css">
	.chkflt{ padding-left: 0 !important; }
	.flt_forms_btn{ font-size: 10px; float: right; margin-right: 30%; }
	.flt_forms .title{ float: left; }
</style>
<div id="catalog-filters" class="fltout megamenu-container_ banner-bottom mega-col-6" style="">
	<ul class="sub-mega-menu">
		<div class="sb-wrapper">
			<div class="filter-tag-group">

				<!-- tags groupd 3 -->
				<div class="col-md-6 col-sm-6 col-xs-24 fadeInUp animated">
					<div class="tag-group" id="coll-filter-3">
						<ul>
							<li><a title="Precio por pieza" href="#!" class="flt_selector" data-flt-cnt="flt_precio_prod"> Precio por pieza</a></li>
							<li><a title="Precio por gramo" href="#!" class="flt_selector" data-flt-cnt="flt_precio_gramo"> Precio por gramo</a></li>
							<li><a title="Precio producto" href="#!" class="flt_selector" data-flt-cnt="flt_peso"> Peso producto</a></li>
							<?php if( !isset( $_GET[P_TEXTO_BUSQUEDA] ) ) { ?>
								<li><a title="Talla" href="#!" class="flt_selector" data-flt-cnt="flt_talla">Talla</a></li>
							<?php } else { ?>
								<li>
									<a title="Categoria" href="#!" class="flt_selector" 
									data-flt-cnt="flt_categoria">Categoría</a>
								</li>
							<?php } ?>
							<li><a title="Baño" href="#!" class="flt_selector" data-flt-cnt="flt_bano">Baño</a></li>
							<li><a title="Trabajo" href="#!" class="flt_selector" data-flt-cnt="flt_trabajo">Trabajo</a></li>
							<li><a title="Línea" href="#!" class="flt_selector" data-flt-cnt="flt_linea"> Línea</a></li>
							<li><a title="Color" href="#!" class="flt_selector" data-flt-cnt="flt_color"> Color</a></li>
							<input type="hidden" id="urlcatalogoactual" value="<?php echo $catalogue_url; ?>">
						</ul>						
					</div>
				</div>

				<div class="col-md-8 col-sm-8 col-xs-24 fadeInUp animated">

					<div id="flt_precio_prod" class="tab_filtro_contenido">
						<div class="tag-group" id="coll-filter-3">
							<p class="title"> Precio por pieza  </p>
							De (ej. 12.75; 25 )
							<input type="text" id="flt_pre_pro_min" class="form-control input_flt" placeholder="$"
							name="f_pprod_min" value="" style="width:50%" onkeypress="return isNumberKey(event)">
							Hasta
							<input type="text" id="flt_pre_pro_max" class="form-control input_flt" placeholder="$" 
							name="f_pprod_max" value="" style="width:50%" onkeypress="return isNumberKey(event)">
							<button id="btn_flt_precio_pieza" class="btn" type="button">Aceptar</button>
						</div>
					</div>

					<div id="flt_precio_gramo" class="tab_filtro_contenido">
						<div class="tag-group" id="coll-filter-3">
							<p class="title"> Precio por gramo </p>
							De (ej. 0.75; 3 )
							<input type="text" id="flt_pre_pes_min" class="form-control input_flt" placeholder="$"
							name="f_ppeso_min" value="" style="width:50%" onkeypress="return isNumberKey(event)">

							Hasta
							<input type="text" id="flt_pre_pes_max" class="form-control input_flt" placeholder="$"
							name="f_ppeso_max" value="" style="width:50%" onkeypress="return isNumberKey(event)">
							<button id="btn_flt_precio_peso" class="btn" type="button">Aceptar</button>
						</div>
					</div>

					<div id="flt_peso" class="tab_filtro_contenido">
						<div class="tag-group" id="coll-filter-3">
							<p class="title"> Peso de producto (gr) </p>
							De (Gramos: ej.: 0.5; 2 )
							<input type="text" id="flt_peso_min" class="form-control input_flt" placeholder="gr"
							name="f_peso_prod_min" value="" style="width:50%" onkeypress="return isNumberKey(event)">

							Hasta
							<input type="text" id="flt_peso_max" class="form-control input_flt" placeholder="gr"
							name="f_peso_prod_max" value="" style="width:50%" onkeypress="return isNumberKey(event)">
							<button id="btn_flt_peso" class="btn" type="button">Aceptar</button>
						</div>
					</div>

					<?php if( !isset( $_GET[P_TEXTO_BUSQUEDA] ) ) { 
					// Mostrar opción a filtrar por tallas si no hay búsqueda por texto ?>
					
					<div id="flt_talla" class="tab_filtro_contenido">
						<div class="tag-group" id="coll-filter-3">
							<form id="frm_filtro_catalogo_talla" class="flt_forms" data-atributo="<?php echo P_FLT_TALLA ?>">
								<p class="title"> Talla </p>
								<input type="submit" value="FILTRAR" class="flt_forms_btn btn" data-frm="frm_filtro_catalogo_talla">
								<ul>
									<div id="opciones_filtro_talla"></div>
								</ul>
								
							</form>
						</div>
					</div>

					<?php } else { // Mostrar opción a filtrar por categoría al buscar por texto ?>

					<div id="flt_categoria" class="tab_filtro_contenido">
						<div class="tag-group" id="coll-filter-3">
							<p class="title"> Categoría </p>
							<ul>
								<div id="opciones_filtro_categoria"></div>
							</ul>
						</div>
					</div>

					<?php } ?>

					<div id="flt_bano" class="tab_filtro_contenido">
						<div class="tag-group" id="coll-filter-3">
							<form id="frm_filtro_catalogo_bano" class="flt_forms" data-atributo="<?php echo P_FLT_BANO ?>">
								<p class="title"> Baños </p>
								<input type="submit" value="FILTRAR" class="flt_forms_btn btn" data-frm="frm_filtro_catalogo_bano">
								<ul>
									<div id="opciones_filtro_bano"></div>
								</ul>
							</form>
						</div>
					</div>

					<div id="flt_trabajo" class="tab_filtro_contenido">
						<div class="tag-group" id="coll-filter-3">
							<p class="title"> Trabajo </p>
							<ul>
								<div id="opciones_filtro_trabajo"></div>
							</ul>
						</div>
					</div>

					<div id="flt_linea" class="tab_filtro_contenido">
						<div class="tag-group" id="coll-filter-3">
							<p class="title"> Línea </p>
							<ul>
								<div id="opciones_filtro_linea"></div>
							</ul>
						</div>
					</div>

					<div id="flt_color" class="tab_filtro_contenido">
						<div class="tag-group" id="coll-filter-3">
							<form id="frm_filtro_catalogo_color" class="flt_forms" data-atributo="<?php echo P_FLT_COLOR ?>">
								<p class="title"> Colores </p>
								<input type="submit" value="FILTRAR" class="flt_forms_btn btn" data-frm="frm_filtro_catalogo_color">
								<ul>
									<div id="opciones_filtro_color"></div>
								</ul>
							</form>
						</div>
					</div>

				</div>

				<!--<div class="col-md-8 col-sm-8 col-xs-24 fadeInUp animated">
				
				</div>-->

				<!-- tags groupd 3 -->
			</div>
		</div>
	</ul>
</div>