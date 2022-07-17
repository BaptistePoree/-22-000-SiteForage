# SiteForage

Site qui fait un listing des projet en idee/cour de création/fini

## Projet Atchitecture

<pre><code>
FORGE /
  ├── src /
  │    ├── general /
  │    │     ├── css /
  │    │     │    └── root.css
  │    │     │    
  │    │     ├── img /
  │    │     │
  │    │     ├── js /
  │    │     │    └── jquery-3.6.0.min.js
  │    │     │    
  │    │     └── structure /
  │    │          ├── bottom.vue.php
  │    │          └── top.vue.php
  │    │
  │    ├── menu /
  │    │     ├── css /
  │    │     │    └── menu.css
  │    │     │    
  │    │     ├── js /
  │    │     │    └── menu.mobile.js
  │    │     │    
  │    │     └── structure /
  │    │          └── menu.vue.php
  │    │
  │    ├── config.php
  │    │
  │    ├── index.php
  │    │
  │    └── Router.php
  │    
  ├── .gitignore
  ├── CHANGELOG.md
  └── README.md
</code></pre>

### Legende du CHANGELOG

    [SITE][MODIFICATION] (#NumProjet)(Element) détail

<pre><code>
CHANGELOG -
├── SITE -
│    └── Forge
├── MODIFICATION -
│    ├── NEW : Nouveau element dans le code
│    ├── BUG : Gestion de bug sur l'élement viser
│    ├── DEV : Dévelopement sur un élement déja crée 
│    └── NOTE / OPTIMISATION : Note d'opservation dans le code
├── #NumProjet : on le mes s'il est possible
├── Element : Element où l'on a travail dessus (le nom de l'élement)
└── détail : ce que l'on a fait description bréfe et simple
</code></pre>