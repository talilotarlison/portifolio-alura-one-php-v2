
<?php
           # switch de rotas da pagina
           switch ($_GET["page"]) {
            case 'home':
              return  include("rotas\sobre_mim.php");
                break;
            case 'sobre':
                  include("rotas\sobre_mim.php");
                  break;
            case 'skills':
                include("rotas\skills.php");
                break;
            case 'projetos':
                 include("rotas\projetos.php");
                break;
            case 'formação':
                include("rotas\/formacao.php");
                break;
            case 'hobbies':
                include("rotas\hobbie.php");
                break;
            case 'contato':
                include("rotas\/form.php");
                break;
            default:
                include("rotas\/erro.php");
                break;
        }

?>
