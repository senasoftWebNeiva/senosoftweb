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
        @if (Session::has('mensaje'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times; </span>
                </button>
            </div>
        @endif
        <div class="perfil">
            <img class="logo" src="../images/playerPerfil.svg" alt="Jugador">
            <span>
                <img src="../images/nombrePerfil.svg" alt="Jugador">
                <span class="codigo" id="codigo"></span>
            </span>
        </div>
        <div class="nombre">
            <h6 id="name"></h6>
        </div>
        <div class="botones">
            <input type="submit" class="botonH" value="herramientas" name="herramientas" id="herramientas">
            <input type="submit" class="botonI" value="invitar" name="invitar" id="invitar">
        </div>
    </div>
    <div class="cartas">
        <img src="../images/partida.svg" alt="Cartas">
    </div>
    <div class="cartasSecretas">
        <img class="cardSecret" src="../images/cardSecret.svg">
    </div>
    <div class="tablero">
        <img src="../images/tablero.svg" alt="Tablero">
    </div>

    <div class="buttonAction">
        <input type="button" class="btnPreguntar">
        <input type="button" class="btnAcuzar">
    </div>
    <div class="tabla">
        <table class="tbl">
            <tr><td><input type="text" class="form-control" id="1" readonly></td><td><input type="text" class="form-control" id="20" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="2" readonly></td><td><input type="text" class="form-control" id="21" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="3" readonly></td><td><input type="text" class="form-control" id="22" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="4" readonly></td><td><input type="text" class="form-control" id="23" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="5" readonly></td><td><input type="text" class="form-control" id="24" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="6" readonly></td><td><input type="text" class="form-control" id="25" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="7" readonly></td><td><input type="text" class="form-control" id="26" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="8" readonly></td><td><input type="text" class="form-control" id="27" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="9" readonly></td><td><input type="text" class="form-control" id="28" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="10" readonly></td><td><input type="text" class="form-control" id="29" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="11" readonly></td><td><input type="text" class="form-control" id="30" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="12" readonly></td><td><input type="text" class="form-control" id="31" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="13" readonly></td><td><input type="text" class="form-control" id="32" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="14" readonly></td><td><input type="text" class="form-control" id="33" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="15" readonly></td><td><input type="text" class="form-control" id="34" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="16" readonly></td><td><input type="text" class="form-control" id="35" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="17" readonly></td><td><input type="text" class="form-control" id="36" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="18" readonly></td><td><input type="text" class="form-control" id="37" readonly></td></tr>
            <tr><td><input type="text" class="form-control" id="19" readonly></td><td><input type="text" class="form-control" id="38" readonly></td></tr>
        </table>
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
        float: left;
        margin-left: 2%;
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
    .cartas{
        float: left;
        margin-top: 188px;
        margin-left: -401px;
    }
    .cartasSecretas{
        background-image: url(../images/cartasSecretas.svg);
        background-color: rgba(255, 255, 255, 0);
        border: none;
        background-repeat: no-repeat;
        background-attachment: local;
        color: transparent;
        width: 713px;
        height: 324px;
        float: left;
        margin-top: 707px;
        margin-left: -703px;
    }
    .tablero img{
        margin-top: 2%;
    }
    .tablero{
        height: 821px;
        float: left;
    }
    .cardSecret{
        margin-top: 45px;
        margin-left: 118px;
    }
    .buttonAction{
        background-image: url(../images/contain.svg);
        background-color: rgba(255, 255, 255, 0);
        border: none;
        background-repeat: no-repeat;
        background-attachment: local;
        color: transparent;
        width: 579px;
        height: 271px;
        float: left;
        margin-top: 805px;
        margin-left: -571px;
    }
    .btnPreguntar{
        background-image: url('../images/btnPreguntar.svg');
        background-color: rgba(255, 255, 255, 0);
        border: none;
        cursor: pointer;
        background-repeat: no-repeat;
        background-attachment: local;
        color: transparent;
        width: 230px;
        height: 72px;
        margin-top: 67px;
        margin-left: 103px;
    }
    .btnAcuzar{
        background-image: url('../images/btnAcuzar.svg');
        background-color: rgba(255, 255, 255, 0);
        border: none;
        cursor: pointer;
        background-repeat: no-repeat;
        background-attachment: local;
        color: transparent;
        width: 230px;
        height: 72px;
    }
    .tabla{
        background-image: url(../images/tableNotas.svg);
        background-color: rgba(255, 255, 255, 0);
        border: none;
        background-repeat: no-repeat;
        background-attachment: local;
        color: transparent;
        width: 722px;
        height: 1096px;
        float: left;
        margin-top: 14px;
    }
    .tbl{
        margin-top: 100px;
        margin-left: 105px;
        width: 569px;
    }
    .tbl input{
        font-size: 19px;
    }
    .form-control:disabled, .form-control[readonly]{
        background-color: white;
        opacity: 1;
    }
}
</style>
<script>
    ObtenerCodigo();
    /* Funcion para Obtener el codigo de la partida guardado en el localStorage*/
    function ObtenerCodigo() {
        var codigo = localStorage.getItem('partida');
        var name = localStorage.getItem('jugador');
        document.getElementById("codigo").innerHTML = "#"+codigo.toUpperCase();
        document.getElementById("name").innerHTML = name;
        llenarValores();
    }
    /* funcion llenar la tabla con los datos guardados en el localStorage */
    function llenarValores(){

        for (let index = 1; index < 20; index++) {
            var carta = localStorage.getItem(index);
            document.getElementById(index).value = carta;
            var rango = 0;
            for(let i = 20; i < 38; i++){
                num = random(1, 19);
                var carta = localStorage.getItem(num);
                // array
                // for()] validar si ya se utilizo la ficha
                var con=0;

                for(var x = 20; x <38;x++){
                    var fichasJugador = random(20, 38);
                    var dato = document.getElementById(fichasJugador).value;
                    if(con <4){
                        if(dato == ""){
                            document.getElementById(fichasJugador).value = carta;
                            con++
                        }
                    }else{
                        x=38;
                    }
                }
                con=0;
                rango=0;
            }
        }
        function random(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }
    }
</script>
