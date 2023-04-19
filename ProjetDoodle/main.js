// Récupération de tous les éléments de la classe "calendrier_case" 
var casesCalendrier = document.getElementsByClassName("calendrier_case");

// Boucle pour verif chaque case du calendrier
for (var i = 0; i < casesCalendrier.length; i++) {
    // Ajout d'un écouteur d'événement "click" sur chaque case
    casesCalendrier[i].addEventListener("click", function () {
        // Récupération de l'élément HTML cliqué
        var caseCliquee = event.target;
        // Si la case a déjà été cliquée et que son contenu est différent de sa valeur par défaut, on la remet à sa valeur par défaut
        if (caseCliquee.innerHTML !== "cliquez") {
            caseCliquee.innerHTML = "cliquez";
            //caseCliquee.style.backgroundColor = "rgb(255,255,255)";
            caseCliquee.classList.remove("vert");
        } else {
            // Sinon, on change le contenu HTML ainsi que la couleur de l'élément cliqué
            caseCliquee.innerHTML = 'créneau réservé par ' + pseudo;
            caseCliquee.classList.add("vert");
            //caseCliquee.style.backgroundColor = "rgb(60,179,113)";
        }
    });
}




function recupCreneau() {

    let url = new URL(window.location.href);

    let searchParams = new URLSearchParams(url.search);

    let cal = searchParams.get("cal");
    
    console.log(cal);

    var selected = RecupCases();

    for (var j = 0; j < selected.length; j++) {
        if (selected[j] <= 7) {
            console.log('creneau selectionné : matin');
        }
        else if (selected[j] > 7 && selected[j] <= 14) {
            console.log('creneau selectionné : midi');
        }
        else if (selected[j] > 14 && selected[j] <= 21) {
            console.log('creneau selectionné : apres midi');
        }
        else if (selected[j] > 21) {
            console.log('creneau selectionné : soir');
        }
    }

   /* letDonnePOST : hash,idUser,plage,et la semaine.  {"cal":hash,"idUser":"<?php echo $Sessionid?>","cases",selected} 
    fetch("putCalenar",donnePOST){

    }
    */

}

function RecupCases() {

    var casesCalendrier2 = document.getElementsByClassName("vert");
    // Boucle pour vérifier chaque case du calendrier
    var result = [];
    for (var i = 0; i < casesCalendrier2.length; i++) {
        // Ajout d'un écouteur d'événement "click" sur chaque case
        casesCalendrier2[i].id;
        result[i] = casesCalendrier2[i].id;
    };

    alert(result);
    return result;
}

/*
function generateHash() {
    //l'alerte fonctionne mais pas le location.replace
    const timestamp = new Date().getTime();
    const randomChars = Math.random().toString(36).substring(2, 5);
    const hash = `${timestamp}${randomChars}`;
    const baseUrl = window.location.href.split('/').slice(0, -1).join('/');
    const fileName = window.location.href.split('/').pop();
    const newUrl = `${baseUrl}/${fileName}/${hash}`;
    console.log(newUrl); // Affiche l'URL dans la console
    alert(newUrl);
    location.replace(newUrl); // Redirige vers la nouvelle URL en utilisant location.replace()
}
*/
