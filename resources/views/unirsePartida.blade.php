<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('JoinGame')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/app.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("#Unirse").click(function() {
                crearSesion();
            });

            /* funcion verifica si existe variable de sesion de lo contrario
            crea variable de session en localStorage */
            function crearSesion() {
                if (window.localStorage) {
                    if (window.localStorage.getItem('partida') == $("#codigo").val()) {
                        console.log('hay local');
                    }else{
                        var codigo = $("#codigo").val();
                        var sesion = window.localStorage.setItem('partida', codigo);
                        console.log('almacenado');
                    }
                }
            }
        })
    </script>
</head>

<body>
    <img class="logo" src="../images/logoUnirse.svg" alt="">
    <div class="container">
        <span class="titulo">CODIGO:</span>
        <form action="{{ route('uniendose') }}" method="post">
            @csrf
            <input class="form-control" type="text" placeholder="A83D3" name="codigo" id="codigo" name="codigo">
            <span>Pídele a un amigo que te comparta el código de</span><br><span>la partida.</span><br>
            <span class="titulo">Nombre:</span>
            <input class="form-control" type="text"  id="name" name="name">
            <input type="submit" class="boton" id="Unirse" name="Unirse" value="Unirse">
        </form>
    </div>
    <br>

    @if (Session::has('mensaje'))
    <div class="alert alert-warning alert-dismissible">
        {{ Session::get('mensaje') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
    @endif
</body>

</html>
<style>
    @font-face {
        font-family: Segoe;
        src: url('../fonts/Segoe\ UI\ Bold.ttf');
    }

    body {
        background-image: url('/images/fondo.svg');
        background-repeat: space;
        background-size: cover;
        background-attachment: fixed;
        font-family: Segoe;
    }

    .container {
        background-color: white;
        width: 589px;
        height: 579px;
        border-radius: 112px;
        margin-left: 34%;
        margin-top: 14%;
        text-align: left;
        box-shadow: inset -13px -2px 20px 3px rgb(160 31 90 / 63%), -20px 20px 21px 0px rgb(0 0 0 / 42%);
    }

    .logo {
        float: left;
        margin-left: 40.5%;
        margin-top: -6%;
    }

    img {
        width: 301px;
        height: 287px;
    }

    div.container .titulo {
        margin-left: 39px;
        font-size: 45px;
        color: black;
    }

    div.container span {
        margin-left: 42px;
        font-size: 20px;
        margin-top: 2px;
        color: rgba(0, 0, 0, 0.589);
    }

    .form-control {
        width: 80%;
        height: calc(1.6em + 0.75rem + 2px);
        border: 2.7px solid black;
        border-radius: 16px;
        margin-left: 39px;
        font-size: 27px;
        color: black;
        margin-top: 9px;
    }

    .boton {
        background-image: url('../images/btnUnirse.svg');
        background-color: rgba(255, 255, 255, 0);
        border: none;
        cursor: pointer;
        width: 261px;
        height: 82.79px;
        background-repeat: no-repeat;
        background-attachment: local;
        margin-top: 34px;
        margin-left: 27%;
        color:transparent;
    }
</style>
