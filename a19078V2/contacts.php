<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap</title>
        <!-- Bootstrap -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet">	
        <script src="js/index.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container" class="clearfix">
            <?php $page = "CONTACTOS"; ?>
            <?php
            include_once('./header.php');
            ?>


            <div class="row">
                <form class="form">
                    <div class="col-sm-offset-1" class="col-sm-6">
                        <div class="well">
                            <form id="form">
                                <label for="name">Nome:</label>
                                <input type="text" class="form-control" id="name"> 
                                </br>
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                                </br>
                                <div class="form-group">
                                    <label for="comment">Comentário:</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                                </br>
                                <label> 
                                    <input type="checkbox">Lembrar:
                                </label>
                                </br>
                                <button id="button2" type="submit" class="btn btn-default">Submeter</button>
                            </form>
                        </div>
                        <br/>
                        <div class="alert alert-success alert-dismissable fade in" id="id" >
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                            <h4 id="result1"></h4>
                            <h4 id="result2"></h4>
                            <h4 id="result3"></h4>
                        </div>
                    </div>                
                </form
            </div> 
            <?php
            include_once('./rodape.php');
            ?>
        </div>
    </body>
</html>