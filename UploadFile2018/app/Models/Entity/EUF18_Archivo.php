<?php
/*****************************************************************
*' CREADO POR: Cristian Hernandez Villo
*' FECHA CREA: 27/05/2018
*****************************************************************/
namespace App\Models\Entity;
use App\Models\Entity\EUF18_Usuario;

class EUF18_Archivo{
  public $Opcion;
  public $IdArchivo;	   
  public $RutaArchivo;	   
  public $Descripcion;	   
  public $Extension;	   
  public $EUF18_Usuario;	 
  public $IdUsuario;
  public $Tamanio; 

  function __construct() {
    $this->EUF18_Usuario = new EUF18_Usuario();
  }

  public function Set_Opcion($parameterOpcion){
    $this->Opcion = $parameterOpcion;
  }

  public function Set_IdArchivo($parameterIdArchivo){
    $this->IdArchivo = $parameterIdArchivo;
  }

  public function Set_RutaArchivo($parameterRutaArchivo){
    $this->RutaArchivo = $parameterRutaArchivo;
  }

  public function Set_Descripcion($parameterDescripcion){
    $this->Descripcion = $parameterDescripcion;
  }

  public function Set_Extension($parameterExtension){
    $this->Extension = $parameterExtension;
  }


  public function Set_Usuario($parameterUsuario){
    $this->EUF18_Usuario = $parameterUsuario;
  }

  public function Set_IdUsuario($parameterIdUsuario){
    $this->IdUsuario = $parameterIdUsuario;
  }
  
  public function Set_Tamanio($parameterTamanio){
    $this->Tamanio = $parameterTamanio;
  }

  public function Get_Opcion(){
    return $this->Opcion;
  }

  public function Get_IdArchivo(){
    return $this->IdArchivo ;
  }

  public function Get_RutaArchivo(){
    return $this->RutaArchivo;
  }

  public function Get_Descripcion(){
    return $this->Descripcion ;
  }

  public function Get_Usuario(){
    return $this->EUF18_Usuario;
  }

  public function Get_IdUsuario(){
    return $this->IdUsuario;
  }

  public function Get_Extension(){
    return $this->Extension;
  }

  public function Get_Tamanio(){
    return $this->Tamanio;
  }

}
   
?>