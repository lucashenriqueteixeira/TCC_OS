<?php
//autoload usando spl_autoload_register
spl_autoload_register(function($Class){
    //require para buscar a classe e str para suporte a servidor linux.
    require_once(str_replace('\\', '/', $Class . 'class.php'));
});//fim