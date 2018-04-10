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
        <?php $page = "CURSOS"; ?>
        <?php
        include_once('./header.php');
        ?>


        <div class="container">
            <div class="row">
                <div class="col-sm-4" >
                    <div class="margem">

                        <div class="container-fluid"></div>
                        <div class="img_index" >
                            <a href="CTESP.php"><img class="margem" src="http://www.iscia.edu.pt/sites/default/files/letra_CTeSP.png"></img></a>
                            <h4>CTESP</h4> 
                        </div>   

                    </div>
                </div>
                <div class="col-sm-4" >
                    <div class="margem">

                        <div class="container-fluid"></div>
                        <div class="img_index">
                            <a href="#"><img class="margem" src="http://www.iscia.edu.pt/sites/default/files/letra_M.png"></img></a>
                            <h4>MESTRADOS</h4> 
                        </div>   

                    </div>
                </div>
                <div class="col-sm-4" >
                    <div class="margem">

                        <div class="container-fluid"></div>
                        <div class="img_index">
                            <a href="#"><img class="margem" src="http://www.iscia.edu.pt/sites/default/files/letra_L.png"></img></a>
                            <h4>LICENCIATURAS</h4> 

                        </div>   

                    </div>
                </div>

            </div>
        </div>
        
        <?php
        include_once('./rodape.php');
        ?>
</html>
