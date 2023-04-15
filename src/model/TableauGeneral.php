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
                $action = 'listSRC';
                if ($key === 'general' || $key === 'menu') 
                {   $lienPosition = 'Fixe'; }
                elseif ($key === 'projet' || $key === 'liste' || $key === 'home')
                {   $lienPosition = 'Module';   }
                elseif ($key === 'projetIdentiter') 
                { 
                    $res = $this->cheminDebut . 'projet/projet_identiter/css/projet.css';
                    $lienPosition = 'Module';
                }
                elseif ($key === 'projetNb') 
                {
                    $res = $this->cheminDebut . 'projet/projet_' . $nomFicher . '/css/projet.' . $nomFicher . '.css';
                    $lienPosition = 'Module';
                    $action = 'listSRC';
                }
                array_push($this->css[$lienPosition][$action], add_version($res));
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
                    if ($key === 'projetNb')
                    {   $res = $this->cheminDebut . 'projet/projet_' . $nomFicher . '/js/projet.' . $nomFicher . '.js'; }
                    else 
                    {   $res = $this->cheminDebut . $key . '/js/' . $nomFicher . '.js'; }
                    
                    array_push($this->js[$lien], add_version($res));
                }
            }
        }
    }
}

?>