<div class="row">
    <div class="col-md-3 col-xs-8 col-md-offset-5 col-xs-offset-2">
    	<div class="login-container animated fadeInDown">
		    <div class="loginbox bg-white">
		        <h3>BIENVENIDO</h3>
		        <div class="loginbox-or">
		            <div class="or-line"></div>
		        </div>
		        <form accept-charset="UTF-8" action="{Configuration::get('base_url')}login/acceder" method="post" class="form">
		            <input type="text" class="form-control login-input" placeholder="Usuario" name="usuario"/>
		            <input type="password" class="form-control login-input" placeholder="Contraseña" name="contrasenia"/>
		            {if isset($mensaje)}
				    <div class="logobox">
				        <label class="color-rojo">Usario y/o contraseña incorrectos</label>
				    </div>
					{/if}
		            <input type="submit" name="login" class="btn btn-primary btn-block btn-login-input" value="Acceder" id="btn-login">
		            <div class="loginbox-forgot">
		                <a href="">Se olvidó su contraseña?</a>
		            </div>
		        </form>
		        <div class="loginbox-signup">
		            <a href="http://softweb.pe">Powered by: Software Web Perú ©</a>
		        </div>
		    </div>
		</div>
    </div>
</div>