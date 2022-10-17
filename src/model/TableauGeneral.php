<?php

class TableauGeneral{
    protected $css;
    protected $js;
    protected $cheminDebut;

    public function __construct()
    {
        $this->cheminDebut = './prog/';

        $this->css = [
            'rel' => 'stylesheet', 
            'Fixe' => [ 'listSRC' => [] ],
            'Module' => [ 'listSRC' => [] ],
            
        ];
        $this->js = [
            'type' => 'text/javascript',
            'listSCRTop' => [],
            'listSCRBottom' => []
        ];
    }

    public function getCss()
    { return $this->css; }

    public function setCss($tablecss, $tableDebut)
    { 
        foreach ($tablecss as $key => $liste) {
            foreach ($liste as $nomFicher) {
                $res = $this->cheminDebut . $key . '/css/' . $nomFicher . '.css';
                if ($key === 'general' || $key === 'menu') 
                {
                    array_push($this->css['Fixe']['listSRC'], add_version($res));
                }
                elseif ($key === 'projet' || $key === 'liste' || $key === 'home')
                {
                    array_push($this->css['Module']['listSRC'], add_version($res));
                }
            }
        }
    }

    public function getJs()
    {
        return $this->js;
    }

    public function setJs($tablejs)
    {
        foreach ($tablejs as $position => $table)
        {
            if ($position === 'boot') 
                {$lien = 'listSCRBottom';}
            else 
                {$lien = 'listSCRTop';}

            foreach ($table as $key => $liste) {
                foreach ($liste as $nomFicher) {
                    $res = $this->cheminDebut . $key . '/js/' . $nomFicher . '.js';
                    array_push($this->js[$lien], add_version($res));
                }
            }
        }
    }
}

?>