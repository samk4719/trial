window.addEventListener("load", start, false)

function start(){
	
	/*var gamesButton = ["backgammonButton","badmintonButton","baseballButton","basketballButton","bowlingButton","carromButton","catanButton","checkersButton","chessButton","cricketButton","dartButton","footballButton","frisbeeButton","hockeyButton","ludoButton","monopolyButton","pokerButton","rubikscubeButton","rummyButton","sequenceButton","snookerButton","soccerButton","squashButton","sudokuButton","tabletennisButton","tennisButton","teqballButton","unoButton","volleyballButton","wordleButton"];
	
	for(let i = 0; i < gamesButton.length; i++){
		document.getElementById(gamesButton[i]).addEventListener("click", descDisplay, false);
	}*/
	
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

function descDisplay(e){
	
	let id = e.target.getAttribute("id");
	
	switch(true){
		
		case id == "backgammonButton":
		
		document.getElementById("Desc").innerHTML = "<h3>Game name: Backgammon</h3><h4>Trivia:</h4>The Backgammon game is a very popular member of the ‘tables’ family and is played with much enthusiasm all over the world. Its roots can be dated back 5000 years to the civilization of Mesopotamia. Backgammon is a comprehensive game that involves both strategies as well as luck. In modern times the game was developed to incorporate the betting industry with the introduction of another die called the doubling cube. This die has numbers on its face and is used to raise the stakes.<br>The Backgammon game is played between two opponents by rolling two dice and moving the 15 checkers (or pieces) each along 24 points (portrayed as triangles) on the board. The objective of this game is to move all 15 checkers off the board as quickly as possible while scoring the highest points. This is also referred to as ‘bear off.’<br>Every role of dice gives a player multiple options to move around the board while anticipating the opponents move. The doubling cube can be used to raise the stakes before the dice roll is cast.<br>Like Poker, this game can be played multiple times with the winner scoring the sum total of the highest points. Today, multiple computer software has been developed after scientifically studying the various plays.<h4>Number of players and teams:</h4>Two players and Two Teams<h4>Game rules:</h4>The Backgammon board is divided into 4 quadrants with each player having a ‘home-board’ and an ‘outer-board’ that are adjacent to each other. The checkers are placed opposite to each other in numbering. 24 points of one player become 1 point for the other and so on. The checkers are moved counter-clockwise in a horseshoe shape from one player’s home-board to the opponent’s home board.<br>Board Placement: There are 12 long triangles referred to as points on each side of the board and are numbered from 1 to 24. Each player begins with 15 checkers in the Backgammon game that are placed as follows for each player:<br>1. 2 on 24 point<br>2. 3 on 8 point<br>3. 5 on 13 point<br>4. 5 on 6 point<br>Each player has his individual numbering system for points, and hence the checkers will not overlap each other.<br>First Roll: To commence the game the higher number on die is taken into consideration. Each player shall roll one of the dice. The player who scores higher on the die roll is allowed to take the first chance.<br>For instance, if the dice roll for both players was 4 and 1 respectively, then the player with 4 shall move his pieces first. The die must be rolled again if both players get the same number.<br>First Move: Both dice are rolled together to determine the first move. The player then moves either one or two checkers forward legally as per the numbers on the face of each die.<br>Doubles: Sometimes numbers shall be the same on each die. This is referred to as doubles, and a player gets 4 movement options for his checkers rather than 2. For instance, if a player rolled doubles of 3, then rather than moving his checkers 3 steps forward two times, the checkers can be moved 3 steps forward 4 times.<br>Relinquish Turn: The rules state that you do not have to play all turns. If you roll a 5 and 6, and you do not see an opening for 6, then you can safely play 5 and relinquish 6. The same applies to doubles as well.<br>Movement: The checkers can be moved to any open points that are denoted by any point with no checkers, all of your checkers or only one checker of the opponent. The objective is to move your checkers out of your opponent’s home-board as quickly as possible.<br>Double the stakes: In Backgammon game the score is not kept by adding winner’s points. The stake loser loses points as per the face value, double value or triple value. The stakes are kept track of by the doubling cube that is a marker with numbers on its face. You can double the stakes before you roll the dice for your turn. Your opponent will have to accept the offer or forfeit the game as per the previous stakes. Both players can double the stakes back and forth as many times as required.<br>Blot: A blot is referred to the point in which there is only one checker. It can be either yours or your opponent’s. Hitting blots are a good way to slow down your opponent. Whenever you hit your opponent’s blot, the check piece is kept on the bar (middle sleeve of the board). The opponent cannot move any checker till the blot checker is not brought back into your home-board.<br>Re-enter a Blot: A blot can only be re-entered into the opponent’s home board. Hence, the numbers 2 to 6 should feature on the dice. You can enter only those points that are not occupied by 2 or more checker pieces of your opponent. However, you can enter a point with your checkers or an opponent’s blot. If there are multiple checkers on the bar, then all must be moved to the opponent’s home-board before normal playing can resume.<br>Bear-off: You successfully win a round of Backgammon game when you bear off or remove all checker pieces from the board before your opponent. There are many moves that can be used while bearing off. However, a player can only start bearing off when all checkers of that player are in the home board. The numbers rolled on the dice can either be exact or more than the required number of spaces to move the checker pieces off the board.<br>An opponent can slow down your game by putting you in a vulnerable position. Your checkers can still be put in a blot and moved to the bar. In such an instance you might have to begin again from the 24th point.<br>Backgammon win: You win once you bear off all 15 checkers before your opponent. However, not all wins are equal. A regular loss is when your opponent is also trying to bear off the checkers. In this only the value on doubling cube is lost.<br>However, in case you bear off all your checkers before giving a chance to your opponent to bear off any, then twice the value on the doubling cube is lost. This is termed the Gammon.<br>It is a Backgammon loss when your opponent has his checkers in your home board or on the bar. The result is a loss that is triple the value on doubling-cube.<br><br><br><br>";
		break;
		case id == "badmintonButton":
		
		document.getElementById("Desc").innerHTML = "<h3>Game name: Badminton</h3><h4>Trivia:</h4>The name Badminton comes from Badminton House – home of the Duke of Beaufort in the English county of Gloucestershire. The ancestral estate is now better known for hunting and horse trials, it is credited as the formal birthplace of the racquet sport. But badminton’s roots date back 1000’s of years.<br>Sports played with racquets and a shuttlecock most likely developed in ancient Greece around two thousand years ago but are also mentioned in China and India. In England a children’s game known as “battledore and shuttlecock” in which players used a paddle – a battledore – to keep a small feathered cork – a shuttlecock – in the air as long as possible – was popular from medieval times.<br>In the seventeenth century, Battledore or Jeu de Volant was an upper class sport in many European countries. Versions of the game had been played for centuries by children in the Far East, and were adapted by British Army officers stationed in Pune (or Poona), India in the 1860s.<br>They added a net and the game became a competitive sport called “poona”, with formal rules in 1867. In 1873 the game made its way back to England and gained its current title after guests at a Badminton House lawn party held by the Duke of Beaufort introduced it to their friends as “the Badminton game”..<h4>Number of players and teams:</h4>Two(singles), four(Doubles) ,Two teams<h4>Game rules:</h4>1. A player must wait until his opponent is ready before serving. If the opponent attempts a return then he is ruled having been ready.<br>2. The feet of both players must remain in a stationary position until the serve is made. Your feet can not be touching the line at this time.<br>3. It is not a fault if you miss the shuttle while serving.<br>4. The shuttle cannot be caught and slung with the racket.<br>5. A player cannot hold his racket near the net to ward off a downward stroke by his opponent or to interfere with his racket.<br>Faults<br>6. The shuttle, at the instant of being hit is higher than the servers waist or the head of the racket is higher than the servers racket hand.<br>7. The shuttle does not land in the correct service court.<br>8. The server's feet are not in the service court or if the feet of the receiver are not in the court diagonally opposite the server.<br>9. The server steps forward as he/she serves.<br>10. Any player balking or feinting his opponent before serve or during serve.<br>11. A serve or shot that lands outside the court boundaries, passes under or through the net, touches any other obstructions or a players body or clothing. The boundary and service lines are considered in play.<br>12. The shuttle in play is struck before it crosses the net to the striker's side of the net. You may follow through over the net.<br>13. A player touching the net or its supports with his body or racket while the shuttle is in play.<br>14. Hitting the shuttle twice in succession by a player or team.<br><br><br><br>";
	break;
	case id == "baseballButton":
	
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "basketballButton":
	
	document.getElementById("Desc").innerHTML = "";
	break;
	case id == "bowlingButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "carromButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "catanButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "checkersButton":
	
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "chessButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "cricketButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "dartButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "footballButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "frisbeeButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "hockeyButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "ludoButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "monopolyButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "pokerButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "rubikscubeButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "rummyButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "sequenceButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "snookerButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "soccerButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "squashButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "sudokuButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "tabletennisButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "tennisButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "teqballButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "unoButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "volleyballButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	case id == "wordleButton":
	document.getElementById("Desc").innerHTML = "";
	break;
	
	}

}