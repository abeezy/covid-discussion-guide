<?php 
// 	process the data that comes in without cluttering up the display page

$answers = array();

// Participants

if(isset($_POST["RecipientName"]) && !empty($_POST["RecipientName"])) {
	$answers['recipientNameSet'] = true;
	$answers['recipientName'] = $_POST["RecipientName"];
}
if(isset($_POST["RecipientEmail"]) && !empty($_POST["RecipientEmail"])) {
	$answers['recipientEmailSet'] = true;
	$answers['recipientEmail'] = $_POST["RecipientEmail"];
}
if(isset($_POST["FromName"]) && !empty($_POST["FromName"])) {
	$answers['FromNameSet'] = true;
	$answers['fromName'] = $_POST["FromName"];
}
if(isset($_POST["FromEmail"]) && !empty($_POST["FromEmail"])) {
	$answers['FromEmailSet'] = true;
	$answers['fromEmail'] = $_POST["FromEmail"];
}

// Information


if(isset($_POST["var"]) && !empty($_POST["var"])) {
	$answers['varSet'] = true;
	$answers['varName'] = $_POST["var"];
}
if(isset($_POST["var"]) && !empty($_POST["var"])) {
	$answers['varSet'] = true;
	$answers['varName'] = $_POST["var"];
}
if(isset($_POST["var"]) && !empty($_POST["var"])) {
	$answers['varSet'] = true;
	$answers['varName'] = $_POST["var"];
}
if(isset($_POST["var"]) && !empty($_POST["var"])) {
	$answers['varSet'] = true;
	$answers['varName'] = $_POST["var"];
}
if(isset($_POST["var"]) && !empty($_POST["var"])) {
	$answers['varSet'] = true;
	$answers['varName'] = $_POST["var"];
}

// Health-Related Questions

// Your Activities

// Your Comfort Levels


/*

whoWasTested: <?php echo $_POST["whoWasTested"]; ?><br />
whenTested: <?php echo $_POST["whenTested"]; ?><br />
testResult: <?php echo $_POST["testResult"]; ?><br />
transportation: <?php echo $_POST["transportation"]; ?><br />
ShoppingOther: <?php echo $_POST["ShoppingOther"]; ?><br />
WhosHouse: <?php echo $_POST["WhosHouse"]; ?><br />
HowLongVisited: <?php echo $_POST["HowLongVisited"]; ?><br />
VisitPrecautions: <?php echo $_POST["VisitPrecautions"]; ?><br />
WhoGuest: <?php echo $_POST["WhoGuest"]; ?><br />
HowLongGuest: <?php echo $_POST["HowLongGuest"]; ?><br />
GuestPrecautions: <?php echo $_POST["GuestPrecautions"]; ?><br />
TookTrip: <?php echo $_POST["TookTrip"]; ?><br />
QuarantineBubble: <?php echo $_POST["QuarantineBubble"]; ?><br />
exercise: <?php echo $_POST["exercise"]; ?>
	
	
*/
?>