<?php
    namespace App\Http\Controllers;

    class LocalInfo{

       public static $IdUsuario;

      public static function Set_IdUsuario($parameterIdUsuario){
        self::$IdUsuario = $parameterIdUsuario;
      }

      public static function Get_IdUsuario(){
       return self::$IdUsuario;
      }

    }
?>