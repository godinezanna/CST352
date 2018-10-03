<?php
session_start();

if(isset($_POST['swap']) && $_SESSION['state'] == 1){
	checkWinner();
}
elseif(isset($_POST['new_game'])){
	session_destroy();
	session_start();
	include "game.php";

}
elseif(isset($_POST['stay'])){
	checkWinner();
}
else{
	include "game.php";
}

function checkWinner(){
	$_SESSION['state'] = 0;

	for($i=1; $i<6; $i++){
		if(isset($_POST['chk_' . $i])){
			$_SESSION['counter']++;
			$temp = explode('-', $_SESSION['deck'][9 + $_SESSION['counter']]);
			$_SESSION['player_cards'][$i-1] = $temp[0];
			$_SESSION['player_suits'][$i-1] = $temp[1];
		}
	}

	if(pokerRank($_SESSION['player_cards'], $_SESSION['player_suits']) > pokerRank($_SESSION['dealer_cards'], $_SESSION['dealer_suits'])){
		displayCards('1');
	}
	elseif(pokerRank($_SESSION['player_cards'], $_SESSION['player_suits']) == pokerRank($_SESSION['dealer_cards'], $_SESSION['dealer_suits'])){
		if(highestCard($_SESSION['player_cards']) > highestCard($_SESSION['dealer_cards'])){
			displayCards('1');
		}
		elseif(highestCard($_SESSION['player_cards']) == highestCard($_SESSION['dealer_cards'])){
			displayCards('3');
		}
		else{
			displayCards('2');
		}
	}
	else{
		displayCards('2');
	}
}
function displayCards($result){
	switch($result){
		case 1:
			echo "<h2>You have won</h2>";
			break;
		case 2:
			echo "<h2>You have lost</h2>";
			break;
		case 3:
			echo "<h2>A tie...What!!!</h2>";
			break;
	}
	
	include "game.php";
}

function highestCard($cards){
	sort($cards);
	return $cards[0];
}

function pokerRank($cards, $suits){
	for($i=0; $i<count($cards); $i++){
		switch ($cards[$i]){
			case "j":
				$cards[$i] = 11;
				break;
			case "q":
				$cards[$i] = 12;
				break;
			case "k":
				$cards[$i] = 13;
				break;
			case "a":
				$cards[$i] = 14;
				break;
		}
	}
	sort($cards);

	//checking for one pair
	if ($cards[0] == $cards[1] || $cards[1] == $cards[2] || $cards[2] == $cards[3] || $cards[3] == $cards[4])
		$pokerRank = 9;
		
	//checking for two pair
	if( ($cards[0] == $cards[1] && $cards[2] == $cards[3]) ||
		($cards[0] == $cards[1] && $cards[3] == $cards[4]) ||
		($cards[1] == $cards[2] && $cards[3] == $cards[4]))
		$pokerRank = 8;

	//checking for 3 of a kind.
	if( ($cards[0] == $cards[1] && $cards[1] == $cards[2]) ||
		($cards[1] == $cards[2] && $cards[2] == $cards[3]) ||
		($cards[2] == $cards[3] && $cards[3] == $cards[4]))
		$pokerRank = 7;

	//checking for straight
	if( ( $cards[0]+1 == $cards[1] && $cards[1]+1 == $cards[2] && $cards[2]+1 == $cards[3] && $cards[3]+1 == $cards[4]) ||
		($cards[4] == "14" && $cards[0] == "2" && $cards[1] == "3" && $cards[2] == "4" && $cards[3] == "5") )
		$pokerRank = 6;	

	//checking for a flush
	if($suits[0] == $suits[1] && $suits[0] == $suits[1] && $suits[0] == $suits[2] && $suits[0] == $suits[3] & $suits[0] == $suits[4]){
		//check for royal straight flush
		if($pokerRank == 6 && $cards[4] == 14){
			$pokerRank = 1;
		}
		//check for a straight flush
		elseif($pokerRank == 6){
			$pokerRank = 2;
		}
		else{
			$pokerRank = 5;
		}
	}
		
	//checking for a full house
	if( ($cards[0] == $cards[1] && $cards[0] == $cards[2] && $cards[3] == $cards[4]) ||
		($cards[0] == $cards[1] && $cards[2] == $cards[3] && $cards[3] == $cards[4]) )
		$pokerRank = 4;

	//checking for four of a kind
	if( ( $cards[0] == $cards[1] && $cards[1] == $cards[2] && $cards[2] = $cards[3]) ||
		($cards[1] == $cards[2] && $cards[2] == $cards[3] && $cards[3] == $cards[4]) )
		$pokerRank = 3;

	return $pokerRank;
}
?>