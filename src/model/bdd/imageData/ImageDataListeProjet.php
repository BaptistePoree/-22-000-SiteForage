<?php 

class ImageDataListeProjet
{
    protected ?int $id;
    protected ?string $name;
    protected ?string $detail;
    protected ?string $lienVue;
    protected ?string $lienGit;

    public function __construct(array $data, $id = null)
    {
        $this->id       = (key_exists("id", $data) || $id !== null) ? $id : null;
        $this->name     = (key_exists("name", $data))               ? $data["name"] : null;
        $this->detail   = (key_exists("detail", $data))             ? $data["detail"] : null;
        $this->lienVue  = (key_exists("lienVue", $data))            ? $data["lienVue"] : null;
        $this->lienGit  = (key_exists("lienGit", $data))            ? $data["lienGit"] : null;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDetail()
    {
        return $this->detail;
    }
    public function getLienVue()
    {
        return $this->lienVue;
    }
    public function getLienGit()
    {
        return $this->lienGit;
    }
}

?>