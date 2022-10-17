<?

// require_once('./model/bdd/InterfaceStorage.php');
require_once('./model/bdd/mysql/ListeProjet.php');

class Controle
{
    protected $vue;
    protected $listeProjet;

    public function __construct(Vue $vue)
    {
        $this->vue = $vue;
        $this->listeProjet = new ListeProjet($this->vue);
   
    }

    public function makeListePage()
    {
        $tableauProjet = $this->listeProjet->getAll();
        $this->vue->makeListePage($tableauProjet);
    }
}

?>