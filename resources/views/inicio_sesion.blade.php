<?php
    /*include "../conexion.php";
    include "../logic/validate_sessionLogic.php";

    //Si el usuario ya inicio sesion, no permitir que vuelva a iniciar sesion
    if($autentication == 'CONSULTA' || $autentication == 'ADMIN'){
        //LLEVAR AL USUARIO A LA PÁGINA DE INICIO admin_menu.php
        header("Location: ./admin_menu.php");
    } else if( $autentication == 'FACULTAD'){
        //LLEVAR AL USUARIO A LA PÁGINA DE INICIO admin_menu.php
        header("Location: ./facultad_agregar.php");
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap-5.2.2-dist/css/bootstrap.min.css" /> 

    <!-- CSS -->
    <link href="../css/estilo.css" rel="stylesheet" integrity="" crossorigin="anonymous">

    <!-- ICONOS en https://ionic.io/ionicons/v4/usage#md-pricetag -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Admin</title>
</head>

<style type="text/css">
    .divider:after, .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
    .h-custom {
        height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
    }
</style>

<body>
    
    <div class="mx-auto">
    
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="../assets/images/inicio.png"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="../logic/inicio_sesionLogic.php" method="POST">

                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <p class=""></p>
                </div>

                <p class="text-center lead fw-normal mb-0 me-3 fs-1">
                    División de Gestión del Talento Humano</p>
                
                <div class="divider d-flex align-items-center my-4">
                    <!-- <p class="text-center fw-bold mx-3 mb-0">Or</p> -->
                </div>


                <p class="text-center lead fw-normal mb-0 me-3 fs-4">
                    SIGA</p>
                <p class="text-center lead fw-normal mb-0 me-3 fs-6">
                    Sistema de Gestión de Ausentismos</p>


                <div class="divider d-flex align-items-center my-4">
                    <!-- <p class="text-center fw-bold mx-3 mb-0">Or</p> -->
                </div>

                <!-- Username input -->
                <div class="form-floating mb-3 col-auto"> 
                    <input type="text" id="username1"  pattern="[a-zA-Z0-9]+" maxlength="20" name="username" class="form-control"
                    placeholder="Ingrese su usuario" required/>
                    <label class="col-form-label" for="username1">Usuario</label>
                </div>

                <!-- Password input -->
                <div class="form-floating mb-3 col-auto"> 
                    <input type="password" id="password1" name="password" class="form-control form-control-lg"
                    placeholder="Ingrese la contraseña" required/>
                    <label class="form-label" for="password1">Contraseña</label>
                </div>

                <p class="label_mensaje">
                    <?php
                    if (isset($_GET["message"])) {
                        $message = $_GET["message"];
                        if ($_GET["message"] != "") {
                            
                            echo '*';
                            
                            if ($message == 1) {
                                echo 'USUARIO O CONTRASEÑA INCORRECTA';
                                // echo "USUARIO O CONTRASEÑA INCORRECTA. INTENTE DE NUEVO.";
                                session_destroy();
                            } elseif ($message == 2) {
                                echo 'USUARIO NO REGISTRADO.';
                                session_destroy();
                            } elseif ($message == 3) {
                                echo 'ALERTA DE SEGURIDAD. FAVOR INICIE SESIÓN';
                                session_destroy();
                            } elseif ($message == 4) {
                                echo 'SESIÓN FINALIZADA. INICIE SESIÓN NUEVAMENTE';
                                session_destroy();
                            } elseif ($message == 5) {
                                echo 'INICIE SESIÓN PARA UTILIZAR EL SISTEMA';
                            }
                            
                        echo '</p>';
                        }
                    }
                    ?>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0">
                    <!--<input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                        Remember me
                    </label> -->
                    </div>
                    <!-- <a href="#!" class="text-body">Forgot password?</a> -->
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-success btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar Sesion</button>
                    <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="../pages/form_register.php"
                        class="link-danger">Register</a></p> -->
                </div>

                </form>
            </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                <!-- Copyright -->
                <div class="text-white mb-3 mb-md-0">
                Copyright © 2022. All rights reserved.
                </div>
                <!-- Copyright -->

                <!-- Right -->
                <div class="">
                    <a href="https://www.facebook.com/universidadelcauca/" class="text-white me-4">
                        <img src="../assets/images/face2.png" class="img-fluid" width="30" height="30" alt="Sample image">
                    </a>
                    <a href="https://twitter.com/unicauca/" class="text-white me-4">
                        <img src="../assets/images/twitter.png" class="img-fluid" width="30" height="30" alt="Sample image">
                    </a>
                    <a href="https://www.linkedin.com/school/universidad-del-cauca/" class="text-white">
                        <img src="../assets/images/linkedin.png" class="img-fluid" width="30" height="30" alt="Sample image">
                    </a>
                </div> 
                <!-- Right -->
            </div>
        </section>

    </div>

</body>

<script>

    //Funcion que detecte cuando se presiona una tecla en un input
    document.getElementById("username1").addEventListener("input", function() {
        var inputValue = document.getElementById("username1").value;
        var specialChars = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

        //console.log("INPUT1")

        if (specialChars.test(inputValue)) {
            // Show an error message
            document.getElementById("username1").setCustomValidity("No se permiten caracteres especiales!");
        } else {
            // Clear the error message
            document.getElementById("username1").setCustomValidity("");
        }
    });

    //Funcion que detecte cuando se presiona una tecla en un input
    document.getElementById("password1").addEventListener("input", function() {
        var inputValue = document.getElementById("password1").value;
        var specialChars = /[ !$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

        //console.log("INPUT1")

        if (specialChars.test(inputValue)) {
            // Show an error message
            document.getElementById("password1").setCustomValidity("No se permiten caracteres especiales!");
        } else {
            // Clear the error message
            document.getElementById("password1").setCustomValidity("");
        }
    });

    document.addEventListener('contextmenu', function(e) {
        //e.preventDefault();
    });

</script>

</html>