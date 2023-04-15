# SiteForage

Site qui fait un listing des projet en idee/cour de création/fini

## Projet Atchitecture

```bash 
FORGE /
  ├── src /
  │    ├── bdd / (idee de Bdd)
  │    ├── controle /
  │    │    └── Controle.php
  │    ├── model /
  │    │    ├── bdd /
  │    │    │     ├── imageData /
  │    │    │     │     ├── BlindTest /
  │    │    │     │     │     ├── ImageData_BlindTest_Extrait.php
  │    │    │     │     │     ├── ImageData_BlindTest_TypeExtrait_Extrait.php
  │    │    │     │     │     └── ImageData_BlindTest_TypeExtrait.php
  │    │    │     │     ├── ListePrjet /
  │    │    │     │     │     └── ImageDate_ListeProjet_Projet.php
  │    │    │     │     ├── ImageDataListeProjet.php (csv)
  │    │    │     │     └── ImageDataProjet4BlindTest.php (csv)
  │    │    │     ├── mysql /
  │    │    │     │     ├── BlindTest /
  │    │    │     │     │     └── ExtraitSQL.php
  │    │    │     │     ├── ListePrjet /
  │    │    │     │     │     └── ListeProjetSQL.php
  │    │    │     │     ├── ListeProjet.php (csv)
  │    │    │     │     └── Projet4BlindTest.php (csv)
  │    │    │     └── InterfaceStorage.php
  │    │    ├── general.php
  │    │    ├── methodeGenral.php
  │    │    ├── NavGeneral.php
  │    │    ├── TableauCSS.php
  │    │    └── TableauGenral.php
  │    ├── prog /
  │    │    ├── general /
  │    │    │     ├── css /
  │    │    │     │     ├── divTail.css
  │    │    │     │     ├── general.css
  │    │    │     │     └── root.css
  │    │    │     ├── img / (bdd image)
  │    │    │     │
  │    │    │     ├── js /
  │    │    │     │    └── jquery-3.6.0.min.js
  │    │    │     │    
  │    │    │     └── structure /
  │    │    │          ├── bottom.vue.php
  │    │    │          ├── errorPage.css
  │    │    │          └── top.vue.php
  │    │    ├── home /
  │    │    │     ├── css /
  │    │    │     │     └── home.css
  │    │    │     └── structure /
  │    │    │           └── home.vue.php
  │    │    ├── liste /
  │    │    │     ├── css /
  │    │    │     │     └── liste.css
  │    │    │     └── structure /
  │    │    │           └── liste.vue.php
  │    │    ├── menu /
  │    │    │     ├── css /
  │    │    │     │    └── menu.css
  │    │    │     ├── js /
  │    │    │     │    └── menu.mobile.js
  │    │    │     └── structure /
  │    │    │           └── menu.vue.php
  │    │    └── projet /
  │    │          ├── projet_0000 /
  │    │          │     ├── css /
  │    │          │     ├── js /
  │    │          │     └── structure /
  │    │          ├── projet_0004 /
  │    │          │     ├── css /
  │    │          │     ├── js /
  │    │          │     └── structure /
  │    │          └── projet_identiter /
  │    │                ├── css /
  │    │                │     └── projet.css
  │    │                ├── js /
  │    │                └── structure /
  │    │                      └── projet.vue.php
  │    ├── vue /
  │    │    └──Vue.php
  │    ├── config.php
  │    ├── index.php
  │    └── Router.php
  │    
  ├── .gitignore
  ├── CHANGELOG.md
  └── README.md
```

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