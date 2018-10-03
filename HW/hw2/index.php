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
				echo "Dealer Cards: ";
						for($i=0; $i<5; $i++){
							echo "<img src='cards/e/". $_SESSION['dealer'] [$i] .".jpg' name='$dealer_$i+1' id='$dealer_$i+1' />";
						}
						
				echo "<br>";
				
				echo "Player Cards: ";
						for($i=0; $i<5; $i++){
							echo "<img src='cards/e/". $_SESSION['player'] [$i] .".jpg' name='$player_$i+1' id='$player_$i+1' />";
							echo "<div class='box' id='div_$x+1' name='div_$x+1'><input type='checkbox' name='chk_$x+1' value=''/></div>";
						}
						
				echo "<br>";
				?>
			</table>
				<?php
				if(isset($_POST['new_game']) || $_SESSION['state'] == 1){
				}
				?>
			<table>
				<tr>
					<td colspan="2">
						<button name="swap" id="swap">Swap Selected Cards</button>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button name="stay" id="stay">Stay</button>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button name="new_game" id="new_game">New Game</button>
					</td>
				</tr>
			</table>
			</form>
	</body>
</html>