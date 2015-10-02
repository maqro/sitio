<html>
<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Museo de Arte Querétaro</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/maqro.css">
    </head>

    <body>

<?php include("headerSinContacto.php");?>

        <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="padding:70px 0;">
                    <div class="logo">
                        <img class="img-responsive" src="media/LogoMAQRO2.png" />
                    </div>
                </div>
                <div class="col-md-8 maqro-top-body">
                    <div>
                        <h1>Eventos</h1>
                        <br>
                        <p align="justify">
                            <br><br>
                        </p>
                    </div>
                </div>
                <div class="col-md-12 inclusive-background">
                    <div id="carousel-main" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-main" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-main" data-slide-to="1" ></li>
                        </ol>
                        <div class="carousel-inner">
                            <!-- <div class="item active">
                                <img src="media/eventos/TallerBarro.jpg"></img>
                            </div>
                            <div class="item">
                                <img src="media/eventos/VisitaCiegas.jpg"></img>
                            </div> -->
                        </div>

                        <a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev">
                            <img src="media/left.png"></img>
                        </a>
                        <a class="right carousel-control" href="#carousel-main" role="button" data-slide="next">
                            <img src="media/right.png"></img>
                        </a>
                    </div>
                </div>

                <div class="col-md-4" style="padding-top:70px">
                    <div>
                        <div class="flexible-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.9272832206275!2d-100.393499!3d20.591027000000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2a70016d2f%3A0x3038fd3094e91fa0!2sMuseo+De+Arte+De+Queretaro!5e0!3m2!1ses!2s!4v1415931559420" width="400" height="300" frameborder="0" style="border:0"></iframe>
                        </div>
                        <br><h2>Dirección</h2>
                        Museo de Arte de Querétaro
                        <br>Allende 14 sur, Centro Histórico
                        <br>Querétaro, Qro. México
                        <br>C.P. 76000

                        <h2>Teléfonos</h2>
                        (442) 212 23 57
                        <br>(442) 212 35 23

                        <h2>Horario de servicio</h2>
                        Martes a domingo / 10:00 a 18:00 h.

                        <h2>Admisión</h2>
                        Público: $ 30.00
                    </div>
                    <div>
                        <br>
                        <br>
                        <h1>Colecciones Permanentes</h1>
                        <div style="text-align:center;">
                            <a href="#carousel-permanentes" role="button" data-slide="next">
                                <img src="media/top2.png"></img>
                            </a>
                            <br/>
                            <br/>
                            <div id="carousel-permanentes" class="carousel slide vertical" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="media/permanentes/barroco.jpg"></img>
                                        <h2>Barroco</h2>
                                        <p>En estas salas el museo exhibe una extensa colección de  pinturas  y esculturas  de  estilo  barroco realizadas en los siglos XVII y XVIII por artistas como: Juan Rodríguez Juárez, Miguel Cabrera y José de Alcíbar.</p>
                                        <br/>
                                        <img src="media/permanentes/manierismo.jpg"></img>
                                        <h2>Manierismo</h2>
                                        <p>En esta sala podemos ver ejemplos de la obra manierista de artistas del  primer tercio del siglo XVII en la Nueva España.</p>
                                    </div>
                                    <div class="item">
                                        <img src="media/permanentes/europea.jpg"></img>
                                        <h2>Pinturas Europeas</h2>
                                        <p>En esta sala se exhibe una reducida pero importante muestra de la pintura  europea, que permite formarse una idea de lo que se producía en el Viejo Mundo, en la que destaca <i>La oración en el huerto</i> de Luca Giordano, así como una pequeña colección de pintura flamenca.</p>
                                        <br/>
                                        <img src="media/permanentes/flamenca.jpg"></img>
                                        <h2>Pintura Flamenca</h2>

                                    </div>
                                    <div class="item">
                                        <img src="media/permanentes/mexicana.jpg"></img>
                                        <h2>Pintura Méxicana del Siglo XIX</h2>
                                        <p>Rica en número y calidad es la muestra  de la pintura mexicana del siglo XIX que se exhibe en estas salas. Las obras  representan  la  época posterior a la reorganización de la Academia  de  San Carlos en 1843 y son en  su  gran  mayoría  obras  ejecutadas por  alumnos  de  la  misma. </p>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <a href="#carousel-permanentes" role="button" data-slide="prev">
                                <img src="media/bottom2.png"></img>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 maqro-top-body">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <p align="justify">

                        </div>
                        <br>
                        </b>
                        </p>
                        <hr/>
                        <?php include("temporales.php");?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--tengo que crear su footer personalizado-->

<?php include("footer.php");?>

</body>
</html>
