<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Calculo Area de la Figura</title>
</head>
<body>

    <div class="container">

        <div class="jumbotron mt-5">
            <div class="titulo">
                <h1>Calculo Area</h1>
            </div>
            <?php
                if(isset($valb) && isset($vala) && isset($valf)){
                    if($valb==1){
            ?>
                        <div class="alert alert-warning alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Mensaje</strong> Campo Base Vacio
                        </div>
                    <?php
                    }
                    if($vala==1){
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Mensaje</strong> Campo Altura Vacio
                        </div>

                    <?php
                    }
                    if($valf==1){
                     ?>       

                        <div class="alert alert-warning alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Mensaje</strong> Seleccione Figura
                        </div>
            <?php
                    }
                } 
            ?>
            
            
            <form method="post" action="index.php"> 

                <input type="number" class="form-control mt-3" placeholder="Digite la Base" name="base"
                value="<?php if(isset($base)) echo $base;?>">
                <input type="number" class="form-control mt-3" placeholder="Digite la Altura" name="altura"
                value="<?php if(isset($altura)) echo $altura;?>">
                <select class="form-control mt-3" name="figura">
                    <option value="0" 
                    <?php

                        if(isset($figura) && $figura=="0"){
                    ?>                    
                        selected
                    <?php
                        }
                    ?>
                    >Seleccione una Figura</option>
                    <option value="1"
                    <?php

                        if(isset($figura) && $figura=="1"){
                    ?>                    
                        selected
                    <?php
                        }
                    ?>
                    
                    >Rectangulo</option>
                    <option value="2"
                    <?php

                        if(isset($figura) && $figura=="2"){
                    ?>                    
                        selected
                    <?php
                        }
                    ?>
                    >Triangulo</option>

                </select>
                <input type="number" class="form-control mt-3" placeholder="Valor Area" name="area"
                value="<?php if(isset($area)) echo $area; ?>">
                <input type="submit" value="Calcular" class="btn btn-primary btn-block mt-3">
                


            </form>



        </div>

    </div>


    
</body>
</html>