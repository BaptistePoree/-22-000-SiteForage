/* Methode compteur */

compteur()


/**
 * teste si le comparebour et bien arriver a 0
 * @param {int} temps 
 * @returns {boolean}
 */
function isFinCompteur(temps) {
    return !(temps === 0)
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

function compteur(temp = 30, index=0) {
    let temps = temp
    let finCompteur = isFinCompteur(temps)

    if (finCompteur) {
        setInterval(() => {
            if (finCompteur) {
                finCompteur = isFinCompteur(temps)
                affCompteur(temps)
                temps = incrementCompteur(temps)
                switchImage(finCompteur)
            }else{
                getAffExtrait(index)
            }
        }, 1000)
    }
}

/* methode passer sur une autre page */

// $("a.cellLien.previous").on("click",getPagePrevious);
// $("a.cellLien.next").on("click",getPageNext);

function getAffExtrait(index=0){
    index = index+1;
    switch (index) {
        case 1:
            compteur(5,1);
            break;
        case 2:
            getPageNext();
            break;
    
        default:
            compteur(30)
            break;
    }
}

function getPageNext(){
    console.log("page suivante");
    $("a.cellLien.next").get(0).click();
    // newExtrait("Ghost Busters","NmpFm-TMVE8","0")
}

function getPagePrevious(){
    console.log("page avent");
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
    // else {
    //     $("div.Test").removeAttr("style");
    //     $("div.ImgTest").css("display","none");
    //     $("div.titre").css("display","none");
    // }
}

// function newExtrait(titre,lienYT,temp){
//     newTitreIframe(titre);
//     newLienYTIframe(lienYT,temp);
//     newTitreExtrait(titre);
//     newImageExtrait(lienYT);
//     switchImage(true);
//     compteur();
// }

// function newTitreIframe(titre) {
//     const newTitre = titre ;
//     $("iframe#player").removeAttr("title");
//     $("iframe#player").attr("title", newTitre);
// }

// function newLienYTIframe(lienYT,temp) {
//     const newUrl = "https://www.youtube.com/embed/"+lienYT+"?autoplay=1&disablekb=1&start="+temp+"&origin=https%3A%2F%2Fastucesweb.fr&enablejsapi=1&widgetid=3";
//     $("iframe#player").removeAttr("src");
//     $("iframe#player").attr("src",newUrl);
// }

// function newTitreExtrait(titre) {
//     const newTitre = titre ;
//     $("div.titre h3.nom").text( newTitre);
// }

function newImageExtrait(lienYT) {
    const newUrl = "https://i.ytimg.com/vi/"+lienYT+"/hqdefault.jpg" ;
    $("img.ImgSize").removeAttr("src");
    $("img.ImgSize").attr("src",newUrl);
}