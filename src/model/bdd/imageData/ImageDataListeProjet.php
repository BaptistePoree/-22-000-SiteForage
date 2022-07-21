<?php 

class ImageDataListeProjet
{
    protected ?int $id;
    protected ?string $name;
    protected ?string $detail;

    public function __construct(array $data, $id = null)
    {
        $this->id       = (key_exists("id", $data) || $id !== null) ? $id : null;
        $this->name     = (key_exists("name", $data))               ? $data["name"] : null;
        $this->detail   = (key_exists("detail", $data))             ? $data["detail"] : null;
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
}

?>