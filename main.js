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

function RecupCases(){

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
    // Sélectionnez le bouton "Créer calendrier"
    const createButton = document.getElementById('sub');
function creerCal() {
    // Attachez un gestionnaire d'événements de clic au bouton
    createButton.addEventListener('click', () => {
    // Générer un hash unique à partir du timestamp et d'une chaîne aléatoire
    const hash = Math.floor(Date.now() / 1000).toString(16) + Math.random().toString(16).substr(2, 8);
    // Créer l'URL unique avec le hash
    const url = `192.168.65.112/calendrier/#${hash}`;
    // Créer le calendrier avec la bibliothèque de calendrier
    const calendar = new FullCalendar.Calendar(calendarEl, {
        // Configurer les paramètres du calendrier, en incluant le hash unique
        // ...
    });
    // Afficher le calendrier sur la page
    calendar.render();
    });
}
*/

