<?php

function add_version($url, $throwException = true)
{
    if (!$url) {
        throw new Exception(sprintf('%s > url obligatoire', __FUNCTION__));
    }

    if (@file_exists($url)) {
        $url .= '?dm=' . @filemtime($url);
    } else if ($throwException) {
        throw new Exception(
            sprintf("%s > Fichier non trouvé pour l'URL %s", __FUNCTION__, $url) . ($_SESSION['ISADMIN'] ? ' << ' . $_SERVER['PHP_SELF'] : ''
            )
        );
    }

    return $url;
}

$title = "Forge Suivie";
$table = [
    'css' => [
        'rel' => 'stylesheet',
        'listSRC' => [
            './general/css/root.css'
            ,'./menu/css/menu.css'
        ],
    ],
    'js' => [
        'type' => 'text/javascript',
        'listSCRTop' => [
            // './'
        ],
        'listSCRBottom' => [
            './menu/js/menu.mobile.js'
        ],
    ],
];

$nav = [
    'home' => [ 
        'titre' => 'Accueil',
        'src' => './'
    ],
    'listProjet' => [ 
        'titre' => 'Liste',
        'src' => './'
    ],
    'projetFini' => [ 
        'titre' => 'Fini',
        'src' => './'
        ]
];

require_once('./general/structure/top.vue.php');
require_once('./menu/structure/menu.vue.php');
require_once('./home/structure/home.vue.php');
require_once('./general/structure/bottom.vue.php');