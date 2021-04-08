<?php
	/*
	*/
	if( isset( $_SESSION["login"] ) )
		$notif_ordenes = obtenerOrdenesNoLeidas( $dbh, $_SESSION["user"] );

?>
<div class="container">
  <div class="top row">

  	<div class="col-md-6 phone-shopping" align="center">
	  <span>Distribuidor de platería</span>
	</div>

	

	<div class="col-md-8">
		<ul class="text-right">
			<li class="customer-links hidden-xs">
				<ul id="accounts" class="list-inline">
					<li class="login hidden">
						<div class="header-search-fixed">
							<form id="_header-search" class="search-form" action="acatalog.php" method="get">
									
									<input type="text" name="busqueda" value="" accesskey="4" autocomplete="off" placeholder="Buscar...">
									<button type="submit" class="btn">Buscar</button>
							</form>
						</div>
					</li>
					<?php if( !isset( $_SESSION["login"] ) ) { ?>
						<li class="login">  
							<a href="login.php">Ingresar</a>  
							<span id="loginButton" class="dropdown-toggle hidden" data-toggle="dropdown">
								<a href="login.php">Ingresar</a>
								<i class="sub-dropdown1"></i>
								<i class="sub-dropdown"></i>
							</span>
							<!-- Customer Account Login -->
							<div id="loginBox" class="dropdown-menu text-left hidden">
							
								<form method="post" id="frm_login_bar" accept-charset="UTF-8" data-toggle="validator">
									<input type="hidden" value="customer_login" name="form_type">
									<input type="hidden" name="utf8" value="✓">
									<div id="bodyBox">
										<ul class="control-container customer-accounts list-unstyled">
											<li class="clearfix">
												<label for="customer_email_box" class="control-label">Usuario <span class="req">*</span></label>
												<input type="email" value="" name="email" id="customer_email" 
												class="form-control" autocomplete="off">
											</li>						 
											<li class="clearfix">
												<label for="customer_password_box" class="control-label">Password <span class="req">*</span></label>
												<input type="password" value="" name="password" id="customer_password" class="form-control password">
											</li>						  
											<li class="clearfix">
												<button id="btn_login_dd" class="btn" type="button">Ingresar</button>
											</li>
											<hr>
											<a href="password_recovery.php">Recuperar contraseña</a>
										</ul>
									</div>
								</form>
							
							</div>    
						</li>
						<li>/</li>   
						<li class="register">
							<a href="register.php" id="customer_register_link">Crear cuenta</a>
						</li>
					<?php } else { ?>
						<li class="my-account">
							<a href="account.php">Mi Cuenta</a>
							<?php if( $notif_ordenes != 0 ) {?>
								<span class="badge icon_notif_leidos">
									<?php echo $notif_ordenes; ?>
								</span>
							<?php } ?>
						</li>
						<li class="my-account">
							<a href="index.php?logout">Salir</a>
						</li> 
					<?php } ?>
				</ul>
			</li>      
			<li id="widget-social">
			  <ul class="list-inline hidden">            
				<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>                        			        
			  </ul>
			</li>        
		</ul>
		
	</div>

	<div class="col-md-10" align="center">
		<div class="header-search-fixed hidden-xs">
			<form id="_header-search" class="search-form" action="acatalog.php" method="get">
				<input type="text" name="busqueda" value="" accesskey="4" autocomplete="off" 
				placeholder="Buscar..." class="tx-top-search">
				<button type="submit" class="btn"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
<!--
	<div class="col-md-10">
		<div class="header-search-fixed hidden-xs">
			<form id="_header-search" class="search-form" 
				action="acatalog.php" method="get">
					<input type="text" name="busqueda" value="" accesskey="4" autocomplete="off" 
					placeholder="Buscar..." class="tx-top-search">
					<button type="submit" class="btn"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
-->
  </div>
</div>

<style type="text/css">
	.header-search-fixed{ float: right; margin-bottom: 5px; margin-top: 5px; margin-right: 90px; }
	
	.header-search-fixed .btn{
	    filter: none;
	    cursor: pointer;
	    text-transform: uppercase;
	    display: inline-block;
	    zoom: 1;
	    padding: 0 15px;
	    border-radius: 0;
	    background: #ffffff;
	    color: #8f8f8f;
	    border: 1px solid #dedede;
	    border-radius: 5px;
	    font-weight: 500;
	    font-family: 'Lato', sans-serif;
	    height: 30px;
	    line-height: 30px;
	    font-size: 12px;
	    margin-bottom: 2px;
	}
	.header-search-fixed .btn:hover, .header-search-fixed .btn:focus {
	    color: #ffffff;
	    background: #969d58;
	    border: 1px solid #969d58;
	    outline: none !important;
	}
	.tx-top-search {
		/*width: 420px;*/
		transition: width 0.3s;
	}
	/*.tx-top-search:focus{
		width: 350px;
	}*/

	.header-search-fixed input{
		background: #ffffff;
		border:1px solid #ccc;
		padding: 14px 8px;
		border-radius: 4px;
		color:#808080;
		font-size:13px;
		font-family:'Lato', sans-serif;
		font-weight:400; line-height:14px;
		height:18px;
	}
.header-search-fixed input:focus{
	background: #FFF;
}

</style>