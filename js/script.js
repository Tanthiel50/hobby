const competitors = [
    ['End Game', '../images/competitor/competitor1.jpg' , 'est un robot de combat de la série télévisée BattleBots. Il est construit par Jack Barker et son fils Jack Barker Jr. Il est connu pour avoir remporté la saison 5.0 de BattleBots, et pour avoir été le premier robot à avoir remporté deux fois le titre de champion de BattleBots.'],
    ['Huge', '../images/competitor/competitor2.jpg', 'est un robot de combat de la série télévisée BattleBots. Il est construit par Jack Barker et son fils Jack Barker Jr. Il est connu pour avoir remporté la saison 5.0 de BattleBots, et pour avoir été le premier robot à avoir remporté deux fois le titre de champion de BattleBots.' ],
    ['Warhead', '../images/competitor/competitor3.jpg', 'Lorem Warhead' ],
    ['Witch Doctor', '../images/competitor/competitor4.jpg', 'Lorem Witch Doctor'] 
    ];
var currentRound = 0;
var playerSelection = null;



// Création de la liste des compétiteurs full
function competitorsListe(listarevoir){
    let actuelcomp = [];
    for (let i = 0; i < listarevoir.length; i++) {
        actuelcomp.push(listarevoir[i][currentRound]);
    }
    return actuelcomp;
};
// Selection des opposants aléatoire
function opponent(listeComp){
    const concurrent =[];
    const competitor1 = Math.floor(Math.random() * listeComp.length);
    let competitor2 = Math.floor(Math.random() * listeComp.length);
    while (competitor1 === competitor2) {
        competitor2 = Math.floor(Math.random() * listeComp.length);
        }
        concurrent.push(listeComp[competitor1],listeComp[competitor2]);


        console.log(concurrent);
        return concurrent;
    };

function Battle(machintrucraslecul){
    const gagnant = Math.floor(Math.random() * machintrucraslecul.length)
    console.log(machintrucraslecul[gagnant]);

}

console.log(competitorsListe(competitors));
let liste2 = competitorsListe(competitors);
opponent(liste2);
let liste3 = opponent(liste2);
Battle(liste3);
