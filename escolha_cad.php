<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RegistroVJ</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
    
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                    	<div class="col-sm-3 my-5" > 
         					 <div class="card">
                               
            						
				          </div>
				        </div>
                        <h2 class="form-title">ValidaJá: Cadastro.</h2>
                        <form  action="docente_cad.php" method="POST" >
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Secretaria"/>
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Professor"/>
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Aluno"/>
                            </div>
                        </form>
                    </div>
                    <!--
                    <div class="front-picture">
                        <figure><img src="images/front-picture.jpg" alt="front-picture"></figure>
                        <a href="Login.html" class="front-picture-link">Já possuo Cadastro</a>
                    </div>
					-->
                </div>
            </div>
        </section>
        
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>