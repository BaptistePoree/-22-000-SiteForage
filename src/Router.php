<?php
require_once("./model/general.php");
require_once("./vue/Vue.php");
require_once("./controle/Controle.php");

class Router
{
    public function main()
    {
        $vue = new Vue($this);
        $controle = new Controle($vue);

        $action_get = key_exists('action', $_GET) ? $_GET['action'] : 'home';

        try {
            $nav = true;
            switch ($action_get)
            {
                case 'Liste':
                    $controle->makeListePage();
                    break;
                case 'Projet':
                    $controle->makePageProjet($_GET);
                    break;
                case 'ProjetId':
                    switch($_GET['key'])
                    {
                        case '4':
                            $controle->makeProjet4($_GET);
                            $nav = false;
                            break;
                        default:
                            $controle->makePageProjet($_GET);
                            break;
                    }
                    break;
                default:
                    $vue->makehomePage();
                    break;
            }
        } catch (Exception $e) {
            //TODO : page d'erreur;
        }
        
        $vue->render($nav);
    }
}

?>