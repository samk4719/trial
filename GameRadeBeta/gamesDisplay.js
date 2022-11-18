window.addEventListener("load", start, false);


function start(){
	document.getElementById("gamesButton").addEventListener("click", gamesDisplay, false);

}

/*function gamesButtonEventListener(){
	
	let gamesButton = ["backgammonButton","badmintonButton","baseballButton","basketballButton","bowlingButton","carromButton","catanButton","checkersButton","chessButton","cricketButton","dartButton","footballButton","frisbeeButton","hockeyButton","ludoButton","monopolyButton","pokerButton","rubikscubeButton","rummyButton","sequenceButton","snookerButton","soccerButton","squashButton","sudokuButton","tabletennisButton","tennisButton","teqballButton","unoButton","volleyballButton","wordleButton"];
	
	for(let i = 0; i < gamesButton.length; i++){
		document.getElementById(gamesButton[i]).addEventListener("click", descDisplay, false);
	}
}*/

function gamesDisplay(){
	
	let games = ["Backgammon","Badminton","Baseball","Basketball","Bowling","Carrom","Catan","Checkers","Chess","Cricket","Dart","Football","Frisbee","Hockey","Ludo","Monopoly","Poker","RubiksCube","Rummy","Sequence","Snooker","Soccer","Squash","Sudoku","TableTennis","Tennis","Teqball","UNO","VolleyBall","Wordle"];
	
	for(let i = 0; i < games.length; i++){
		document.getElementById("gamesDisplayArea").innerHTML += "<div class=\"ggcontainer-img\"><img src=\"images/gameguru/"+games[i].toLowerCase()+".jpg\" id = "+games[i].toLowerCase()+"Button\" class = \"ggimage\"><div class = \"overlay\">"+games[i]+"</div></div>"
		document.getElementById("gamesButton").disabled = true;
	}	
	
document.getElementById("backgammonButton").addEventListener("click", descDisplay, false);
document.getElementById("badmintonButton").addEventListener("click", descDisplay, false);
document.getElementById("baseballButton").addEventListener("click", descDisplay, false);
document.getElementById("basketballButton").addEventListener("click", descDisplay, false);
document.getElementById("bowlingButton").addEventListener("click", descDisplay, false);
document.getElementById("carromButton").addEventListener("click", descDisplay, false);
document.getElementById("catanButton").addEventListener("click", descDisplay, false);
document.getElementById("checkersButton").addEventListener("click", descDisplay, false);
document.getElementById("chessButton").addEventListener("click", descDisplay, false);
document.getElementById("cricketButton").addEventListener("click", descDisplay, false);
document.getElementById("dartButton").addEventListener("click", descDisplay, false);
document.getElementById("footballButton").addEventListener("click", descDisplay, false);
document.getElementById("frisbeeButton").addEventListener("click", descDisplay, false);
document.getElementById("hockeyButton").addEventListener("click", descDisplay, false);
document.getElementById("ludoButton").addEventListener("click", descDisplay, false);
document.getElementById("monopolyButton").addEventListener("click", descDisplay, false);
document.getElementById("pokerButton").addEventListener("click", descDisplay, false);
document.getElementById("rubikscubeButton").addEventListener("click", descDisplay, false);
document.getElementById("rummyButton").addEventListener("click", descDisplay, false);
document.getElementById("sequenceButton").addEventListener("click", descDisplay, false);
document.getElementById("snookerButton").addEventListener("click", descDisplay, false);
document.getElementById("soccerButton").addEventListener("click", descDisplay, false);
document.getElementById("squashButton").addEventListener("click", descDisplay, false);
document.getElementById("sudokuButton").addEventListener("click", descDisplay, false);
document.getElementById("tabletennisButton").addEventListener("click", descDisplay, false);
document.getElementById("tennisButton").addEventListener("click", descDisplay, false);
document.getElementById("teqballButton").addEventListener("click", descDisplay, false);
document.getElementById("unoButton").addEventListener("click", descDisplay, false);
document.getElementById("volleyballButton").addEventListener("click", descDisplay, false);
document.getElementById("wordleButton").addEventListener("click", descDisplay, false);
}

function descDisplay(){
	document.getElementById("gg-text").innerHTML = "Sameeer Krishna";
}