<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
        <script src="https://kit.fontawesome.com/6b76d54a65.js" crossorigin="anonymous"></script>


        <title>Edicion</title>
    </head>
    <body>
            <div class="topnav" id="myTopnav">

                <div class="active">
                        <a href="#news" class="active">Inicio</a>
                </div>

                <a href="#pie" class="new" id="ejem">Contacto</a>

                <a href="#tituloss" class="new" id="new">Galeria</a>

                <a href="#visitas" class="about" id="new">Mi Perú</a>
                <a href="#alojamiento" class="about" id="new">Alojamiento</a>
                <a href="#modos" class="about" id="new">Viaje</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

                <div class="img">
                    <img src="../img/machupicchu.jpg"  class="topnav-img" alt="prueba" width="100%"  >
                </div>

            </div>


        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                x.className += " responsive";
                } else {
                x.className = "topnav";
                }
            }
        </script>


        <div class="container" id="titulo">
            <h1> <strong> VAMOS A PERÚ  </strong></h1>
            <h2> <strong> EXPLORA UN PAÍS MARAVILLOSO</strong></h2>
            <p>ven a perú y disfruta de una las mejores experiencias de turismo .<br> Perú lo tiene todo y te sorprendera</p>
        </div>


        <div class="container" id="modo">
            <h1 id="modos"> <strong> Modo de viaje  </strong></h1>

            <p>Perú es un país maravilloso con un monton de lugares para conocer, gastronomía que disfrutar y fotos que tomar.
                Perú se ha convertido en los ultimos años en el destino más de moda de sudaméica. Motivos no le faltan:
                una variedad de ecosistemas impresionante, paisajes, hermosas ciudades cargadas de historia,cultura,tradiciones,playas,flora,fauna....y,
                por supuesto, su deliciosa y afamada gastronomia.</p>
        </div>

        <div class="cartass" id="cartass">

            <div class="card">
                <div class="img-card"></div>
                <div class="content">
                    <div class="title">
                        <h3>Avión</h3>
                    </div>

                    <div class="text">
                        <p>Viaje en Avión. Ven pronto y vistanos. Un país maravilloso te espera.</p>
                    </div>

                </div>
            </div>

            <div class="card " id="carta2"  >
                <div class="img-card"></div>
                <div class="content">
                    <div class="title">
                        <h3>Tren</h3>
                    </div>

                    <div class="text">
                        <p>Viaje en Tren. Ven pronto y vistanos. Un país maravilloso te espera.</p>
                    </div>

                </div>
            </div>

            <div class="card " id="carta3"  >
                <div class="img-card"></div>
                <div class="content">
                    <div class="title">
                        <h3>Bus Turistico</h3>
                    </div>

                    <div class="text">
                        <p>Vieje en un Bus Turistico. Ven pronto y vistanos. Un país maravilloso te espera.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container" id="elige">
            <h1 id="alojamiento"> <strong> Elige tu lugar de descanso  </strong></h1>

            <p>¿No tienes donde dormir?, visita cada uno de nuestras casas de campo, hoteles y mas.
                Contamos con años de experiencia al servicio y atención de los huespedes.
                Comida deliciosa y paisajes asombrosos desde el balcon y ventana.
                Ven y explora un mundo de cuatro paredes.
            </p>
        </div>



        <!-- Aquí comienza el código -->

        <div class="body__page">

            <div class="container__card">

                <div class="card c1" id="cards">
                    <div class="icon" id="icon">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="info__description">
                        <h2>casa de campo</h2>
                        <p>Descansa en nuestros casas del Perú, te espero un delicioso bufet y atención especial a cuarto.</p>

                    </div>
                </div>

                <div class="card c2" id="cards">
                    <div class="icon" id="icon">
                    <i class="fa-sharp fa-solid fa-bed"></i>
                    </div>
                    <div class="info__description">
                        <h1>Hotel</h1>
                        <p>Nuestros hoteles ofrecen la comodidad y servicio excelente para usted. Venga ya, lo atenderemos especialmente.</p>

                    </div>
                </div>

                <div class="card c3" id="cards">
                    <div class="icon" id="icon">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <div class="info__description">
                        <h1>Ubicación </h1>
                        <p>Visite nuestras páginas y encuentre mas lugaes de descanso, los estaremos esperando.</p>

                    </div>
                </div>
            </div>
        </div>

        <!--FIN DEL CÓDIGO-->


        <div class="container " id="elige2">
            <h1 id="visitas"><strong> Lugares más Visitados en las regiones del Perú  </strong></h1>

            <p>Perú es un país de Sudamérica que abarca una sección del bosque del Amazonas y Machu Picchu, una antigua ciudad inca en las alturas de los Andes. La region en torno a Machu Picchu, incluido el Valle Sagrado, el Camino del inca y las ciudades colonial de Cuzco, es rica en  sitios arqueológicos. En la costa árica del Pacífico de Perú se encuentra Lima,la capital, con un centro colonial preservado e importantes colecciones de arte precolombino.
            </p>
        </div>

        <!-- Costa -->
        <div class="container " id="elige3">
            <h1 id="visitas2"><strong> COSTA  </strong></h1>
        </div>


        <div class="container" id="cartas">
            <div class="card" id="cartas">
                <img src="../img/costa-Ica-huacachina.jpg" id="fotos" alt="">
                <div class="intro">
                    <h1 id="titulares">Ica</h1>
                    <p id="letras">La <span id="sub">huacachina</span> es un oasis natural ubicado en el desierto de Ica, Perú. Rodeado de dunas de arena y palmeras,
                     es conocido por su laguna verde esmeralda y por ser un destino popular para practicar sandboard y paseos en buggies.
                      Es una atracción turística única en su tipo en Perú. </p>
                </div>
            </div>


            <div class="card" id="cartas">
                <img src="../img/costa-lima-costa-verde.png" id="fotos" alt="">
                <div class="intro">
                    <h1 id="titulares">Lima</h1>
                    <p id="letras"> La <span id="sub" >Costa Verde</span> es un paseo marítimo ubicado en la ciudad de Lima, Perú.
                    Con vistas al Océano Pacífico, es conocido por sus playas, parques, jardines y zonas deportivas.
                    Es un lugar popular para caminar, correr, andar en bicicleta y disfrutar de la brisa marina en la capital peruana.
                     </p>
                </div>
            </div>

            <div class="card" id="cartas">
                <img src="../img/costa-tumbes-punta-sal.jpg" id="fotos" alt="">
                <div class="intro">
                    <h1 id="titulares">Tumbes</h1>
                    <p id="letras"><span id="sub">Punta Sal</span> es una playa ubicada en el norte de Perú, en la región de Tumbes. Conocida por su arena blanca,
                    aguas turquesas y clima cálido durante todo el año, es un destino popular para el turismo de sol y playa en la región.  </p>
                </div>
            </div>
        </div>

        <!-- sierra -->
        <div class="container " id="elige4">
            <h1 id="visitas3"><strong> SIERRA  </strong></h1>
        </div>
        <div class="container" id="cartas">
            <div class="card" id="cartas">
                <img src="../img/sierra-cuzco-machupicchu.jpg" id="fotos" alt="">
                <div class="intro">
                    <h1 id="titulares">Cuzco</h1>
                    <p id="letras"><span id="sub">Machu Picchu</span> Machu Picchu es una antigua ciudadela inca ubicada en los Andes peruanos,
                     construida en el siglo XV y redescubierta en 1911.
                    Es considerada una de las maravillas del mundo y atrae a miles de turistas cada año.
                     </p>
                </div>
            </div>


            <div class="card" id="cartas">
                <img src="../img/sierra-huaraz-laguna.jpg" id="fotos" alt="">
                <div class="intro">
                    <h1 id="titulares">Huaraz</h1>
                    <p id="letras">La <span id="sub" >Laguna de Llanganuco </span> son un conjunto de dos lagunas glaciares ubicadas en el Parque Nacional Huascarán en Perú.
                     Son conocidas por sus aguas cristalinas y su entorno natural de montañas y nevados. Son un atractivo turístico popular para caminatas y excursiones en la región.
                    </p>
                </div>
            </div>

            <div class="card" id="cartas">
                <img src="../img/sierra-Kuelap-Chachapoyas,.jpg" id="fotos" alt="">
                <div class="intro">
                    <h1 id="titulares">Chahapoyas</h1>
                    <p id="letras"><span id="sub">Kuelap</span> es una ciudadela precolombina ubicada en la región de Chachapoyas,
                    Perú. Construida por la cultura Chachapoyas entre los siglos VI y XVI,
                    cuenta con imponentes murallas y más de 400 edificios de piedra.  </p>
                </div>
            </div>
        </div>

        <!-- Selva -->
        <div class="container " id="elige4">
            <h1 id="visitas3"><strong> SELVA  </strong></h1>
        </div>
        <div class="container" id="cartas">
            <div class="card" id="cartas">
                <img src="../img/selva-iquitos-isla-monos.jpg" id="fotos" alt="">
                <div class="intro">
                    <h1 id="titulares">Iquitos</h1>
                    <p id="letras">La <span id="sub">Isla de monos</span> es una reserva natural ubicada en la región de Iquitos, Perú.
                        Hogar de numerosas especies de monos y otros animales amazónicos, es un lugar popular para el ecoturismo y la observación de la vida silvestre.
                     </p>
                </div>
            </div>


            <div class="card" id="cartas">
                <img src="../img/selva-Quistococha-Loreto.jpg" id="fotos" alt="">
                <div class="intro">
                    <h1 id="titulares">Loreto</h1>
                    <p id="letras"><span id="sub" >Quistococha</span>  es una laguna ubicada en la ciudad de Iquitos, Perú.
                        Es un destino turístico popular debido a su hermoso paisaje, actividades acuáticas y la reserva ecológica que la rodea.
                    </p>
                </div>
            </div>

            <div class="card" id="cartas">
                <img src="../img/selva-rio-amazonas.jpg" id="fotos" alt="">
                <div class="intro">
                    <h1 id="titulares">Rio Amazonas</h1>
                    <p id="letras">El <span id="sub">Rio Amazonas</span> Es una fuente importante de vida y recursos para las comunidades locales y cuenta con una gran variedad de flora y fauna.
                     También es un destino turístico popular para explorar la selva amazónica.
                    </p>
                </div>
            </div>
        </div>

        <!-- Galeria -->
        <h2 class="tituloss" id="tituloss">Explora los Rincones de nuestro Perú</h2>
        <div class="grid-container">
            <div class="item">
            <img src="https://www.peru.travel/Contenido/Atractivo/Imagen/es/16/1.2/Principal/chan-chan.jpg" alt="">
            <div class="capa">
                <p>Chanchan</p>
            </div>
            </div>
            <div class="item">
            <img src="https://www.paracasexplorer.com/wp-content/uploads/2020/08/caral.jpg" alt="">
            <div class="capa">
                <p>Caral</p>
            </div>
            </div>
            <div class="item">
            <img src="https://www.peru.travel/Contenido/Atractivo/Imagen/es/57/1.3/Principal/paracas-e-islas-ballestas.jpg" alt="">
            <div class="capa">
                <p>Islas Ballestas</p>
            </div>
            </div>
            <div class="item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a6/Chav%C3%ADn_de_Hu%C3%A1ntar_-_51148181187.jpg" alt="">
            <div class="capa">
                <p>Chavin de Huantar</p>
            </div>
            </div>
            <div class="item">
            <img src="https://portal.andina.pe/EDPfotografia2/Thumbnail/2009/09/07/000105121W.jpg" alt="">
            <div class="capa">
                <p>Baños del Inca</p>
            </div>
            </div>
            <div class="item">
            <img src="https://www.museosdelima.com/wp-content/uploads/2018/01/huaca-pucllana-lima-3.jpg" alt="">
            <div class="capa">
                <p>Huaca Pucllana</p>
            </div>
            </div>
            <div class="item">
            <img src="https://www.peru.travel/Contenido/Uploads/lago-sandoval-interior-3_637661807837691460.jpg" alt="">
            <div class="capa">
                <p>Lago Sandoval</p>
            </div>
            </div>
            <div class="item">
            <img src="https://portal.andina.pe/EDPfotografia3/Thumbnail/2021/09/27/000811337W.jpg" alt="">
            <div class="capa">
                <p>Lago Titicaca</p>
            </div>
            </div>
            <div class="item">
            <img src="https://www.tours-machupicchu-peru.com/wp-content/uploads/2021/10/Tour-a-la-Montana-7-Colores-1-Dia.jpg" alt="">
            <div class="capa">
                <p>La Montaña de 7 Colores</p>
            </div>
            </div>
            <div class="item">
            <img src="https://www.wamanadventures.com/blog/wp-content/uploads/2020/06/mapa-2-nazca.gif" alt="">
            <div class="capa">
                <p>Las Lineas de Nazca</p>
            </div>
            </div>
            <div class="item">
            <img src="https://atvcuscoadventures.com/blog/wp-content/uploads/2022/04/valle-sagrado-1000x540.jpeg" alt="">
            <div class="capa">
                <p>Valle Sagrado </p>
            </div>
            </div>
            <div class="item">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/b1/1f/5f/salkantay.jpg?w=1200&h=-1&s=1" alt="">
            <div class="capa">
                <p>salkantay</p>
            </div>
            </div>
        </div>

        <!-- footer -->
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="../img/footer.jpg" alt="Logo de SLee Dw">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>SOBRE NOSOTROS</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                </div>
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                </div>
            </div>
            <div class="grupo-2">
                <small id="pie">&copy; 2023 <b>Trabajo Final</b> - Todos los Derechos Reservados.</small>
            </div>
        </footer>




    </body>

</html>
