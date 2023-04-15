<?php

class ImageData_BlindTest_TypeExtrait
{
    protected ?int $id;
    protected ?string $nom;
    protected ?string $image;
    protected ?string $icone;

    public function __construct(array $data, $id = null)
    {
        $this->id           = (key_exists("id", $data) || $id !== null) ? $id : null;
        $this->nom          = (key_exists("nom", $data))                ? $data["nom"] : null;
        $this->image        = (key_exists("image", $data))              ? $data["image"] : null;
        $this->icone        = (key_exists("icone", $data))              ? $data["icone"] : null;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getIcone()
    {
        return $this->icone;
    }
}
