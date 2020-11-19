<?php
class  Db{
    private static $conexion=NULL;

    public static function conectar(){
        try{
            $username="alyan";
            $password="lFBiGpmvxCCPKtET";

	    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$conexion= new PDO('mysql:host=localhost;dbname=login-user',$username,$password,$pdo_options);
            return self::$conexion;

        } catch (PDOException $e){
            echo "ERROR: " . $e->getMessage();
        }
    }
}

