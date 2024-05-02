// Fonction pour charger les données sauvegardées en mémoire
function loadSavedData() {
    var savedData = localStorage.getItem('jsonData');
    if (savedData) {
        return JSON.parse(savedData);
    }
    return [];
}

// Fonction pour mettre à jour l'aperçu du JSON
function updateJsonPreview() {
    var jsonContent = JSON.stringify(jsonData, null, 2);
    document.getElementById('jsonPreview').value = jsonContent;
}

// Fonction pour mettre à jour la signature avec les données JSON
function updateSignature() {
    // Clear existing signature content
    document.getElementById('signaturesContainer').innerHTML = '';

    // Loop through each data entry and create signature
    jsonData.forEach(function(data) {
        var signatureHTML = generateSignature(data);
        document.getElementById('signaturesContainer').insertAdjacentHTML('beforeend', signatureHTML);
    });
}

// Fonction pour sauvegarder les données en mémoire
function saveData() {
    localStorage.setItem('jsonData', JSON.stringify(jsonData));
}

// Fonction pour ajouter de nouvelles données
function addData() {
    var prenom = document.getElementById('prenom').value;
    var nom = document.getElementById('nom').value;
    var poste1 = document.getElementById('poste1').value;
    var poste2 = document.getElementById('poste2').value;
    var numero = document.getElementById('numero').value;
    var mail = document.getElementById('mail').value;

    var newData = {
        "prenom": prenom,
        "nom": nom,
        "poste1": poste1,
        "poste2": poste2,
        "numero": numero,
        "mail": mail
    };

    jsonData.push(newData);

    updateJsonPreview(); // Met à jour l'aperçu du JSON
    updateSignature(); // Met à jour la signature avec les nouvelles données ajoutées
    saveData(); // Sauvegarde les données en mémoire
}

// Initialisation des données JSON
var jsonData = loadSavedData();

// Appel des fonctions pour mettre à jour l'aperçu du JSON et la signature avec les données chargées
updateJsonPreview();
updateSignature();
