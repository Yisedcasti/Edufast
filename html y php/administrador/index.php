<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="principal.css">
    <title>Document</title>
</head>
<body>
    <header class="containerNav navbar navbar-expand-lg shadow fixed-top" style="background-color: #7f7b82;">
        <div class="container d-flex justify-content-between align-items-left">
            <!-- Logo -->
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#" style="color: white;">
                <span style="color: white;">EDUFAST</span>
            </a>
            <!-- Botón Responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto fs-5">
                    <a href="#inicio" class="nav-link active" style="color: white;">Inicio</a>
                    <a href="#pagina" class="nav-link active" style="color: white;">Pagina</a>
                    <a href="#eventos" class="nav-link active" style="color: white;">Eventos</a>
                    <a href="#noticias" class="nav-link active" style="color: white;">Noticias</a>
                    <a href="#grupo" class="nav-link active" style="color: white;">Grupo</a>
                </div>
            </div>
        </div>
    </header>
    
    
    <main>
        <section class="ParteSuperior container-fluid" id="inicio">
            <!-- Fila para el título y el logo -->
            <div class="row align-items-center logo">
                <div class="col-lg-6 col-md-12 text-center text-lg-start">
                    <h1 class="text-dark"><b><i>BIENVENIDO A EDUFAST</i></b></h1>
                </div>
                <div class="col-lg-6 col-md-12 text-center">
                    <!-- Imagen responsiva -->
                    <img src="../administrador/imagenes/logo.png" class="rounded img-fluid" alt="logo" style="max-width: 420px; height: auto;">
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center  mb-5">
                        <a href="../administrador/admin/inicio2.php" class="btn btn-dark btn-lg" role="button">Iniciar Sesión</a>
                    </div>
                </div>
            </div>
        </section>
        
        
        

        <section class="pagina" id="pagina">
            <section class="conteinerPagina">
                <figure class="imagenPage">
                    <img src="" alt="imagen"></img>
                </figure>
                <section class="informacionPage">
                    <p>Descripcion un poco de la pagina</p>
                </section>
            </section>
            <section class="conteinerPagina reverse">
                <figure class="imagenPage">
                    <img src="" alt="imagen"></img>
                </figure>
                <section class="informacionPage">
                    <p>Descripcion un poco de la pagina</p>
                </section>
            </section>
            <section class="conteinerPagina">
                <figure class="imagenPage">
                    <img src="" alt="imagen"></img>
                </figure>
                <section class="informacionPage">
                    <p>Descripcion un poco de la pagina</p>
                </section>
            </section>
            </section>

            
        <section class="eventos" id="eventos">
            <div id="carouselExampleCaptions" class="carousel slide">
                <!--<div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../administrador/imagenes/EVENTO1.jpg" class="d-block w-200" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="../administrador/imagenes/EVENTO1.1.jpg" class="d-block w-200" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="../administrador/imagenes/EVENTO1.2.jpg" class="d-block w-200" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>-->
        </section>
        <section>
            <section class="noticias" id="noticias">
                <article class="articulo">
                    <header>
                        <h2> Estimados padres de familia y acudientes:</h2>
                    </header>
                    <p>
                        Reciban un cordial saludo.
                        Nos permitimos informarles que la entrega de boletines académicos del segundo trimestre se realizará el próximo viernes,
                        <strong>12 de julio de 2024 de 8:00am a 12:00 pm</strong>. El lugar de la reunión será en los salones donde los estudiantes toman la clase.
                    </p>
                    <p>
                        Es fundamental que asistan para conocer el rendimiento académico de sus hijos y discutir cualquier inquietud con los profesores. En caso de no poder asistir, favor comunicarse con la coordinación académica para programar una cita alternativa.
                    </p>
                    <footer>
                        <p>Atentamente,</p>
                        <p><strong>María Adela Quintero</strong></p>
                    </footer>
                </article>
            
                <article class="articulo">
                    <header>
                        <h2> Cordial saludo</h2>
                    </header>
                    <p>
                        Les informamos que la tercera asamblea de padres de familia se realizará el próximo <strong>viernes 17 de julio en el horario de 7:00 a 8:20 am</strong>.
                        Agradecemos su puntualidad ya que los docentes tienen clase a las 8:30am.
                    </p>
                    <footer>
                        <p>Atentamente,</p>
                        <p><strong>María Adela Quintero</strong></p>
                    </footer>
                </article>
            
                <article class="articulo">
                    <header>
                        <h2>Estimados padres de familia y acudientes:</h2>
                    </header>
                    <p>
                        Reciban un cordial saludo.
                        Nos permitimos informarles que la entrega de boletines académicos del segundo trimestre se realizará el próximo viernes,
                        <strong>12 de julio de 2024 de 8:00am a 12:00 pm</strong>. El lugar de la reunión será en los salones donde los estudiantes toman la clase.
                    </p>
                    <p>
                        Es fundamental que asistan para conocer el rendimiento académico de sus hijos y discutir cualquier inquietud con los profesores. En caso de no poder asistir, favor comunicarse con la coordinación académica para programar una cita alternativa.
                    </p>
                    <footer>
                        <p>Atentamente,</p>
                        <p><strong>María Adela Quintero</strong></p>
                    </footer>
                </article>
            </section>
            
        <section id="grupo"class="equipo">
                <h2><b>EQUIPO</b></h2>
                <section class="containerequipo">
                    <section class="cardequipo">
                        <figure class="imgequipo">
                            <img src="" alt="equipo">
                        </figure>
                        <section class="contentequipo">
                            <h2>COORDINADOR</h2>
                            <P>NOMBRE</P>
                            <p>TELEFONO</p>
                            <P>CORREO</P>
        
                        </section>
                    </section>
                    <section class="cardequipo">
                        <figure class="imgequipo">
                            <img src="" alt="equipo">
                        </figure>
                        <section class="contentequipo">
                            <h2>PROFESOR</h2>
                            <P>NOMBRE</P>
                            <p>TELEFONO</p>
                            <P>CORREO</P>
                        </section>
                    </section>
                    <section class="cardequipo">
                        <figure class="imgequipo">
                            <img src="" alt="equipo">
                        </figure>
                        <section class="contentequipo">
                            <h2>SECRETARIA</h2>
                            <P>NOMBRE</P>
                            <p>TELEFONO</p>
                            <P>CORREO</P>
                        </section>
                    </section>
                </section>    
               </section>  
        </section>
    </main>
    <footer class="footer">
        <div class="containerfooter">
            <div class="footer-row">
                <div class="footer-links">
                    <h4>SEDES</h4>
                    <ul>
                        <li>sede A</li>
                        <li>Cl. 66 Sur #78-2, Bogotá</li>
                        <li>sede B</li>
                        <li>Cl. 65j Sur, Bogotá</li>
                        <li>sede C </li>
                        <li>Cl. 70 Bis Sur, Bogotá</li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>INFORMACION</h4>
                    <ul>
                        <li>telefono:<br>7757545</li>
                        <li>telefono:<br>7765276</li>
                        <li>telefono:<br>7750283</li>
                        <li>direccion:<br>CR 77 L # 65 J - 73 sur</li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>ATENCIÒN</h4>
                    <ul>
                        <li>lunes a viernes </li>
                        <li>8am - 12pm</li>
                        <li>2pm - 4pm </li>
                    </ul>
                </div> 
                <div class="footer-links">
                    <h4>CONTACTANOS</h4>
                 <div class="social-link">
                    <a href="https://www.facebook.com/cedid.sanpablo.3?locale=es_LA" class="icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/plumapaulista/" class="icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/Cedidsanpablo" class="icon"><i class="fab fa-twitter"></i></a>
                    <a href="mailto:cedidsanpablobosa7@educacionbogota.edu.co" class="icon"><i class="fab fa-google"></i></a>
                 </div>
                </div>
            </div>
            <p>Todos los derechos reservados <br>EDUFAST </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../edufast2.0/java/index.js"></script>  
</body>
</html>