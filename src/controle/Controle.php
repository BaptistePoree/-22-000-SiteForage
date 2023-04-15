<?

//require_once('./model/bdd/mysql/ListeProjet.php');
require_once('./model/bdd/mysql/ListeProjet/ListeProjetSQL.php');

//require_once('./model/bdd/mysql/Projet4BlindTest.php');
require_once('./model/bdd/mysql/BlindTest/ExtraitSQL.php');

class Controle
{
    protected $vue;
    protected $listeProjet;
    //protected $projet4BlindTest;

    protected $extraitSQL;

    public function __construct(Vue $vue)
    {
        $this->vue = $vue;
        $this->listeProjet = new ListeProjet($this->vue);
        //$this->projet4BlindTest = new Projet4BlindTest($this->vue);
        $this->extraitSQL = new ExtraitSQL($this->vue);
   
    }

    public function makeListePage()
    {
        $tableauProjet = $this->listeProjet->getAll();
        $this->vue->makeListePage($tableauProjet);
    }

    public function makePageProjet($get)
    {
        // print_r($_GET['key']);
        $tableauDuProjet = $this->listeProjet->getId($get['key']);
        $this->vue->makePageProjet($get, $tableauDuProjet);
    }

    public function makeProjet4($get, $projet_BlindTest_Extrait=null)
    {
        // $projet_BlindTest_Extrait = $this->extraitSQL->readAllListes($this->extraitSQL->getAll());
        $projet_BlindTest_Extrait = $this->extraitSQL->getId($get['testAudio']);
        $this->vue->makeProjetId($get, $projet_BlindTest_Extrait);
    }

    public function makeProjetBlindTest($get){
        $projet_BlindTest_Extrait = $this->extraitSQL->readAllListes($this->extraitSQL->getAll());
        //define('idTable', $projet_BlindTest_Extrait);
        $this->makeProjet4($get, $projet_BlindTest_Extrait);
    }
}

?>