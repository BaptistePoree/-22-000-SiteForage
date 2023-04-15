<?php 

class TableauCSS{

    //./prog/$nomDossier/css/$nomFicher.css
    //./prog/$nomDossier/nomDossierAutre/css/$nomFicher.css
    
    protected $cheminDebut = './prog/';
    protected $cheminMilieux = 'css';
    protected $cheminFin = '.css';


    protected $rel = 'stylesheet';
    protected $fixe;
    
    protected $nomFicher;
    protected $nomDossier;
    protected $nomDossierAutre;

    public function __construct($type = 'css')
    {
        $this->cheminMilieux = $type;
        $this->cheminFin = '.'.$type;
    }

    public function setCSS($fixe, $nomFicher, $nomDossier, $nomDossierAutre = NULL)
    {
        $this->fixe = $fixe;
        $this->nomFicher = $nomFicher;
        $this->nomDossier = $nomDossier;
        $this->nomDossierAutre = ($nomDossierAutre !== NULL? $nomDossierAutre : '');
    }

    // public function getCSS()
    // {
    //     return $cheminDebut . $nomDossier . $cheminMilieux . $nomFicher . $cheminFin
    // }


}
?>