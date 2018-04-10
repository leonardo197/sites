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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <?php $page = "Sign Up"; ?>
        <?php
        include_once('./header.php');
        ?>
        <div class="login">
            <div class = "container">
                <div class="col-sm-9">
                    <div class="well">
                        <form>
                            <div class = "form-group">
                                <label for = "email2">Email address:</label>
                                <input type = "email" class = "form-control" id = "email2">
                            </div>
                            <div class = "form-group">
                                <label for = "pwd2">Repetir Password:</label>
                                <input type = "Repetir password" class = "form-control">
                            </div>
                            <div class = "form-group">
                                <label for = "pwd2">Repetir Password:</label>
                                <input type = "Repetir password" class = "form-control">
                            </div>
                            <span id="result1" class= "label label-success"></span>
                            <div class = "checkbox">
                                <label><input type = "checkbox"> Lembrar</label>
                            </div>                   
                           <button id="button" type="button" onclick="alerta()"class = "btn btn-default">Submeter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once('./rodape.php');
        ?>
</html>