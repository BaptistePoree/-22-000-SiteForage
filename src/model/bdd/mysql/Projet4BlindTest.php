<?php

require_once("model/bdd/InterfaceStorage.php");
require_once("model/bdd/imageData/ImageDataProjet4BlindTest.php");

class Projet4BlindTest //implements InterfaceStorage
{
    protected $vue;
    protected $projet;

    public function __construct(Vue $vue = null)
    {
        $this->vue = $vue;
        $this->projet = $this->initTableau();
    }

    public function create(Object $c)
    {
    }

    public function getId($id)
    {
    }

    public function getAll()
    {
        return $this->projet;
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

    private function initTableau($ficher = './../bdd/audio_projet4.csv')
    {
        // var_dump(file($ficher));
        // var_export($this->initTableauCsvEntier(file($ficher)));
        $csv = array_map('str_getcsv', file($ficher));
        // var_export( array_column($csv, 0) );
        return $csv;
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
