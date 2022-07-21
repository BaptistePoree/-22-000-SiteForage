<?php
require_once("./model/general.php");

class Vue
{
    protected $route;
    protected $titre;
    protected $content;
    protected $table;
    protected $tableNav;

    public function __construct(Router $router)
    {
        $this->route = $router;
        $this->titre = null;
        $this->content = null;
        $this->table = generalTable();
        $this->tableNavInstance = new NavGeneral();
        $this->tableNav = [];
    }

    public function makehomePage()
    {
        $this->titre = "Forge Suivie";
        ob_start();
        require_once('./prog/home/structure/home.vue.php');
        $this->content .= ob_get_clean();
    }

    public function makeListePage()
    {
        $this->titre = "Liste des projets";
        ob_start();
        require_once('./prog/liste/structure/liste.vue.php');
        $this->content .= ob_get_clean();
    }

    public function render()
    {
        require_once('./prog/general/structure/top.vue.php');
        $this->tableNav = $this->tableNavInstance->getNav();
        require_once('./prog/menu/structure/menu.vue.php');
        echo $this->content;

        require_once('./prog/general/structure/bottom.vue.php');
    }


}

?>