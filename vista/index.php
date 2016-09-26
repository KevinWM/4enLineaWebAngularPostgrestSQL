<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="google-signin-client_id" content="724560763590-ttnmn493i9vrvsctchktig264tfpst3u.apps.googleusercontent.com">
    <link rel="stylesheet" href="./Style/style1.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="../Controlador/funciones.js"></script>
    <title></title>

</head>

<body>



    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
        <section class="menu-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-collapse collapse">
                            <ul id="menu-top" class="nav navbar-nav navbar-right">
                                <li>
                                    <label style="position: relative; right: 800px; top: 20px; color: #ffffff; display: none" id="nombreUsuario">
                                        Nombre Usuario
                                    </label>
                                </li>

                                <li>
                                    <a>
                                        <div id="login" class="g-signin2" data-onsuccess="onSignIn"></div>
                                    </a>
                                </li>
                                <li>
                                    <a style=" width: 120px; height: 66px; padding-top: 20px; display: none" id="logout" href="#" onclick="signOut();">Sing out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <br>
            <br>
            <br>
            <div class="container">
                <div>
                    <div class="col-sm-3 col-md-3">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-king">
                                    </span>Opciones de Juego</a>
                                </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-screenshot "></span>Retar a un amigo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-leaf text-info"></span>Solo(fácil)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-fire text-success"></span><a href="http://www.jquery2dotnet.com">Solo(dificíl)</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-equalizer">
                                    </span>Estadísticas</a>
                                </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <a href="http://www.jquery2dotnet.com">Victorias</a> <span class="label label-success"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="http://www.jquery2dotnet.com">Derrotas</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="http://www.jquery2dotnet.com">Rank</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="http://www.jquery2dotnet.com">1</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                                    </span>Account</a>
                                </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <a href="http://www.jquery2dotnet.com">Change Password</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                                    Delete Account</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                                    </span>Por definir</a>
                                </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-7" style="text-align: center">



            <div style="display: inline-block">
                <div class="enBlanco">
                    <table>
                        <tr>
                               <td>
                                   <div id="F1" class="celdaSuperior ponerFicha"></div>
                               </td>
                               <td>
                                   <div id="F2" class="celdaSuperior ponerFicha"></div>
                               </td>
                               <td>
                                   <div id="F3" class="celdaSuperior ponerFicha"></div>
                               </td>
                               <td>
                                   <div id="F4" class="celdaSuperior ponerFicha"></div>
                               </td>
                               <td>
                                   <div id="F5" class="celdaSuperior ponerFicha"></div>
                               </td>
                               <td>
                                   <div id="F6" class="celdaSuperior ponerFicha"></div>
                               </td>
                               <td>
                                   <div id="F7" class="celdaSuperior ponerFicha"></div>
                               </td>
                           </tr>
                    </table>
                </div>
                <div  class="tablaJuego">
                    <table id="table4linea" >
                        
                        <tr>
                            <td>
                                <div id="1" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="7" class="ficha">

                                </div>
                            </td>
                            <td >
                                <div id="13" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="19" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="25" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="31" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="37" class="ficha">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="2" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="8" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="14" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="20" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="26" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="32" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="38" class="ficha">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="3" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="9" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="15" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="21" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="27" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="33" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="39" class="ficha">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="4" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="10" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="16" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="22" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="28" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="34" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="40" class="ficha">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="5" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="11" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="17" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="23" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="29" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="35" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="41" class="ficha">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="6" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="12" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="18" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="24" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="30" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="36" class="ficha">

                                </div>
                            </td>
                            <td>
                                <div id="42" class="ficha" style="back">

                                </div>
                            </td>
                        </tr>
                    </table>


                </div>
            </div>

            <div class="col-sm-2"></div>
        </div>
    </div>
</body>

</html>
