<?php
//autoload
spl_autoload_register(function($Classe){
	require_once $Classe . '.php';
});