/* Methode compteur */

//compteur(10,1)
compteur(30)

const Decompte=0;

/**
 * teste si le comparebour et bien arriver a 0
 * @param {int} temps 
 * @returns {boolean}
 */
function isFinCompteur(temps) {
    return !(temps === 0)
}

function isIndiceAffiche(tempTest, index){
    return ((15 > Number(tempTest)) && (1 < Number(tempTest))) && index === 0;
}

/**
 * incremante le comptarebour du chiffre incrementer (1) jusqu'a la limite (0)
 * @param {int} temps 
 * @param {int} increment 
 * @param {int} limite 
 * @returns {int} la valeur du comptarebour
 */
function incrementCompteur(temps, increment = 1, limite = 0) {
    return temps <= limite ? limite : temps - increment
}

function compteur(temp = 30, index=0, decompte=0) {
    let temps = temp
    let finCompteur = isFinCompteur(temps)

    if (finCompteur) {
        setInterval(() => {
            if (finCompteur) {
                switchIndice( isIndiceAffiche(temps, index) );
                finCompteur = isFinCompteur(temps)
                affCompteur(temps)
                temps = incrementCompteur(temps)
                switchImage(index < 1 && finCompteur)
            }else{
                getAffExtrait(index, decompte)
            }
        }, 1000)
    }
}

/* methode passer sur une autre page */

// $("a.cellLien.previous").on("click",getPagePrevious);
// $("a.cellLien.next").on("click",getPageNext);

function getAffExtrait(index=0, decompte){
    index = index+1;
    switch (index) {
        case 1:
            compteur(5,1);
            break;
        case 2:
            decompte = decompte+1
            getPageNext(decompte);
            break;
    
        default:
            compteur(30)
            break;
    }
}

function getPageNext(index){
    $("a.cellLien.next").get(0).click();
}

function getPagePrevious(){
    $("a.cellLien.previous").get(0).click();
}


/* Methode Modification Affichage Extrait */

/**
 * affiche les comptarebour dans la balise span
 * @param {int} temps 
 */
function affCompteur(temps) {
    temps = temps < 10 ? "0"+temps : temps
    $("span.timer").text(`${temps}`)
}

function switchImage(test){
    if (!test){
        $("div.Test").css("display","none");
        $("div.ImgTest").removeAttr("style");
        $("div.titre").removeAttr("style");
    } 
    else {
        $("div.Test").removeAttr("style");
        $("div.ImgTest").css("display","none");
        $("div.titre").css("display","none");
    }
}

function switchIndice(test){
    if (test){
         $("div.indice").removeAttr("style")
    } else {
        $("div.indice").css("display","none");
    }
}

function newExtrait(arrayBdd, index){
    // console.log(arrayBdd);
    // console.log(arrayBdd['nom']);
    newTitreIframe(arrayBdd['nom']);
    newLienYTIframe(arrayBdd['lienYT'],arrayBdd['dureeYT']);
    newTitreExtrait(arrayBdd['nom']);
    newImageExtrait(arrayBdd['lienYT']);
    switchImage(true);
    compteur(30,0,index);
}

function newTitreIframe(newTitre) {
    $("iframe#player").removeAttr("title");
    $("iframe#player").attr("title", newTitre);
}

function newLienYTIframe(lienYT,temp) {
    const newUrl = "https://www.youtube.com/embed/"+lienYT+"?autoplay=1&amp;disablekb=1&amp;start="+temp+"&amp;origin=https%3A%2F%2Fastucesweb.fr&amp;enablejsapi=1&amp;widgetid=3";
    $("iframe#player").removeAttr("src");
    $("iframe#player").attr("src",newUrl);
}

function newTitreExtrait(titre) {
    $("div.titre h3.nom").text(titre);
}

function newImageExtrait(lienYT) {
    const newUrl = "https://i.ytimg.com/vi/"+lienYT+"/hqdefault.jpg" ;
    $("img.ImgSize").removeAttr("src");
    $("img.ImgSize").attr("src",newUrl);
}