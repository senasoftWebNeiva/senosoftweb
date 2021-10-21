<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('Game')</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body onload="ObtenerCodigo();">
    <div class="container">
        <div class="perfil">
            <img class="logo" src="../images/playerPerfil.svg" alt="Jugador">
            <span>
                <img src="../images/nombrePerfil.svg" alt="Jugador">
                <span class="codigo" id="codigo"></span>
            </span>
        </div>
        <div class="nombre">
            <h6>Jugador 1</h6>
        </div>
        <div class="botones">
            <input type="submit" class="botonH" value="herramientas" name="herramientas" id="herramientas">
            <input type="submit" class="botonI" value="invitar" name="invitar" id="invitar">
        </div>
    </div>
</body>
</html>
<style>
    @font-face {
        font-family: Segoe;
        src: url('../fonts/Segoe\ UI\ Bold.ttf');
    }
    body{
        background-image: url('/images/fondo.svg');
        background-repeat: space;
        background-size: cover;
        background-attachment: fixed;
        font-family: Segoe;
    }
    .container{
        background-color: white;
        width: 327px;
        height: 140px;
        border-radius: 27px;
        float: right;
        margin-right: 6%;
        margin-top: 1%;
        text-align: left;
        box-shadow: inset 1px -1px 16px #001517, -20px 20px 21px 0px rgb(0 0 0 / 42%);
    }
    .logo{
        margin-top: 2.5%;
        margin-left: 20px;
    }
    .botones{
        margin-left: 280px;
        margin-top: -93px;
        width: 116px;
    }
    .botonH{
        background-image: url('../images/btnSetting.svg');
        background-color: rgba(255, 255, 255, 0);
        border: none;
        cursor: pointer;
        background-repeat: no-repeat;
        background-attachment: local;
        color: transparent;
        width: 113px;
        height: 61px;
        margin-top:-19px;
    }
    .botonI{
        background-image: url('../images/btnInvitar.svg');
        background-color: rgba(255, 255, 255, 0);
        border: none;
        cursor: pointer;
        background-repeat: no-repeat;
        background-attachment: local;
        color: transparent;
        width: 81px;
        height: 67px;
        margin-left: 39px;
        margin-top: -22px;
    }
    .nombre{
        background-color: #edebeb;
        width: 117px;
        text-align: center;
        border-radius: 6px;
    }
    .codigo{
        float: right;
        margin-right: 124px;
        margin-top: -28px;
        font-size: 18px;
    }
}
</style>
<script>
    ObtenerCodigo();
    function ObtenerCodigo() {
        var codigo = localStorage.getItem('partida');
        document.getElementById("codigo").innerHTML = "#"+codigo.toUpperCase();
    }
</script>
