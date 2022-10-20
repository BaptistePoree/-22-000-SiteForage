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

    public function makeProjet()
    {
        $this->tableCss['projet'] = ['projet'];
        $this->titre = "Projet " . $_GET['nom'];
        ob_start();
        require_once('./prog/projet/structure/projet.vue.php');
        $this->content .= ob_get_clean();
    }

    public function makeProjetId($get, $tableauBdd=null)
    {
        $this->tableCss['projet'] = ['projet.'.$get['key']];
        $this->tableJs['boot']['projet'] = ['projet.'. $get['key']];
        $this->titre = "Vue Projet";
        ob_start();
        require_once('./prog/projet/structure/projet.vue.test.'.$get['key'].'.php');
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