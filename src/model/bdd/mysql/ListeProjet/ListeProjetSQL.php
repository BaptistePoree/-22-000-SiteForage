<?php

require_once("model/bdd/InterfaceStorage.php");
require_once("model/bdd/imageData/ListeProjet/ImageDate_ListeProjet_Projet.php");

class ListeProjet //implements InterfaceStorage
{
    protected $vue;
    protected $listeprojet;

    public function __construct(Vue $vue = null)
    {
        $this->vue = $vue;
        $this->listeprojet = $this->initTableau();
    }

    public function create(Object $c)
    {
    }

    public function getId($id)
    {
        try {
            $bd = new PDO(DB_Mysql_DSN_ListeProjet, DB_Mysql_USERNAME, DB_Mysql_PASSWORD);
            $rq = " SELECT projet.idProjet AS id, projet.nome AS monProjet, projet.chemin_vue AS vue, projet.chemin_git AS git, projet.idStatu AS idEtat  , statu.nome AS etat
                    FROM projet, statu
                    WHERE projet.idProjet = :id
                    AND projet.idStatu = statu.idStatu;";
            $stmt = $bd->prepare($rq);
            $data = array(":id" => $id);
            $stmt->execute($data);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (sizeof($result) === 0) {
                return null;
            } else {
                return new ImageDate_ListeProjet_Projet($result[0]);
                // print_r(new ImageDate_ListeProjet_Projet($result[0]));
                // return $result;
            }
        } catch (PDOException $e) {
            $this->vue->makeErrorPage('Erreur lors d\'une requête à la base de donnée', $e->getMessage());
            return 'error';
        }
    }

    public function getAll()
    {
        try {
            $bd = new PDO(DB_Mysql_DSN_ListeProjet, DB_Mysql_USERNAME, DB_Mysql_PASSWORD);
            $rq = " SELECT DISTINCT projet.idProjet AS id, projet.nome As monProjet, statu.nome AS etat
                        FROM projet, statu
                        WHERE projet.idStatu = statu.idStatu
                        ORDER BY projet.idProjet ASC;";
            $stmt = $bd->prepare($rq);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (sizeof($result) === 0) {
                return null;
            } else {
                // echo "cool" . $result;
                $res = [];
                foreach ($result as $key => $ligne) {
                    $res[$key] = new ImageDate_ListeProjet_Projet($ligne);
                }
                // print_r($res);
                // return $result;
                return $res;
                return new ImageDate_ListeProjet_Projet($result[0]);
            }
        } catch (PDOException $e) {
            $this->vue->makeErrorPage('Erreur lors d\'une requête à la base de donnée', $e->getMessage());
            return 'error';
        }
    }

    public function setId($id, Object $c)
    {
    }

    public function delete($id)
    {
    }

    public function deleteAll()
    {
    }

    private function initTableau($ficher = './../bdd/Idee_Projet/idee_projet.csv')
    {
        // var_dump(file($ficher));
        // var_export($this->initTableauCsvEntier(file($ficher)));
        //$csv = array_map('str_getcsv', file($ficher));
        // var_export( array_column($csv, 0) );
        //return $csv;
    }

    private function initTableauCsvEntier($tableau)
    {
        $tete = [];
        foreach ($tableau as $key => $value) {
            if ($key === 0) {
                $tete = $this->initTableauCsvLigne($value);
            }
        }
    }

    private function initTableauCsvLigne($corp, $tete = null)
    {
        $tabl = [];
        // while 
        return;
    }
}
