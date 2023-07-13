// Fonction d'attente du chargement du document
document.addEventListener("DOMContentLoaded", function() {
  // Vérifier si l'alerte a déjà été affichée en vérifiant le cookie
  var alertCookie = getCookie("alertShown");

  if (!alertCookie) {
    // Si le cookie n'existe pas, afficher l'alerte de bienvenue
    alert("Bienvenue sur le site Ishiki ! Ce site utilise des cookies pour améliorer votre expérience.");

    // Définir le cookie pour indiquer que l'alerte a été affichée
    setCookie("alertShown", true, 365); // Le cookie expire dans 365 jours
  }

  // Vérifier si les cookies sont activés
  if (navigator.cookieEnabled) {
    console.log("Les cookies sont activés.");
  } else {
    console.log("Veuillez activer les cookies pour profiter pleinement du site.");
  }
});

// Fonction pour récupérer la valeur d'un cookie
function getCookie(name) {
  var cookieName = name + "=";
  var cookieArray = document.cookie.split(";");

  // Parcourir tous les cookies pour trouver le cookie demandé
  for (var i = 0; i < cookieArray.length; i++) {
    var cookie = cookieArray[i].trim();
    if (cookie.indexOf(cookieName) === 0) {
      // Si le cookie est trouvé, retourner sa valeur
      return cookie.substring(cookieName.length, cookie.length);
    }
  }

  // Si le cookie n'est pas trouvé, retourner null
  return null;
}

// Fonction pour définir un cookie
function setCookie(name, value, days) {
  var expirationDate = new Date();
  expirationDate.setDate(expirationDate.getDate() + days);

  // Construire la valeur du cookie avec l'encodage approprié
  var cookieValue = encodeURIComponent(value) + "; expires=" + expirationDate.toUTCString();

  // Définir le cookie en l'ajoutant au document
  document.cookie = name + "=" + cookieValue;
}

