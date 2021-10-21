<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('Home')</title>
</head>
<body>
    <div class="titulo">
        <span>Encuentra</span><br>
        <span>el bug</span><br>
        <a href="{{ route('crearPartida') }}"><button class="btn1"></button></a>
        <a href="{{ route('UnirsePartida') }}"><button class="btn2"></button></a>
    </div>
</body>
</html>
<style>
    @font-face {
        font-family: DoctorGlitch;
        src: url('../fonts/Doctor\ Glitch.otf');
    }
    .titulo{
        color: #00E9FE;
        font-family: DoctorGlitch;
        font-size: 123px;
        text-align: center;
        margin-top: 253px;
    }
    body, .btn1{
        background-image: url('/images/fondo.svg');
        background-repeat: space;
        background-size: cover;
        background-attachment: fixed;
        text-shadow: -15px 16px 17px #000000b3;
    }
    .titulo .btn1{
        background-image: url('../images/logoCrear.svg');
        background-color: rgba(255, 255, 255, 0);
        border: none;
        cursor: pointer;
        width: 307px;
        height: 284px;
        background-repeat: no-repeat;
        background-attachment: local;
        margin-top: 52px;
        margin-left: -67px;
    }
    .titulo .btn2{
        background-image: url('../images/logoUnirse.svg');
        background-color: rgba(255, 255, 255, 0);
        border: none;
        cursor: pointer;
        width: 293px;
        height: 304px;
        background-repeat: no-repeat;
        background-attachment: local;

    }
</style>
