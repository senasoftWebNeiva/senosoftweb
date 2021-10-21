<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('JoinGame')</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>     
    <img class="logo" src="../images/logoUnirse.svg" alt="">
    <div class="container">
        <br><br><br><br><br>
        <span class="titulo">CODIGO:</span>
        <input class="form-control" type="text" placeholder="A83D3" name="codigo" id="">
        <span>Pídele a un amigo que te comparta el código de</span><br><span>la partida.</span><br>
        <a href="{{ route('crearPartida') }}"><button class="boton"></button></a>
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
        width: 589px;
        height: 488px;
        border-radius: 112px;
        margin-left: 31%;
        margin-top: 16%;
        text-align: left;
        box-shadow: inset -13px -2px 20px 3px rgb(160 31 90 / 63%), -20px 20px 21px 0px rgb(0 0 0 / 42%);
    }
    .logo{
        float: left;
        margin-left: 39%;
        margin-top: -8%;
    }
    img{
        width: 301px;
        height: 287px;
    }
    div.container .titulo{
        margin-left: 39px;
        font-size: 45px;
        color: black;
    }
    div.container span{
        margin-left: 42px;
        font-size: 20px;
        margin-top: 2px;
        color: rgba(0, 0, 0, 0.589);
    }
    .form-control{
        width: 80%;
        height: calc(1.6em + 0.75rem + 2px);
        border: 2.7px solid black;
        border-radius: 16px;
        margin-left: 39px;
        font-size: 27px;
        color: black;
        margin-top: 9px;
    }
    .boton{
        background-image: url('../images/btnUnirse.svg');
        background-color: rgba(255, 255, 255, 0);
        border: none;
        cursor: pointer;
        width: 261px;
        height: 82.79px;
        background-repeat: no-repeat;
        background-attachment: local;
        margin-top: 93px;
        margin-left: 25%;
    }
</style>
