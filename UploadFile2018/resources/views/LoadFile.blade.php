<html>
    <head>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand" style="color: white;">UF18<span ></a>
            </div>
            <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span ></span></a></li>
                <li ><a href="#" style="color: white;">Bienvenido {{ Session::get('Nombre') }}<span ></span></a></li>
                <li><a  href="javascript: submitform()" style="color: white;">Cerrar Sesión<span ></span></a></li>
            </ul>
            </div>
        </div>
    </div>
        <br/>
        <div class="classTable">
        <div style="text-align: center;">
            <label for="" style="font-size: 30px;font-family: -webkit-pictograph;">Listado de archivos</label>
        </div>
        <br/>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" id="SubirArchivo">
                Subir Archivo
            </button>
            <button style="display:none;" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModalPfd" id="SubirArchivo2">
                Subir Archivo
            </button>
        <br/>
        <br/>
        <table class="table table-condensed grid-default grid-text col-slim-u">
            <thead class="thead-inverse">
                <tr>
                    <th class="static-value">Descripcion</th>
                    <th class="static-value">Extension</th>
                    <th class="static-value">Tamaño</th>
                    <th class="static-value"></td>
                </tr>
            </thead>
            <tbody>
                @foreach($File as $rows)
                    <tr class="Archivo">
                        <td style="display:none;">{{$rows->RutaArchivo}}</td> 
                        <td style="display:none;">{{$rows->RutaArchivo}}</td> 
                        <td>{{$rows->Descripcion}}</td>
                        <td>{{$rows->Extension}}</td>
                        <td>{{$rows->Tamanio}}</td>
                        <td>
							<a href="{{Storage::url($rows->RutaArchivo)}}" download="{{$rows->Descripcion}}"<button type="button" class="btn btn-primary btn-xs" title="Descargar">
								<i class="glyphicon glyphicon-download"/>
								</i>
                            </a>
                            <!--<button class="btn btn-danger btn-xs" data-toggle="modal" id="btnEliminar" title="Elmiminar"><i class="glyphicon glyphicon-remove"></i></button>-->
                            <!--@if($rows->Extension== "pdf")
                             <button class="btn btn-success btn-xs" data-toggle="modal" id="btnEditar" title="Anular Venta"><i class="glyphicon glyphicon-eye-open"></i></button>
                            @endif-->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
       
        <form method="post" action="/Cerrar" id="CerrarSesion" name="form1">
        <form/>
        <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cargar archivo</h4>
            </div>
            <div class="modal-body">
            <form action="/SaveFile" method="post" enctype= "multipart/form-data" id="guardarArchivo" name="form2" class="LoadFileForms">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="file" name="Archivo" accept=".doc, .docx,.xls, .xlsx, .ppt, .pptx, .pdf, .csv"> </br>
                <input type="button" value="Guardar" class="btn btn-primary" id="btnGuardar">
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>

          <div class="modal fade bs-example-modal-lg" id="myModalPfd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cargar archivo</h4>
            </div>
            <div class="modal-body">
                <iframe src ="http://localhost:8080/UploadFile2018/storage/app/public/RTQoZVaxniRAdX0mIkmclUUHgmCjyw1NPGTpfdBR.pdf" width="1000px" height="600px"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
        </div>
       <!--<iframe src ="http://localhost:8080/UploadFile2018/storage/app/public/3ktJlWEPxXKtf6P66BzefQ3wpbfXSYt5B3uo9Pxt.xlsx" width="1000px" height="600px"></iframe>-->
    </object>
        <div class="container body-content">
        <footer>
            <p>2018 - Upload file 2018. Todos los derechos reservados</p>
        </footer>
    </div>
    </body>

</html>
<style>
  .classTable{
    margin: auto;
    width: 67%;
    -webkit-box-pack: center;
    -webkit-box-align: center;
  }
.dropdown .btn-default:hover .btn-default:focus
{
	background-color: rgb(34, 34, 34);
	border-color: rgb(34, 34, 34);
}
.dropdown .btn-default
{
    width:50px;
    height:50px;
}

.btn-primary,.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #71b1d5;
    border-color: #71b1d5;
}
.subir{
    display: block;
}
</style>
<script>
function submitform()
{
     var theForm = document.forms['form1'];
     if (!theForm) {
         theForm = document.form1;
     }
     theForm.submit();
}

function submitform1()
{
     var theForm = document.forms['form2'];
     if (!theForm) {
         theForm = document.form2;
     }
     theForm.submit();
}

$(document).on("click", "#btnEditar", function () {
    var Ruta = $(this).parents('.Archivo').find('td:nth-child(5)').text();
    document.getElementById("SubirArchivo2").click();
});


$(document).on("click", "#btnEliminar", function () {
    var Ruta = $(this).parents('.Archivo').find('td:nth-child(1)').text();
    document.getElementById("pathFile").setAttribute('value', Ruta);
});

$(document).on('click', "#btnGuardar", function(){
    //var x = document.getElementsByClassName("LoadFileForms");
    //x[0].submit();
    //document.forms["guardarArchivo"].submit();
    //submitform();
    document.getElementById("guardarArchivo").submit();
});

function AbrirModal(){
    alert("ruta");
}
</script>