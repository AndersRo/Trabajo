<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="sticky log" style="background-color: #71b1d5">
            <div class="container">
                <div class="row" style="line-height: 67px">
                    <div class="col-md-11 col-xs-11 vmiddle"><h3>Upload file 2018 <span>Versión 1.0</span></h3></div>
                </div>
            </div>
        </header>
        <div class="container login">
        <div class="row">
            <div class="col-md-12 col-xs-12 vmiddle" style="text-align: center;">
                <div class="vmiddle">
                <form action= "/Login" method="post">
                        <div class="form-group">
                            <label for="email">Usuario</label>
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <input type="text" class="form-control " id="exampleInputEmail1" placeholder="Usuario" name="Usuario">
                        </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="contrasenia">
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" value="Iniciar sesión" class="btn btn-primary" />
                            </div>
                            @if($errors->any())
                                <div class="form-group text-right">
                                <h5 style="color:red;">{{$errors->first()}}</h5>
                                </div>
                            @endif
                            </form>
                </div>
                <img src="http://www.sjspl.catholic.edu.au/images/login.png" class="vmiddle" alt="">
            </div>
        </div>
        
    </div>
    <footer>
        <p>Copyright © 2018</p>
    </footer>
    </body>
</html>
<style>
</style>