<?php

class ImageDate_ListeProjet_Projet
{
    protected ?int $id;
    protected ?string $monProjet;
    protected ?string $vue;
    protected ?string $git;
    protected ?int $idEtat;
    protected ?string $etat;


    public function __construct(array $data, $id=null)
    {
        $this->id           = (key_exists("id", $data) || $id !== null) ? (key_exists("id", $data)? $data["id"] : $id) : null;
        $this->monProjet    = (key_exists("monProjet", $data))          ? $data["monProjet"] : null;
        $this->vue          = (key_exists("vue", $data))                ? $data["vue"] : null;
        $this->git          = (key_exists("git", $data))                ? $data["git"] : null;
        $this->idEtat       = (key_exists("idEtat", $data))             ? $data["idEtat"] : null;
        $this->etat         = (key_exists("etat", $data))               ? $data["etat"] : null;
    }

    public function getId()
    {
        return sprintf("%'.04d\n", $this->id);
    }
    public function getNomProjet()
    {
        return $this->monProjet;
    }
    public function getVue()
    {
        return $this->vue;
    }
    public function getGit()
    {
        return $this->git;
    }
    public function getIdEtat()
    {
        return $this->idEtat;
    }
    public function getEtat()
    {
        return $this->etat;
    }

    public function getTable()
    {
        return [
            "id"        => $this->getId(),
            "monProjet" => $this->getNomProjet(),
            "vue"       => $this->getVue(),
            "git"       => $this->getGit(),
            "idEtat"    => $this->getIdEtat(),
            "etat"      => $this->getEtat()
        ];
    }
}
