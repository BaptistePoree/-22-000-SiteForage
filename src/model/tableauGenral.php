<?php

function generalTable()
{
    return [
        'css' => [
            'rel' => 'stylesheet',
            'listSRC' => [
                './prog/general/css/root.css',
                './prog/menu/css/menu.css',
                './prog/liste/css/liste.css'
            ],
        ],
        'js' => [
            'type' => 'text/javascript',
            'listSCRTop' => [],
            'listSCRBottom' => [
                './prog/menu/js/menu.mobile.js'
            ],
        ],
    ];
}

?>