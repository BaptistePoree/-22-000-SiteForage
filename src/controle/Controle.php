<?

// require_once('./model/bdd/InterfaceStorage.php');
require_once('./model/bdd/mysql/ListeProjet.php');
require_once('./model/bdd/mysql/Projet4BlindTest.php');

class Controle
{
    protected $vue;
    protected $listeProjet;
    protected $projet4BlindTest;

    public function __construct(Vue $vue)
    {
        $this->vue = $vue;
        $this->listeProjet = new ListeProjet($this->vue);
        $this->projet4BlindTest = new Projet4BlindTest($this->vue);
   
    }

    public function makeListePage()
    {
        $tableauProjet = $this->listeProjet->getAll();
        $this->vue->makeListePage($tableauProjet);
    }

    public function makeProjet4($get)
    {
        $projet4BlindTest = $this->projet4BlindTest->getAll();
        $this->vue->makeProjetId($get, $projet4BlindTest);
    }
}

?>