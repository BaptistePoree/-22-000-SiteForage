<?php

require_once("model/bdd/InterfaceStorage.php");
require_once("model/bdd/imageData/ImageDataListeProjet.php");

class ListeProjet implements InterfaceStorage
{
    protected $vue;
    protected $listeprojet;

    public function __construct(Vue $vue = null)
    {   $this->vue = $vue;  
        $this->listeprojet = [ 
            1 => ['id' => 1, 'name' => '7 famille', 'detail' => '', 'lienVue' => '', 'lienGit' => ''],
            2 => ['id' => 2, 'name' => '2048', 'detail' => '', 'lienVue' => '', 'lienGit' => ''], 
        ];
    }

    public function create(Object $c)
    { }

    public function getId($id)
    { }

    public function getAll()
    { }

    public function setId($id, Object $c)
    { }

    public function delete($id)
    { }

    public function deleteAll()
    { }
}