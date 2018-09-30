<?php

include 'game.php';
include 'results.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Poker</title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
	<body>
		<h1>Poker</h1>
		<div id="outcome"></div>
			<form name="form" id="form" method="post" action="">
			<table>
				<?php
				echo "Dealer's Cards: ";
					if($_SESSION['bj_state'] == "game_over"){
						for($i=0; $i<5; $i++){
							echo "<img src='cards/e/". $_SESSION['dealer'] [$i] .".jpg' name='$dealer=$i+1' id='$dealer=$i+1' />";
						}
						}else{
						for($i=0; $i<5; $i++){
							echo "<img src='cards/e/". $_SESSION['dealer'] [$i] .".jpg' name='$dealer= $i+1' id='$dealer= $i+1'/>";
						}
				}
				
				echo "<br/> <br/>";
				
				echo "Player's Cards: ";
						for($i=0; $i<5; $i++){
							echo "<img src='cards/e/". $_SESSION['player'] [$i] .".jpg' name='$player=$i+1' id='$player=$i+1' />";
						}
				?>
			</table>
				<?php
				if(isset($_POST['new_game']) || $_SESSION['state'] == 1){
				}
				?>
			<table>
				<tr>
					<td colspan="2">
						<button name="swap" id="swapc">Swap Selected Cards</button>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button name="stay" id="stay">Stay</button>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td colspan="2">
						<button name="new_game" id="new_game">New Game</button>
					</td>
				</tr>
			</table>
	</body>
</html>