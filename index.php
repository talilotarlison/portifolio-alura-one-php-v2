
<?php
  # LIsta do array de todas as paginas do site
  $paginas = [
  "sobre"=>"Sobre minha pagina.", 
  "skills"=>"Sobre minha habilidades",
  "projetos"=>"Sobre meus projetos." ,
  "formação" => "Sobre minha formação.",
  "hobbies" => "Sobre  meus hobbies.",
  "contato" => "Sobre meus contatos"
  ];

?>

<html lang="pt-br">
<!-- Infomações de configuração da pagina-->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <?= "<title> Portifolio Alura One - ".ucfirst($_GET["page"]??"home")."</title>";?>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="assets/css/response.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="assets/css/animation.css" media="screen" />
  <body>
     <!-- Meu header do site--> 
  <header>
    <div class="container menu_inicio">
      <div class="logo">
        <img src="https://raw.githubusercontent.com/alura-challenges/challenge-one-portfolio-br/master/assets/vector.png" />
        <h2>Talilo Tarlison</h2>
      </div>
      <section class="menu-section">
        <div class="container-menu">
          <input type="checkbox" id="checkbox-menu" />
          <label class="menu-button-container" for="checkbox-menu">
            <span></span>
            <span></span>
            <span></span>
          </label>

          <nav>
            <ul class="menu">
              <?php 
                  foreach($paginas as $key => $value){
                    echo '<li>
                            <a href="rotas=?page='.$key.'"  title="'.$value.'">'.ucfirst($key).'</a>
                          </li>';
                  } ;
              ?>
            </ul>
          </nav>
        </div>
      </section>
    </div>
  </header>
   <!-- Meu main do site--> 
  <main>
    <?php 
        if(empty($_GET["page"])){
          include('rotas\sobre_mim.php');
        }else{
          include('rotas.php') ;
        }
    ?>
  </main>
    <!-- Meu footer do site--> 
  <footer class="rodape">
    <p>Oracle ONE na Alura.</p>
    <p>Desenvolvido por Talilo Tarlison em &copy; 2022</p>
  </footer>
  <script src="script.js"></script>
  </body>
</html>