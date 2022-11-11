<?php

class Conexao{
    private static $instance;

    private function __construct()
    {}

    public static function getInstance()
    {
        if (is_null(self::$instance)){
            self::$instance = new PDO('mysql:host=localhost;dbname=projeto_oo', 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            self::$conexao->exec('set names utf8');
        }
        return self::$instance;
    }
}
