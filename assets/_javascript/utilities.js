function log(val) {
    "use strict";
    window.console.log(val);
}

/*recupère un objet HTML correspondant à un sélecteur CSS*/
function select(sCSS) {
    "use strict";
    return document.querySelector(sCSS);
}

/*recupère une collection d'objets HTML correspondant à un sélecteur CSS*/
function selectAll(sCSS) {
    "use strict";
    return document.querySelectorAll(sCSS);
}

/*recupère un objet de type element HTML correspondant à l'identifiant passé en argument */
function byId(id) {
    "use strict";
    return document.getElementById(id);
}

