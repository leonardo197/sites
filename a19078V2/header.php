

<br>
    <div class="barra">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">                                
                                      <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span> 
                                    </button>
                                          <a class="navbar-brand" href="index.php"><img src="http://www.estgp.pt/static/ippimages/logoestg.png" alt="logo estg"></a>
                                      </div>                       
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li  class="<?php echo ($page =="HOME" ? "active" : "")?>"><a href="index.php">HOME</a></li>
                                        <li class="<?php echo ($page =="LOCALIZAÇÃO" ? "active":"")?>"><a href="LOCALIZAÇÃO.php">LOCALIZAÇÃO</a></li>
                                        <li class="<?php echo ($page =="QUEM SOMOS"?"active":"")?>"><a href="QUEMSOMOS.php">QUEM SOMOS</a></li> 
                                        <li class="<?php echo ($page =="CURSOS"?"active":"")?>"><a href="CURSOS.php">CURSOS</a></li> 
                                        <li class="<?php echo ($page =="COMETARIOS" ? "active" : "")?>"><a  href="contacts.php">CONTACTOS</a></li> 
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="<?php echo $page =="Sign Up"?"active":""?>"><a  href="SignUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                        <li class="<?php echo $page =="login"?"active":""?>"><a  href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
     </div>      
    <br>
    