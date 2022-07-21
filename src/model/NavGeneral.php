<?php

class NavGeneral
{
    protected $nav;

    public function __construct()
    {
        $this->nav = [
            'home' => [
                'titre' => 'Accueil',
                'src' => './'
            ],
            'listProjet' => [
                'titre' => 'Liste',
                'src' => '?action=Liste'
            ],
            'projetFini' => [
                'titre' => 'Fini',
                'src' => './'
            ]
        ];
    }
    public function getNav()
    { return $this->nav; }

    private function isNavKey($key)
    { return key_exists($key, $this->nav); }

    public function getNavKey($key)
    { return ($this->isNavKey($key))?$this->nav[$key]: ''; }
}


?>