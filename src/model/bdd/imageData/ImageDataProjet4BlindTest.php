<?php 

class ImageDataProjet4BlindTest
{
    protected ?int $id;
    protected ?string $titre;
    protected ?string $lienCourYT;
    protected ?string $temp;
    protected ?string $img;
    protected ?string $idTheme;

    public function __construct(array $data, $id = null)
    {
        $this->id           = (key_exists("id", $data) || $id !== null) ? $id : null;
        $this->titre        = (key_exists("titre", $data))              ? $data["titre"] : null;
        $this->lienCourYT   = (key_exists("lienCourYT", $data))         ? $data["lienCourYT"] : null;
        $this->temp         = (key_exists("temp", $data))               ? $data["temp"] : null;
        $this->img          = (key_exists("img", $data))                ? $data["img"] : null;
        $this->idTheme      = (key_exists("idTheme", $data))            ? $data["idTheme"] : null;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function getLienCourYT()
    {
        return $this->lienCourYT;
    }
    public function getTemp()
    {
        return $this->temp;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function getIdTheme()
    {
        return $this->idTheme;
    }

}
