<?php
//include "../logic/admin_securityLogic.php"; // Verifica que el usuario sea administrador

// Inicio o reanudacion de una sesion
session_start();
$nombre_admin   = $_SESSION['NOM_USUARIO'];
$id_admin       = $_SESSION['ID_USUARIO'];
$tipo_usuario   = $_SESSION['TIPO_USUARIO'];

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
    <link rel="stylesheet" href="../css/estilo.css" type="text/css" > <!-- integrity="" crossorigin="anonymous" -->
    <link href="../js/sweetalert2-11.6.15/package/dist/sweetalert2.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">

    <!-- ICONOS en https://ionic.io/ionicons/v4/usage#md-pricetag -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Admin</title>
</head>

<body>
    <div class="d-flex">

    <!-- SIDE BAR - menu lateral -->
    <div id="sidebar-container" class="bg-primary">
        <div class="logo" >
            <h4 class="text-center text-light font-weight-bold"> SIGA </h4>
        </div>

        <div class="menu">
            <?php if($tipo_usuario == 'ADMIN'){ ?>
                <ul>
                    <li class="list" id="admin_menu">
                        <a href="../pages/admin_menu.php" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-apps mr-2 lead"></i>
                            <span class="text">MENU</span>
                        </a>
                    </li>
                    <li class="list" id="admin_cargar">
                        <a href="../pages/admin_cargar.php" class="p-2 text-light d-block text-decoration-none">
                            <!-- <span class="icon"> <ion-icon name="person-outline"></ion-icon> </span> -->
                            <i class="icon ion-md-cloud mr-2 lead"></i>
                            <span class="text">CARGAR DATOS</span>
                        </a>
                    </li>
                    <li class="list" id="admin_agregar">
                        <a href="../pages/admin_agregar.php" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-add-circle mr-2 lead"></i>
                            <span class="text">AGREGAR AUSENTISMO</span>
                        </a>
                    </li>
                    <li class="list" id="admin_consultar">
                        <a href="../pages/admin_consultar.php" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-search mr-2 lead"> </i>
                            <span class="text">CONSULTAR</span>
                        </a>
                    </li>
                    <li class="list" id="admin_edition_client">
                        <a href="../pages/admin_edition_client.php" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-people mr-2 lead"></i>
                            <span class="text">GESTIONAR USUARIO</span>
                        </a>
                    </li>
                    <li class="list" id="admin_edit_func">
                        <a href="../pages/admin_edit_func.php" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-people mr-2 lead"></i>
                            <span class="text">GESTIONAR FUNCIONARIO</span>
                        </a>
                    </li>
                    <li class="list" id="ayuda_pdf">
                        <a href="#" class="p-2 text-light d-block text-decoration-none" value="<?=$tipo_usuario;?>">
                            <i class="icon ion-md-help mr-2 lead"></i>
                            <span class="text">AYUDA</span>
                        </a>
                    </li>
                    <li class="list" id="cerrar_sesion">
                        <a href="#" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-log-out mr-2 lead"></i>
                            <span class="text">CERRAR CESION</span>
                        </a>
                    </li>
                    <div class="indicator"></div>
                </ul>
            <?php //MENU DEL CONSULTOR, SIN OPCIONES DE GESTION Y CRUD
                }else if($tipo_usuario == 'CONSULTA'){ ?>
                <ul>
                    <li class="list" id="admin_menu">
                        <a href="../pages/admin_menu.php" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-apps mr-2 lead"></i>
                            <span class="text">MENU</span>
                        </a>
                    </li>
                    <li class="list" id="admin_consultar">
                        <a href="../pages/admin_consultar.php" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-search mr-2 lead"> </i>
                            <span class="text">CONSULTAR</span>
                        </a>
                    </li>
                    <li class="list" id="ayuda_pdf">
                        <a href="#" class="p-2 text-light d-block text-decoration-none" value="<?=$tipo_usuario;?>">
                            <i class="icon ion-md-help mr-2 lead"></i>
                            <span class="text">AYUDA</span>
                        </a>
                    </li>
                    <li class="list" id="cerrar_sesion">
                        <a href="#" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-log-out mr-2 lead"></i>
                            <span class="text">CERRAR CESION</span>
                        </a>
                    </li>
                    <div class="indicator"></div>
                </ul>
            <?php //MENU DE FACULTAD, SOLO SE PERMITE AGREGAR AUSENTISMO
                }elseif($tipo_usuario == 'FACULTAD'){ ?>
                <ul>
                    <li class="list active" id="facultad_agregar">
                        <a href="../pages/facultad_agregar.php" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-add-circle mr-2 lead"></i>
                            <span class="text">AGREGAR AUSENTISMO</span>
                        </a>
                    </li>
                    <li class="list" id="facultad_consultar">
                        <a href="../pages/admin_consultar.php" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-search mr-2 lead"> </i>
                            <span class="text">CONSULTAR</span>
                        </a>
                    </li>
                    <li class="list" id="ayuda_pdf">
                        <a href="#" class="p-2 text-light d-block text-decoration-none" value="<?=$tipo_usuario;?>">
                            <i class="icon ion-md-help mr-2 lead"></i>
                            <span class="text">AYUDA</span>
                        </a>
                    </li>
                    <li class="list" id="cerrar_sesion">
                        <a href="#" class="p-2 text-light d-block text-decoration-none">
                            <i class="icon ion-md-log-out mr-2 lead"></i>
                            <span class="text">CERRAR CESION</span>
                        </a>
                    </li>
                    <div class="indicator"></div>
                </ul>
            <?php } ?>
        </div>

        <div class="container-fluid">
            <!-- LOGO DE LA UNIVERSIDAD -->
            <div class="container logoU" >
                <img src="../assets/images/icon4.png" class=" img-fluid me-2" alt="Sample image">
            </div>
            
            <!-- logos de icontec y lema 
            <div class="sideBar_foot" >
                <img src="../assets/images/lema.png" class="img-fluid me-2" width="40" height="40" alt="Sample image">
                <img src="../assets/images/logosIcontec2020.png" class="img-fluid" width="100" height="100" alt="Sample image">
            </div> -->
        </div>
    </div>

    <div class="w-100">

        <!-- NAV BAR - menu en la parte superior -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="../pages/admin_menu.php"> <i class="icon ion-md-home me-2 lead"></i> </a>
                
                <button class="navbar-toggler menu-btn" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-flex justify-content-end " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/images/user_profile.png" class="img-fluid rounded-circle avatar mr-2" />
                                <?php //echo de las 2 primeras palabras del nombre
                                    $nombre = explode(" ", $nombre_admin);
                                    //si tiene mas de 2 palabras, imprime las 2 primeras
                                    if (count($nombre) > 1) {
                                        echo $nombre[0] . " " . $nombre[1];
                                    } elseif(count($nombre) == 1) {
                                        echo $nombre[0];
                                    }else{
                                        echo "Usuario";
                                    }
                                    //echo $nombre[0]." ".$nombre[2];
                                ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href=<?php echo '../pages/admin_form_edition.php?ID='.$id_admin.''; ?>>Mi perfil </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" id="cerrar_sesion_head" href="#">Cerrar Sesion</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

    @yield('content')


    </div>
    </div>

    <script>
    const list = document.querySelectorAll('.list');

    function activeLink() {
        list.forEach((item) =>
        item.classList.remove('active'));
        this.classList.add('active');
        //event.preventDefault();  // <--- prevent the default action, in this case is href
    }

    //añadir a cada elemento de la lista el evento click
    //list.forEach((item) => item.addEventListener('click',activeLink))

    //get the las part of the url, and delete what is before the .php
    var url = window.location.href;
    var lastPart = url.substr(url.lastIndexOf('/') + 1);
    lastPart = lastPart.substr(0, lastPart.lastIndexOf('.php') + 4);
    //console.log(lastPart);

    //add active class to the link that match with the url, and remove it from the others
    list.forEach((item) => {
        var link = item.querySelector('a').getAttribute('href');
        link = link.substr(link.lastIndexOf('/') + 1);

        if (lastPart == 'admin_form_edition.php' || lastPart == 'admin_create_user.php' || lastPart == 'admin_edit_ausen.php' || lastPart == 'admin_create_func.php' || lastPart == 'admin_func_form_edition.php') {

            if (link == 'admin_edition_client.php' && lastPart == 'admin_form_edition.php' || link == 'admin_edition_client.php' && lastPart == 'admin_create_user.php') {
                item.classList.add('active');

            } else if(lastPart == 'admin_edit_ausen.php' && link == 'admin_consultar.php'){
                item.classList.add('active');

            } else if((lastPart == 'admin_create_func.php' || lastPart == 'admin_func_form_edition.php') && link == 'admin_edit_func.php'){
                item.classList.add('active');

            } else {
                item.classList.remove('active');
            }

        } 
        else {
            //console.log(link);
            if (link == lastPart) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        }
    });

    /* 
     * @description: Descargar el pdf de ayuda
     */
    document.getElementById("ayuda_pdf").querySelector("a").addEventListener("click", function(event){
        event.preventDefault(); //evitar que el navegador siga el enlace
        var value = this.getAttribute("value");
        //console.log(value);

        fetch("../logic/descargarAyuda.php", {
            method: "POST",
            body: "tipo_usuario="+value,
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            }
        })
        .then(res => res.json()) //recoge la respuesta json del servidor y lo transforma en un objeto javascript
        .then(response => {
            if(response.status === 'success'){
                let a = document.createElement('a');
                a.href = "data:application/pdf;base64,"+response.file_data;
                a.download = response.file_name;
                a.click(); //se simula un click para descargar el archivo
            }else{
                console.log(response.message);
            }
        })
        .catch(error => console.log(error));
    });

    /* 
     * @description: Cerrar sesión
     */
    //funcion que haga una petición al servidor para cerrar la sesión 
    document.getElementById("cerrar_sesion").querySelector("a").addEventListener("click", function(event){
        event.preventDefault(); //evitar que el navegador siga el enlace

        fetch("../logic/cerrar_sesion.php", {
            method: "POST",
            body: "",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            }
        })
        .then(res => res.json()) //recoge la respuesta json del servidor y lo transforma en un objeto javascript
        .then(response => {
            if(response.status === 'success'){
                window.location.href    = response.url;
            }else{
                console.log(response.message);
            }
        })
        .catch(error => console.log(error));
    });

    document.getElementById("cerrar_sesion_head").addEventListener("click", function(event){
        event.preventDefault(); //evitar que el navegador siga el enlace

        fetch("../logic/cerrar_sesion.php", {
            method: "POST",
            body: "",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            }
        })
        .then(res => res.json()) //recoge la respuesta json del servidor y lo transforma en un objeto javascript
        .then(response => {
            if(response.status === 'success'){
                window.location.href    = response.url;
            }else{
                console.log(response.message);
            }
        })
        .catch(error => console.log(error));
    });

    //evitar que el usuario abra el inspeccionar elemento
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

</script>

</body>
</html>