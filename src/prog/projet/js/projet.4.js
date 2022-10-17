$('#compteur.compteur.ecriture').append("compteur");

// $(".placement").append("<table class='placementCompteur'><tbody><tr> <td class='complete'></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr></tbody></table>");

// ---- Step

const max = 21;
for (let index = 1; index < max; index++) {
    if(index == 1)
    {
        $(".progess-steps-container").append( "<div class='step-number'>" + index + "</div>" );
    }
    else 
    {
        $(".progess-steps-container").append( '<div id="'+ index +' stepProgression" class="step-progression disanbled"></div>' + "<div class='step-number'>" + index + "</div>" );
    }
}

// ---- fin Step

$(".nbExtrait").append('X');

$(".nomExtrait").append("Titre de l\'extrait");

$(".nomExtrait, .actionAfficheGeneral, actionAfficher").addClass("displaynone");

$(".actionAfficher").append("<button class='bouton styled' type='button'></button>")

