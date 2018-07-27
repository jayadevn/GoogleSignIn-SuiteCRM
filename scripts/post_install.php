<?php

	function post_install() {
	    require_once('modules/Configurator/Configurator.php');
	    $cfg = new Configurator();

	    /** Your setting to save in config_override.php */
	    $cfg->config['google_signin_clientid'] = '';
	    $cfg->config['google_signin_clientsecret'] = '';
	    $cfg->handleOverride();  
	}

?>