<?php

require_once("model/bdd/InterfaceStorage.php");
require_once("model/bdd/imageData/ImageDataListeProjet.php");

class ListeProjet implements InterfaceStorage
{
    protected $vue;

    public function __construct(Vue $vue = null)
    {   $this->vue = $vue;  }

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