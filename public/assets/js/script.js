// Fonction d'attente du chargement du document
document.addEventListener("DOMContentLoaded", function() {
    // Votre code JavaScript ici
  
    // Exemple : Ajouter une classe CSS lors d'un clic sur un élément
    var element = document.getElementById("monElement");
    element.addEventListener("click", function() {
      element.classList.add("maClasse");
    });
  
    // Exemple : Envoyer une requête AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://exemple.com/api/data", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);
        // Traiter la réponse ici
      }
    };
    xhr.send();
  });

  // Fonction d'attente du chargement du document
document.addEventListener("DOMContentLoaded", function() {
    // Afficher une alerte de bienvenue
    alert("Bienvenue sur le site Ishiki ! Ce site utilise des cookies pour améliorer votre expérience.");
  
    // Vérifier si les cookies sont acceptés
    if (navigator.cookieEnabled) {
      console.log("Les cookies sont activés.");
    } else {
      console.log("Veuillez activer les cookies pour profiter pleinement du site.");
    }
  });

  // Fonction d'attente du chargement du document
document.addEventListener("DOMContentLoaded", function() {
    // Récupérer l'élément de la pierre
    var pierre = document.getElementById("pierre");
  
    // Variables pour le mouvement de la pierre
    var positionY = 0; // Position initiale de la pierre
    var velocity = 2; // Vitesse de la pierre 
  
    // Fonction pour animer la chute de la pierre
    function animatePierre() {
      // Mettre à jour la position de la pierre
      positionY += velocity;
  
      // Appliquer la nouvelle position à la pierre
      pierre.style.transform = "translateY(" + positionY + "px)";
  
      // Vérifier si la pierre a atteint le bas de l'écran
      if (positionY < window.innerHeight) {
        // Demander une nouvelle animation
        requestAnimationFrame(animatePierre);
      }
    }
  
    // Lancer l'animation de la pierre
    animatePierre();
  });
  
  
  