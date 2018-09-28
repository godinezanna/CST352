<?php
session_start();

$_SESSION['state'] = 1;

//create deck
$_SESSION['deck'] = array(
"2c", "3c", "4c", "5c", "6c", "7c", "8c", "9c", "10c", "jc", "qc", "kc", "ac", 
"2d", "3d", "4d", "5d", "6d", "7d", "8d", "9d", "10d", "jd", "qd", "kd", "ad", 
"2h", "3h", "4h", "5h", "6h", "7h", "8h", "9h", "10h", "jh", "qh", "kh", "ah", 
"2s", "3s", "4s", "5s", "6s", "7s", "8s", "9s", "10s", "js", "qs", "ks", "as");

//shuffle deck
shuffle($_SESSION['deck']);	

//temp counter
$count = 0;

//deal player cards
for($i=0;$i<5;$i++)
{
	$_SESSION['player'][] = $_SESSION['deck'][$count];
	$_SESSION['dealer'][] = $_SESSION['deck'][($count + 1)];
	$count = $count + 2;;
}

//display dealers cards
for($i=0; $i<5;$i++)
{
	$temp = explode('-', $_SESSION['player'][$i]);
	$_SESSION['player_cards'][] = $temp[0];
	$_SESSION['player_suits'][] = $temp[1];
}

//deal deck out
for($i=0; $i<5;$i++)
{
	$temp = explode('-', $_SESSION['dealer'][$i]);
	$_SESSION['dealer_cards'][] = $temp[0];
	$_SESSION['dealer_suits'][] = $temp[1];
}

?>