let competitors = [
    ['End Game', '../images/competitor/competitor1.jpg' , 'est un robot de combat de la série télévisée BattleBots. Il est construit par Jack Barker et son fils Jack Barker Jr. Il est connu pour avoir remporté la saison 5.0 de BattleBots, et pour avoir été le premier robot à avoir remporté deux fois le titre de champion de BattleBots.'],
    ['Huge', '../images/competitor/competitor2.jpg', 'est un robot de combat de la série télévisée BattleBots. Il est construit par Jack Barker et son fils Jack Barker Jr. Il est connu pour avoir remporté la saison 5.0 de BattleBots, et pour avoir été le premier robot à avoir remporté deux fois le titre de champion de BattleBots.' ],
    ['Warhead', '../images/competitor/competitor3.jpg', 'Lorem Warhead' ],
    ['Witch Doctor', '../images/competitor/competitor4.jpg', 'Lorem Witch Doctor'] 
    ];
var currentRound = 0;
var playerSelection = null;



// Création de la liste des compétiteurs full
function competitorsListe(competitors){
    let currentCompetitors = [];
    for (let i = 0; i < competitors.length; i++) {
        currentCompetitors.push(competitors[i][currentRound]);
    }
    return currentCompetitors;
}
console.log(competitorsListe(competitors));


// Selection d'un compétiteur1 aléatoire
// function competitor1Random(){
//     var currentCompetitors = competitorsListe(competitors);
//     const competitor1 = Math.floor(Math.random() * currentCompetitors.length);
//     console.log(competitor1, currentCompetitors[competitor1]);
// }
// competitor1Random();

// Selection des opposants aléatoire
function opponent(){
    var currentCompetitors = competitorsListe(competitors);
    var competitor1 = Math.floor(Math.random() * currentCompetitors.length);
    var competitor2 = Math.floor(Math.random() * currentCompetitors.length);
    console.log(currentCompetitors[competitor1]);
    console.log(currentCompetitors[competitor2]);
    // if (competitor1 != competitor2){
    //     console.log(currentCompetitors[competitor1]);
    //     console.log(currentCompetitors[competitor2]);
    // } else{
    //     do {
    //         console.log(currentCompetitors[competitor1]);
    //         console.log(currentCompetitors[competitor2]);
    //     }while (competitor1 == competitor2){
    //         var competitor2 = Math.floor(Math.random() * currentCompetitors.length);
    //     }
    // }
}
opponent();







    // var machin= [{
    //     'name': 'End Game',
    //     'numero': 5,
    // }];
    // var truc= [{
    //     'name': 'Witch Doctor',
    //     'mabite': 'oui',
    //     'numero': 3,
    // }];

//     function resultatMatch(competitor1, competitor2){
        
//         let resultat= '';
//         if (competitor1['numero'] > competitor2['numero']){
//             resultat = "le 1 gagne";
//         // }else(competitor1['numero'] < competitor2['numero']){
//         //     resultat = "le 2 gagne";
//         // }
//         }else{
//             resultat = "le 2 gagne";
//         };
//         return resultat;
//     }


// console.log(resultatMatch(machin,truc));