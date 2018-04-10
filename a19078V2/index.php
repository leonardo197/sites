<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/index.js" type="text/javascript"></script>
    </head>
    <body>
        <?php $page = "HOME"; ?>
        <?php
        include_once('./header.php');
        ?>
        <div class="row">
            <div class="col-sm-12" >

                <div class="container-fluid">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="img/carousel1.jpg"  style="width:100%;">
                                <div class="carousel-caption">           
                                </div>
                            </div>

                            <div class="item">
                                <img src="img/carousel2.jpg" style="width:100%;">
                                <div class="carousel-caption">
                                </div>
                            </div>

                            <div class="item">
                                <img src="img/carousel3.jpg"  style="width:100%;">
                                <div class="carousel-caption">
                                </div>
                            </div>

                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>

                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4" >
                    <div class="margem">

                        <div class="container-fluid"></div>
                        <div class="img_index">
                            <img class="margem" src="http://www.estgp.pt/media/filer_public_thumbnails/filer_public/37/20/37207b20-d23c-48be-b079-8470161b3941/estg.png__1280x500_q85_crop_subsampling-2.jpg"></img>
                            <h4>Abertas Candidaturas a Estudante Internacional</h4> 
                            <h5>Primeira Fase de Candidaturas decorre de 15  a 31</h5>

                        </div>   

                    </div>
                </div>
                <div class="col-sm-4" >
                    <div class="margem">

                        <div class="container-fluid"></div>
                        <div class="img_index">
                            <img class="margem" src="http://www.estgp.pt/media/filer_public_thumbnails/filer_public/c9/a1/c9a12f9f-930f-4a2e-86d6-9c489f0ce7d1/foto_grupo_ei_2016_17.jpg__180x80_q85_crop_subsampling-2.jpg"></img>
                            <h4>Application by International Students now open</h4> 
                            <h5>Fist period of applications from 15 January to 31 March 2018 </h5>
                        </div>   

                    </div>
                </div>
                <div class="col-sm-4" >
                    <div class="margem">

                        <div class="container-fluid"></div>
                        <div class="img_index">
                            <img class="margem" src="http://www.estgp.pt/media/filer_public_thumbnails/filer_public/ca/01/ca0129ec-4f5f-4fef-b24c-607b2510aa88/prova-publica-mestrados.png__180x80_q85_crop_subsampling-2.png"></img>
                            <h4>Contabilidade e Finanças</h4> 
                            <h5>Primeira Fase de Candidaturas decorre de 15 de janeiro</h5>
                        </div>   

                    </div>
                </div>

            </div>
        </div>
        <div class="container marketing">

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Mensagem aos novos alunos</h2>
                    <p class="lead">É com grande prazer que vos damos as boas vindas à ESTG-IPPortalegre, neste ano lectivo, desejando que o tempo que irão aqui passar possa ser agradável, enriquecedor e bastante proveitoso.
                        Será um tempo de muito trabalho e de esforço, mas que julgamos virá a ser largamente compensado no vosso futuro profissional e pessoal. A escola na qual estão a ser integrados, é uma escola nova, bem equipada, dispondo de excelentes laboratórios das mais variadas áreas, com um corpo docente jovem e bem preparado que permite oferecer cursos com qualidade. Dispomos em regime diurno, nocturno e condensado, oferta formativa desde o nível 4 (CET’s e TeSP’s) até ao nível 6 (mestrados) dando possibilidade de uma formação contínua, progressiva  e harmonizada ao longo da vida.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block " src="http://www.estgp.pt/media/filer_public_thumbnails/filer_public/23/4a/234aa1e7-b285-4f11-83f2-b62efc96f05b/paulo_brito.jpg__700x600_q85_subsampling-2.jpg"  alt="Imagem Candidaturas">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">A nossa Casa</h2>
                    <p class="lead">O programa incluía o que se considerou serem dois conjuntos de espaços, com características diferenciadas, que foram dispostos em dois corpos com uma caracterização volumétrica e construtiva distinta:
                        <br>
                                  O primeiro, paralelo à estrada , comprido e estreito (110 x 15m) , betão aparente, cofragem regular e vãos amplos protegidos por grelhas de alumínio, inclui o conjunto de espaços modulares, que se distribuem ordenadamente pelos 4 pisos, ao longo do corredor central (oficinas no piso inferior, laboratórios no piso de entrada, salas de aula e secretarias no primeiro andar, gabinetes de professores no último piso, recuado. </p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block" src="http://www.estgp.pt/media/filer_public_thumbnails/filer_public/ad/c4/adc4f02d-9a73-425f-b40a-80607c73ef66/estglago1.jpg__333x500_q85_crop_subsampling-2_upscale.jpg" alt="Foto">
                </div>
            </div>
            

            <?php
            include_once('./rodape.php');
            ?>
            </html>