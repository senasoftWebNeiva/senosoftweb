<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuentra El Bug en el sistema</title>
</head>
<body>
    <div class="titulo">
        <span>Encuentra</span><br>
        <span>el bug</span><br>
        <a href="{{ route('inicio') }}"><button class="btn">Play</button></a>
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
        width: 57%;
        margin-top: 376px;
    }
    body{
        background-image: url('/images/inicio.svg');
        background-repeat: space;
        background-size: cover;
        background-attachment: fixed;
    }
    .titulo .btn{
        background-color: rgb(255, 129, 213);
        border: none;
        font-family: DoctorGlitch;
        color: white;
        font-size: 46px;
        width: 500px;
        height: 73px;
        border-radius: 46px;
        cursor: pointer;
        text-shadow: -5px 6px 17px #000000b3;
    }
    .titulo span{
        text-shadow: -15px 16px 17px #000000b3;
    }
</style>