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
            switch ($action_get)
            {
                case 'Liste':
                    $controle->makeListePage();
                    break;
                default:
                    $vue->makehomePage();
                    break;
            }
        } catch (Exception $e) {
            //TODO : page d'erreur;
        }
        
        $vue->render();
    }
}

?>