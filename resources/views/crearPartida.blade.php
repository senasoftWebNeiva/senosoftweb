<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('CreateGame')</title>
    <link rel="stylesheet" href="../css/app.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script>
        $(function(){
            $("#Entrar").click(function(){
                agregarCartas();
            });

            /* funcion crea variable de session en localStorage */
            function agregarCartas(){
                let codigo = $("#codigo").val();
                let name = $('#name').val();
                miStorage = window.localStorage;
                miStorage.setItem("partida", codigo);
                miStorage.setItem("jugador", name);
                miStorage.setItem("1", "Pedro");
                miStorage.setItem("2", "Juan");
                miStorage.setItem("3", "Carlos");
                miStorage.setItem("4", "Juanita");
                miStorage.setItem("5", "Antonio");
                miStorage.setItem("6", "Carolina");
                miStorage.setItem("7", "Manuel");
                miStorage.setItem("8", "Nómina");
                miStorage.setItem("9", "Facturación");
                miStorage.setItem("10", "Recibos");
                miStorage.setItem("11", "Comprobante Contable");
                miStorage.setItem("12", "Usuarios");
                miStorage.setItem("13", "Contabilidad");
                miStorage.setItem("14", "404");
                miStorage.setItem("15", "Stack Over flow");
                miStorage.setItem("16", "Memory Out OfRange");
                miStorage.setItem("17", "Null Pointer");
                miStorage.setItem("18", "Syntax Error");
                miStorage.setItem("19", "Encoding Error");
            }
        })

        ////////////////////////////////////////////////////////////////////////////////
        /* funciones que generan valor hexadecimal */
        generarCodigo();
        function generarLetra(){
	        var letras = ["a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9"];
	        var numero = (Math.random()*15).toFixed(0);
	        return letras[numero];
        }

        function generarCodigo(){
	        var coolor = "";
	        for(var i=0;i<5;i++){
		        coolor = coolor + generarLetra() ;
	        }
            document.getElementById("codigo").value = coolor.toUpperCase();
        }
        ///////////////////////////////////////////////////////////////////////////////
    </script>
</head>
<body onload="generarCodigo();">
    <img class="logo" src="../images/logoCrear.svg" alt="">
    <div class="container">
        <br><br><br><br><br>
        <span class="titulo">CODIGO:</span>
        <form action="{{ url('/partida')}}" method="POST">
            @csrf
            <input class="form-control" type="text"  id="codigo" name="codigo">
            <span>Comparte este código con tus amigos para que</span><br><span>se puedan unir.</span><br>
            <span class="titulo">Nombre:</span>
            <input class="form-control" type="text"  id="name" name="name">
            <input type="submit" class="boton" value="Entrar" name="Entrar" id="Entrar">
        </form>
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
        height: 579px;
        border-radius: 112px;
        margin-left: 34%;
        margin-top: 14%;
        text-align: left;
        box-shadow: inset -13px -2px 20px 3px rgb(139 129 234), -20px 20px 21px 0px rgb(0 0 0 / 42%);
    }
    .logo{
        float: left;
        margin-left: 39.5%;
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
        background-image: url('../images/btnCrear.svg');
        background-color: rgba(255, 255, 255, 0);
        border: none;
        cursor: pointer;
        width: 261px;
        height: 82.79px;
        background-repeat: no-repeat;
        background-attachment: local;
        margin-top: 75px;
        margin-left: 27%;
        color: transparent;
    }
</style>
