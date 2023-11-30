document.addEventListener('DOMContentLoaded', function() {
    var competitors = [
        { name: 'End Game', image: '../images/competitor/competitor1.jpg' , description: 'est un robot de combat de la série télévisée BattleBots. Il est construit par Jack Barker et son fils Jack Barker Jr. Il est connu pour avoir remporté la saison 5.0 de BattleBots, et pour avoir été le premier robot à avoir remporté deux fois le titre de champion de BattleBots.'},
        { name: 'Huge', image: '../images/competitor/competitor2.jpg', description: 'est un robot de combat de la série télévisée BattleBots. Il est construit par Jack Barker et son fils Jack Barker Jr. Il est connu pour avoir remporté la saison 5.0 de BattleBots, et pour avoir été le premier robot à avoir remporté deux fois le titre de champion de BattleBots.' },
        { name: 'Warhead', image: '../images/competitor/competitor3.jpg', description:'Warhead' },
        { name: 'Witch Doctor', image: '../images/competitor/competitor4.jpg', description:'Witch Doctor' }
    ];
    var currentRound = 0;
    var currentPlayerSelection = null;

    function displayCompetitors(round) {
        var gameArea = document.getElementById('gameArea');
        gameArea.innerHTML = `
        <div class="container-fluid p-5" id="gameArea">
        <div class="row">
            <div class="col">
                <img src="${competitors[round].image}" alt="${competitors[round].name}" class="img-fluid">
            </div>
            <div class="col">
                <p>
                    <h3>Round ${round + 1}</h3>
                    ${competitors[round].name} ${competitors[round].description} VS ${competitors[round + 1].name} ${competitors[round + 1].description}
                </p>
            </div>
            <div class="col">
                <img src="${competitors[round + 1].image}" alt="${competitors[round + 1].name}" class="img-fluid">
            </div>
        </div>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col">
                    <button .addEventListener("click", vote)>Je vote</button>
                </div>
            <div class="col">
        </div>
        <div class="col">
            <button onclick="vote(1)">Je vote</button>
        </div>
    </div>
        `;
    }
    
    function vote(selectedIndex) {
        currentPlayerSelection = selectedIndex;
        if (Math.random() < 0.5) {
            alert('Vous avez perdu!');
            return;
        }
        
        currentRound++;
        if (currentRound >= 3) {
            alert('Félicitations, vous avez gagné!');
            return;
        }

        displayCompetitors(currentRound);
    }

    displayCompetitors(currentRound);
});
