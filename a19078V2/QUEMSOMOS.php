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
        <?php $page = "QUEM SOMOS"; ?>
        <?php
        include_once('./header.php');
        ?>
        <div class="row">
            <div class="container">

                <div class="col-sm-12">
                    <h2>Quem somos</h2>
                </div>
                <div class="col-sm-12">
                    <video width="100%" controls>
                        <source src="video/ESTG_vid.mp4" type="video/mp4">
                        Your browser does not support the <code>video</code> tag.
                    </video>
                </div>
            </div>
        </div>
        <?php
        include_once('./rodape.php');
        ?>
</html>

