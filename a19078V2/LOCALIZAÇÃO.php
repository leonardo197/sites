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
        <?php $page = "LOCALIZAÇÃO"; ?>
        <?php
        include_once('./header.php');
        ?>
        <div class="row">
            <div class="container">
                
                    <div class="col-sm-12"><h2>A nossa Escola</h2></div>
                    <div class="map">
                        <iframe width="100%" height="550" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=39.268367,+-7.442280&key=AIzaSyCR-SSnvk0SUx5wsN5Xt3oGiSTZtFOSkYY" allowfullscreen></iframe>
                    
                </div>
            </div>
        </div>
        <?php
        include_once('./rodape.php');
        ?>
</html>