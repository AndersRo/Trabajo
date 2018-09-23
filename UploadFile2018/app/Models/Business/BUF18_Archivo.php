<?php
/*****************************************************************
*' CREADO POR: Cristian Hernandez Villo
*' FECHA CREA: 27/05/2018
*****************************************************************/
namespace app\Models\Business;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use app\Models\Entity\EUF18_Archivo;

class BUF18_Archivo extends Model{

    public function Get_Archivo($parameterIdUsuario){
        $query= "Call spUF18_GET_BusquedaGeneral1( 'Get_Archivo','%', ".$parameterIdUsuario.",0)";
        return DB::select($query);
    }

    public function Set_Archivo(EUF18_Archivo $EUF18_Archivo){
        $query = "Call spUF18_SET_Archivo('". $EUF18_Archivo->Get_Opcion()."',".$EUF18_Archivo->Get_IdArchivo().",'".$EUF18_Archivo->Get_RutaArchivo()."','"
        .$EUF18_Archivo->Get_Descripcion()."','". $EUF18_Archivo->Get_Extension(). "',". $EUF18_Archivo->Get_IdUsuario().",'".$EUF18_Archivo->Get_Tamanio()."')";
        return DB::Select($query);
    }
}
?>