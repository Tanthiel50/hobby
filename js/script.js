const competitors = [
    ['End Game', '../images/competitor/competitor1.jpg' , ' End Game est un robot de combat de la série télévisée BattleBots. Il est construit par Jack Barker et son fils Jack Barker Jr. Il est connu pour avoir remporté la saison 5.0 de BattleBots, et pour avoir été le premier robot à avoir remporté deux fois le titre de champion de BattleBots.'],
    ['Huge', '../images/competitor/competitor2.jpg', ' Huge est un robot de combat de la série télévisée BattleBots. Il est construit par Jack Barker et son fils Jack Barker Jr. Il est connu pour avoir remporté la saison 5.0 de BattleBots, et pour avoir été le premier robot à avoir remporté deux fois le titre de champion de BattleBots.' ],
    ['Warhead', '../images/competitor/competitor3.jpg', 'Le "Warhead" est un robot de combat au design futuriste, souvent caractérisé par une tête de dinosaure métallique avec une mâchoire articulée et des armes de feu intégrées. Sa carrosserie est profilée et robuste, conçue pour la résistance et l\'agilité.' ],
    ['Witch Doctor', '../images/competitor/competitor4.jpg', 'Le "Witch Doctor" est un robot de combat au design inspiré du vaudou, avec une carrosserie noire et verte ornée de motifs tribaux. Il est équipé d\'un disque rotatif tranchant comme arme principale.'] 
    ];

    document.getElementById('battle').addEventListener('click', displayBattle);


// Selection des opposants aléatoire
function opponent(listeComp){
    const index1 = Math.floor(Math.random() * listeComp.length);
    let index2 = Math.floor(Math.random() * listeComp.length);
    while (index1 === index2) {
        index2 = Math.floor(Math.random() * listeComp.length);
    }
    return [listeComp[index1], listeComp[index2]];
}

function Battle(concurrents) {
    const indexGagnant = Math.floor(Math.random() * concurrents.length);
    return concurrents[indexGagnant];
}

let currentOpponents;

// Fonction pour initialiser les participants
function initializeParticipants() {
    currentOpponents = opponent(competitors);
    
    // Mise à jour des images des concurrents
    document.getElementById('opponent0').src = currentOpponents[0][1];
    document.getElementById('opponent1').src = currentOpponents[1][1];
    document.getElementById('description0').textContent = currentOpponents[0][2];
    document.getElementById('description1').textContent = currentOpponents[1][2];

    console.log(currentOpponents);
}

// Fonction de combat
function displayBattle() {
    let gagnant = Battle(currentOpponents);

    // Mise à jour du message du gagnant
    document.getElementById('gagnantMessage').textContent = "Le gagnant est : " + gagnant[0];
}

// Appel de la fonction au chargement de la page
window.onload = initializeParticipants;


function displayBattle() {
    if (!currentOpponents) {
        console.error('Les concurrents ne sont pas définis.');
        return;
    }
    let gagnant = Battle(currentOpponents);

    // Mise à jour du message du gagnant et boutton recommencer
    document.getElementById('gagnantMessage').textContent = "Le gagnant est : " + gagnant[0];
    document.getElementById('battle').style.display = 'none';
}






