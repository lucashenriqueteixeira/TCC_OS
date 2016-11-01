<?php

class Conexao
{
    //atributo que recebe a cone��o com o banco
    public static $connect;

    

    //metodo que realiza a conexao com o banco
    public static function abrirConexao() 
    {
        
        //se ele nao tiver valor executa a conexao com o banco
        if(!isset(self::$connect))
        {
            self::$connect = new PDO ('mysql:host=localhost;dbname=os_3', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //self::$connect->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPATY_STRING);
        }//fim do if
    
        //feito a conexao ou nao, ele retorna o resultado
    return self::$connect;
    
    }//fim do metodo
    
}//fim da classe
