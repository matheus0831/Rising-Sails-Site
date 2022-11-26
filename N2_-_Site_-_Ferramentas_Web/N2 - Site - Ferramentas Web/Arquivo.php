<!DOCTYPE html>
<?php
  $conecta = new mysqli("127.0.0.1", "root", "", "db_usuario");




?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style_bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <!--Botão de Em breve-->
    
    <!--NAV-->
    <header class="position-sticky">

        <!--NAV-->
        <div class="row col-12 m-0">
            <nav class="navbar navbar-expand-lg col-4 rounded">
                <div class="navbar-nav col-12 justify-content-around">
                    <a class="nav-item nav-link" href="Arquivo.php">Rising Sails</a>
                    <a class="nav-item nav-link" href="jogo_bootstrap.html">O jogo</a>
                </div>
            </nav>
            <div class="col-4">

            </div>
            <nav class="navbar navbar-expand-lg col-4 rounded">
                <div class="navbar-nav col-12 justify-content-around">
                    <a class="nav-item nav-link" href="#">Instagram</a>
                    <a class="nav-item nav-link" href="#">Taverna do Pier</a>
                </div>
            </nav>
        </div>
    </header>

    <!--Primeiro conteudo-->
    <div class="row col-12 m-0 align-items-center primeiro-conteudo">
        <div class="col-5 texto_um">
            <p>Game test</p>
            <h1>Rising Sails</h1>
            <p> Junte-se à nossa Taverna do Pier, nossa comunidade do discord para novos testers para o lançamento do novo jogo Rising Sails da empresa Quack Duck.</p>
            <button class="btn btn-primary rounded">Juntar-se à comunidade</button>
        </div>
    </div>

    <!--Segundo conteudo-->
    <div class="row col-12 m-0 justify-content-around align-items-center segundo-conteudo">
        <div class="col-5 imagem-dois">
            <img src="imagens/image 1.png">

        </div>
        <div class="col-6 texto-dois">
            <p>O jogo</p>
            <h1>Conquiste o porto inimigo com sua infantaria</h1>
            <p>Conquiste o porto inimigo com sua infantaria e domine os mares no mais novo card game de estratégia e gerenciamento de recursos com lançamento prévio para dezembro de 2023.</p>
            <h2>Seja um dos primeiros a testar Rising Sails. Junte-se à taverna do pier!</h2>
            <button class="btn btn-primary rounded">Juntar-se à comunidade</button>
        </div>

    </div>

    <!--Terceiro conteudo, espaço da Mari-->
    
        <div class="cards-deck ">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="imagens/back-centralizado_espero_eu.png"  style="width:200px;height:304px;">
                  </div>
                  <div class="flip-card-back">
                    <img src="imagens/Holandes Voador.jpg"  style="width:200px;height:304px;">
                  </div>
                </div>
              </div>
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="imagens/back-centralizado_espero_eu.png"  style="width:200px;height:304px;">
                  </div>
                  <div class="flip-card-back">
                    <img src="imagens/Sant Marry.jpg"  style="width:200px;height:304px;">
                  </div>
                </div>
              </div>
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="imagens/back-centralizado_espero_eu.png"  style="width:200px;height:304px;">
                  </div>
                  <div class="flip-card-back">
                    <img src="imagens/ZECA PAGODINHO.jpg"  style="width:200px;height:304px;">
                  </div>
                </div>
              </div>
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="imagens/back-centralizado_espero_eu.png"  style="width:200px;height:304px;">
                  </div>
                  <div class="flip-card-back">
                    <img src="imagens/Vingança da Rainha.jpg"  style="width:200px;height:304px;">
                  </div>
                </div>
              </div>
              <div class="text text-white">
                <h2 >Ahoy! </h2>
                <p>Conheça os seus marujos e
                capitões, e escolha quem vai estar a bordo da sua
                nova aventura!</p>
                <button class="btn btn-primary">Juntar-se à Comunidade</button>
              </div>
            </div>

    

    <!--Quarto conteúdo - Formulário-->
    <div class="row col-12 m-0 justify-content-center align-items-center quarto-conteudo">
        <div class="row col-5 justify-content-center align-items-center base-formulario">
            <form method="POST" action="Envia.php">
                <h3>Alistar-se</h3>
                <h1>Içar velas, marujos!</h1>
                <p>Preencha o formulário ou acesse nosso canal do discord para participar dos nossos testes de mesa da Taverna do Pier.</p>
                <div class="mb-3">
                    <label for="Nome" class="form-label">NOME</label>
                    <input type="text" class="form-control" id="Nome" name="NOME">
                </div>
                <div class="mb-3">
                    <label for="Id_discord" class="form-label">ID DO DISCORD</label>
                    <input type="text" class="form-control" id="Id_discord" name="ID_DISCORD">
                </div>
                <div class="mb-3">
                    <label for="comentario" class="form-label">COMENTÁRIO</label>
                    <input type="text" class="form-control" id="comentario" name="COMENTARIO">
                </div>
                <div class="col-12 d-flex justify-content-end align-items-center botao-envio">
                    <button type="submit" class="btn align-items-center justify-content-center col-5">Enviar</button>
                </div>
            </form>

        </div>
    </div>

    <!--O espaço de depoimentos vai aqui more-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
            
            <h2 class="d-block w-100">Malcoln</h2>
            <p>Adorei o jogo nota 10!</p>
            
          </div>


          <?php

            $resultado = $conecta->query("SELECT * FROM jogadores");
            
            while($query = $resultado->fetch_assoc()){
              echo "<div class='carousel-item'>";
              
              echo "<h2 class='d-block w-100'>". $query["NOME"]. "</h2>";
              echo "<p>". $query["COMENTARIO"]. "</p>";
              echo "</div>";

            }
            


            mysqli_close($conecta);
          ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!--Footer do site-->

    <footer>
        <h1>Rising Sails</h1>
        <div class="icones-redes-sociais">
          <img class="social" src="./imagens/discord.png">
          <img class="social" src="./imagens/insta.png">
          <img class="social" src="./imagens/catarse.png">

        </div>
        
        <div class="texto-footer">
            <p>Todos os direitos reservados 2022</p>
            <p>Desenvolvido por QuackDuck</p>
        </div>

    </footer>
       
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>