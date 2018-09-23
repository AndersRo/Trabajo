<?php
/*****************************************************************
*' CREADO POR: Cristian Hernandez Villo
*' FECHA CREA: 27/05/2018
*****************************************************************/
namespace App\Models\Business;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use app\Models\Entity\EUF18_Usuario;


class BUF18_Usuario extends Model{

    
    public function Get_Usuario(){
        $query= 'Call spUF18_GET_BusquedaGeneral( "Get_Usuario","%", 0,0)';
        return DB::select($query);
    }

    public function Set_Usuario(EUF18_Usuario $EUF18_Usuario){
        $query = "Call spUF18_SET_Usuario('". $EUF18_Usuario->Get_Opcion()."',".$EUF18_Usuario->Get_Idusuario().",'"
        .$EUF18_Usuario->Get_Nombres()."','". $EUF18_Usuario->Get_Apellidos(). "','". $EUF18_Usuario->Get_Usuario. "','". $EUF18_Usuario->Get_Contrasenia()
        ."','" .$EUF18_Usuario->Get_Ruta()."')";
        return DB::Select($query);
    }

    public function Get_Login($Usuario, $Contrasenia){
        $query = "CALL spUF18_GET_Login ('".$Usuario."','".$Contrasenia."')";
        return DB::Select($query);
    }
}
?>