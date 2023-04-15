<?php

class ImageData_BlindTest_Extrait
{
    protected ?int $id;
    protected ?string $nom;
    protected ?string $lienYT;
    protected ?int $dureeYT;
    protected ?string $imageLocal;
    protected ?string $imageLien;

    public function __construct(array $data, $id = null)
    {
        $this->id           = (key_exists("id", $data) || $id !== null) ? $id : null;
        $this->nom          = (key_exists("nom", $data))                ? $data["nom"] : null;
        $this->lienYT       = (key_exists("lienYT", $data))             ? $data["lienYT"] : null;
        $this->dureeYT      = (key_exists("dureeYT", $data))            ? $data["dureeYT"] : null;
        $this->imageLocal   = (key_exists("imageLocal", $data))         ? $data["imageLocal"] : null;
        $this->imageLien    = (key_exists("imageLien", $data))          ? $data["imageLien"] : null;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getLienYT()
    {
        return $this->lienYT;
    }
    public function getDureeYT()
    {
        return $this->dureeYT;
    }
    public function getImageLocal()
    {
        return $this->imageLocal;
    }
    public function getImageLien()
    {
        return $this->imageLien;
    }
}
