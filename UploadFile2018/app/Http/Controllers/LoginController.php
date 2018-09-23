<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Business\BUF18_Usuario;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\LocalInfo;
class LoginController extends Controller
{
    private $BUF18_Usuario;
    
    public function __construct(){

        $this-> BUF18_Usuario = new BUF18_Usuario();
      
    }

    public function Index(Request $request ){
        return view('Index');
    }

    public function login(Request $request){
        $Usuario= $request->input('Usuario');
        $Contrasenia= $request->input('contrasenia');
        if(empty($Usuario)){
            return Redirect::back()->withErrors(['Ingrese usuario', 'The Message']);
        }
        else if (empty($Contrasenia)){
            return Redirect::back()->withErrors(['Ingrese contraseña', 'The Message']);
        }
        else if (empty($Usuario)&& empty($Contrasenia)){
            return Redirect::back()->withErrors(['Ingrese usuario y contraseña', 'The Message']);
        }
        else
        {
            $result = $this->BUF18_Usuario->Get_Login($Usuario, $Contrasenia);
            if($result == null){
            //return back()->wiht('mjs', 'Usuario o contraseña incorrecta');
            return Redirect::back()->withErrors(['Usuario o contraseña incorrecta', 'The Message']);
            }
            else {
                LocalInfo::Set_IdUsuario($result[0]->IdUsuario); 
                $request->session()->put("IdUsuario", $result[0]->IdUsuario);
                $request->session()->put("Nombre", $result[0]->Nombre);
                return Redirect::action('LoadFileController@Index');
            }
        }
    }
}
?>