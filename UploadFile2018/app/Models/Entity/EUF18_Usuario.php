<?php
/*****************************************************************
*' CREADO POR: Cristian Hernandez Villo
*' FECHA CREA: 27/05/2018
*****************************************************************/
namespace App\Models\Entity;

class EUF18_Usuario{
    public $Opcion;
    public $IdUsuario;
    public $Nombres;
    public $Apellidos;
    public $Usuario;
    public $Contrasenia;
    public $Ruta;

    public function Set_Opcion($parameterOpcion = 'I'){
        $this->Opcion = $OparameterOpcion;
    }

   public function Set_IdUsuario($parameterIdUsario = 0)
   {
       $this->IdUsuario = $OparameterOpcion;
   }

   public function Set_Nombres($parameterNombres)
   {
       $this->Nombres = $parameterNombres;
   }

   public function Set_Apellidos($parameterApellidos)
   {
       $this->Apellidos = $parameterApellidos;
   }

   public function Set_Usuario($parameterUsuario)
   {
       $this->Usuario = $parameterApellidos;
   }

   public function Set_Contrasenia($parameterContrasenia)
   {
       $this->Contrasenia = $parameterContrasenia;
   }

   public function Set_Ruta($parameterRuta){
       $this->Ruta = $parameterRuta;
   }

   public function Get_IdUsuario()
   {
       return $this->IdUsuario;
   }

   public function Get_Nombres()
   {
       return $this->Nombres;
   }

   public function Get_Apellidos()
   {
       return $this->Apellidos;
   }

   public function Get_Usuario()
   {
       return $this->Usuario;
   }

   public function Get_Contrasenia()
   {
       return $this->Contrasenia;
   }

   public function Get_Ruta(){
       return $this->Ruta;
   }
}
?>
