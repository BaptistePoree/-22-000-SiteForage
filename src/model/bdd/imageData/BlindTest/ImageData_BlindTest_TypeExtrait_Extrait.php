<?php

class ImageData_BlindTest_TypeExtrait_Extrait
{
    protected ?int $idTypeExtrait;
    protected ?int $idExtrait;

    public function __construct(array $data, $id = null)
    {
        $this->idTypeExtrait      = (key_exists("idTypeExtrait", $data))            ? $id["TypeExtrait"] : null;
        $this->idExtrait          = (key_exists("idExtrait", $data))                ? $data["idExtrait"] : null;
    }

    public function getIdTypeExtrait()
    {
        return $this->idTypeExtrait;
    }
    public function getIdExtrait()
    {
        return $this->idExtrait;
    }
}
