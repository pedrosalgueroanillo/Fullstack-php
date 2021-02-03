<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>M4-Bootstrap</title>
    <!-- Bootstrap CSS de CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style-m4.css">
    <!-- ********* Comentado porque utilizado CSS del CDN
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     -->
</head>
<body>
    <!-- header -->
    <header class="header py-4">
        <!-- Button trigger modal -->
        <div class="container login">
            <div class="row justify-content-end">
                <div class="col-md-12 col-12 mb-4 mb-md-0">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      Acceso alumnos
                    </button>
                </div>
            </div>
        </div>


        <div class="container login">
            <div class="row justify-content-end">
                <!-- Acceso usuarios /  Registro -->
                <div class="col-md-12 col-12 mb-4 mb-md-0">
                    <?php include('template-parts/registro.php');?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- logo-->
                <div class="col-md-4 col-8 mb-4 mb-md-0">
                    <a href="index.php">
                        <img class="logo "src="img/logo-rest.png" class="img-fluid">
                    </a>
                </div>

                <!-- menu de navegación -->
                <div class="col-12 col-md-8">
                    <nav class="nav flex-column flex-md-row text-center d-flex justify-content-md-end justify-content-center">
                        <a href="#" class="nav-link active">Inicio</a>
                        <a href="#" class="nav-link">Nosotros</a>
                        <a href="#" class="nav-link">Blog</a>
                        <a href="#" class="nav-link">Clases</a>
                        <a href="#" class="nav-link">Galería</a>
                        <a href="#" class="nav-link">Contacto</a>
                    </nav>
                </div>
            </div> <!-- end row -->
        </div><!-- end container -->

    </header>

    <main class="container">
        <section class="separador">
            <!-- slide -->
            <?php include('template-parts/slide.php');?>
            <!-- end slide -->
        </section>
        <div class="container-fluid imagenes-principales">
    <div class="row imagen-superior imagen">
        <div class="col-md-6 bg-primary">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-8 col-md-6">
                    <div class="contenido text-center text-light py-3">
                        <h2 class="text-uppercase">20 Años de Experiencia</h2>
                        <p>Nos respaldan, siempre ofertando los mejores cursos para principiantes y expertos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bg-vino"></div>
    </div>
    <div class="row imagen-inferior imagen">
        <div class="col-md-6 bg-comida"></div>
        <div class="col-md-6 bg-secondary">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-8 col-md-6">
                    <div class="contenido text-center py-3">
                        <h2 class="text-uppercase">Sobre Nosotros</h2>

                        <p> Donec dignissim tincidunt fermentum. Aenean hendrerit auctor vestibulum. </p>

                        <p> Donec venenatis turpis at convallis sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--.container-fluid-->

<div class="container">
    <section class="nosotros mt-5">
        <h2 class="separador text-center mb-5">¿Porqué estudiar con nosotros?</h2>
        <div class="row">
            <div class="col-md-4 text-center informacion">
                <img src="img/icono_chef.png" class="img-fluid mb-3" >
                <h3>Chef’s Especialistas</h3>
                <p>Los mejores chef’s que han trabajado en los mejores restaurants de Europa</p>
            </div>
            <div class="col-md-4 text-center informacion">
                <img src="img/icono_vino.png" class="img-fluid mb-3" >
                <h3>Incluye todo sobre Bebidas</h3>
                <p>Además de la cocina, incluimos en el programa todo lo relacionado  a bebidas.</p>
            </div>
            <div class="col-md-4 text-center informacion">
                <img src="img/icono_menu.png" class="img-fluid mb-3" >
                <h3>Siempre Actualizado</h3>
                <p>El Programa se actualiza constamemente con nuevos platillos y técnicas.</p>
            </div>
        </div>
    </section>
</div> <!--.container-->

    <section class="clases mt-5 py-5">
            <h2 class="separador text-center mb-3">Próximas Clases</h2>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/clase1.jpg" class="card-img-top">
                            <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0">20 / Mayo / 2018  18:00 Hrs</p>
                                <span class="badge badge-secondary px-2 py-2">$300</span>
                            </div>
                            <div class="card-body">
                                    <h3 class="card-title">Comida Italiana para principiantes</h3>
                                    <p class="card-subtitle mb-2">Aprende las bases de la comida italiana con este curso</p>
                                    <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.</p>
                                    <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
                            </div>
                        </div>
                    </div><!--.col-md-4-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/clase2.jpg" class="card-img-top">
                            <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0">20 / Mayo / 2018  18:00 Hrs</p>
                                <span class="badge badge-secondary px-2 py-2">$300</span>
                            </div>
                            <div class="card-body">
                                    <h3 class="card-title">Planeación de Menús para bodas</h3>
                                    <p class="card-subtitle mb-2">Añade la planeación de menús para bodas a tus habilidades.</p>
                                    <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.</p>
                                    <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
                            </div>
                        </div>
                    </div><!--.col-md-4-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/clase3.jpg" class="card-img-top">
                            <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0">20 / Mayo / 2018  18:00 Hrs</p>
                                <span class="badge badge-secondary px-2 py-2">$300</span>
                            </div>
                            <div class="card-body">
                                    <h3 class="card-title">Preparación de Pasteles</h3>
                                    <p class="card-subtitle mb-2">
                                        Aprende a preparar deliciosos postres con este curso.
                                    </p>
                                    <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.</p>
                                    <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
                            </div>
                        </div>
                    </div><!--.col-md-4-->
                    <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img src="img/clase4.jpg" class="card-img-top">
                                <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                    <p class="text-center m-0">20 / Mayo / 2018  18:00 Hrs</p>
                                    <span class="badge badge-secondary px-2 py-2">$300</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Comida Mexicana</h3>
                                    <p class="card-subtitle mb-2">Prepara la mejor comida mexicana con este curso </p>
                                    <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.</p>
                                    <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
                                </div>
                            </div>
                    </div><!--.col-md-4-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/clase5.jpg" class="card-img-top">
                            <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0">20 / Mayo / 2018  18:00 Hrs</p>
                                <span class="badge badge-secondary px-2 py-2">$300</span>
                            </div>
                            <div class="card-body">
                                    <h3 class="card-title">Comida de Marruecos  </h3>
                                    <p class="card-subtitle mb-2">
                                        Aprende deliciosas recetas de la comida marroquí.
                                    </p>
                                    <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.</p>
                                    <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
                            </div>
                        </div>
                    </div><!--.col-md-4-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/clase6.jpg" class="card-img-top">
                            <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0">20 / Mayo / 2018  18:00 Hrs</p>
                                <span class="badge badge-secondary px-2 py-2">$300</span>
                            </div>
                            <div class="card-body">
                                    <h3 class="card-title">Prepara 10 tipos de ensaladas</h3>
                                    <p class="card-subtitle mb-2">
                                        En este curso aprenderás hasta 10 tipos de ensaladas.
                                    </p>
                                    <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.</p>
                                    <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
                            </div>
                        </div>
                    </div><!--.col-md-4-->
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-4 text-right">
                        <a href="clases.html" class="btn btn-primary">Ver Todas las Clases</a>
                    </div>
                </div>
            </div>
    </section>

    <div class="licenciatura">
         <div class="container">
             <div class="row align-items-center justify-content-center">
                 <div class="col-md-8 ">
                         <div class="contenido text-light text-center ">
                              <h2>¿Quieres ser Chef?</h2>
                              <p class="display-4">
                                  Estudia la licenciatura para convertirte en
                                  Chef con nosotros
                              </p>
                              <a href="#" class="btn-primary btn text-uppercase">Más información</a>
                         </div>
                 </div>
             </div>
         </div>
    </div>

    <footer class="footer p-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7">
                        <nav class="nav d-flex flex-column text-center flex-md-row   justify-content-md-start justify-content-center">
                            <a href="nosotros.html" class="nav-link">Nosotros</a>
                            <a href="blog.html" class="nav-link">Blog</a>
                            <a href="clases.html" class="nav-link">Clases</a>
                            <a href="galeria.html" class="nav-link">Galería</a>
                            <a href="contacto.html" class="nav-link">Contacto</a>
                        </nav>
                </div>
                <div class="col-md-5">
                    <p class="copyright text-center text-md-right">Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- *********** JS Comentado porque estamos utilizando el CDN de bootstrap
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    -->
</body>
</html>
