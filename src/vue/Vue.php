<?php
require_once("./model/general.php");

class Vue
{
    protected $route;
    protected $titre;
    protected $content;
    protected $table;
    protected $tableCss;
    protected $tableJs;
    protected $tableNav;

    public function __construct(Router $router)
    {
        $this->route = $router;
        $this->titre = null;
        $this->content = null;
        $this->table = new TableauGeneral();
        $this->tableCss = array();
        $this->tableJs = array();
        $this->tableNavInstance = new NavGeneral();
        $this->tableNav = [];
    }

    /* Gestion des Erreur  */
    public function makeErrorPage($title, $description)
    {
        $this->tableCss['general'] = 'general';
        $this->titre = "Erreur";
        ob_start();
        include_once('templates/errorPage.php');
        $this->content .= ob_get_clean();
    }

    public function makehomePage()
    {
        $this->tableCss['home'] = ['home'];
        $this->titre = "Forge Suivie";
        ob_start();
        require_once('./prog/home/structure/home.vue.php');
        $this->content .= ob_get_clean();
    }

    public function makeListePage($tableauProjet)
    {
        $this->tableCss['liste'] = ['liste'];
        $this->titre = "Liste des projets";
        ob_start();
        require_once('./prog/liste/structure/liste.vue.php');
        $this->content .= ob_get_clean();
    }

    public function makePageProjet($get, $testTotal = null)
    {
        $this->tableCss['general'] = ['divTail'];
        $this->tableCss['projetIdentiter'] = ['projet'];
        $this->titre = "Projet " . $get['nom'];
        ob_start();
        require_once('./prog/projet/projet_identiter/structure/projet.vue.php');
        $this->content .= ob_get_clean();
    }

    public function makeProjetId($get, $testTotal=null)
    {
        define('idTable', $testTotal);
        $this->tableCss['projetNb'] = [$get['key']];
        $this->tableJs['boot']['projetNb'] = [ $get['key']];
        $this->titre = "Vue Projet";
        ob_start();
        require_once('./prog/projet/projet_' . $get['key'] . '/structure/projet.' . $get['key'] . '.vue.test.php');
        $this->content .= ob_get_clean();
    }

    public function render($afficheNav)
    {
        $this->tableCss['general'] = ['root', 'general', 'divTail'];
        $this->tableCss['menu'] = ['menu'];
        $this->table->setCss($this->tableCss, 'Fixe');
        $this->tableCss = [];

        $this->tableJs['boot']['menu'] = ['menu.mobile'];

        require_once('./prog/general/structure/top.vue.php');
        
        if($afficheNav)
        {
            $this->tableNav = $this->tableNavInstance->getNav();
            require_once('./prog/menu/structure/menu.vue.php');
        }
        
        echo $this->content;
        $this->table->setCss($this->tableCss, 'Module');
        $this->table->setJs($this->tableJs);
        require_once('./prog/general/structure/bottom.vue.php');
    }


}

?>