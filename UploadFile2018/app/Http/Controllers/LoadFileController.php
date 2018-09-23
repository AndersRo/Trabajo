<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Business\BUF18_Archivo;
use App\Models\Entity\EUF18_Archivo;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\LocalInfo;

class LoadFileController extends Controller
{
    private $BUF18_Archivo;
    private $EUF18_Archivo;
    private $IdUsuario ;
    private $request;
    public function __construct(){
        $this-> BUF18_Archivo = new BUF18_Archivo();
        $this->EUF18_Archivo = new EUF18_Archivo();
        $this->IdUsuario = LocalInfo::Get_IdUsuario();
        $this->request = new Request();
    }

    public function Index(Request $request ){
        $File= $this->BUF18_Archivo->Get_Archivo($request->session()->get("IdUsuario"));
        return view('LoadFile', compact('File'));
    }

    public function SaveFile(Request $request){
       $Ruta = $request->file('Archivo')->store('public');
       $this->EUF18_Archivo->Set_Opcion('I');
       $this->EUF18_Archivo->Set_IdArchivo(0);
       $this->EUF18_Archivo->Set_RutaArchivo($Ruta);
       $this->EUF18_Archivo->Set_Descripcion(explode(".", $request->file('Archivo')->getClientOriginalName())[0]);
       $this->EUF18_Archivo->Set_Extension(explode(".", $request->file('Archivo')->getClientOriginalName())[1]);
       $this->EUF18_Archivo->Set_IdUsuario($request->session()->get("IdUsuario"));
       $this->EUF18_Archivo->Set_Tamanio($request->file('Archivo')->getClientSize()." KB");
       $this->BUF18_Archivo->Set_Archivo($this->EUF18_Archivo);
       return Redirect::action('LoadFileController@Index');
    }

    public function Cerrar(Request $request){
        $request->session()->flush();
        return Redirect::action('LoginController@Index');
    }

    public function Eliminar(Request $request){

    }
}
?>