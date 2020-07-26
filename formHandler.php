<?php 
// 	process the data that comes in without cluttering up the display page

$answers = array(
	"recipientName" => false,
	"recipientEmail" => false,
	"fromName" => false,
	"fromEmail" => false,
	"hoax" => false,
	"covidTest" => false,
	"whoWasTested" => false,
	"whenTested" => false,
	"testResult" => false,
	"soreThroatSymptom" => false,
	"coughSymptom" => false,
	"chillsSymptom" => false,
	"bodyAchesSymptom" => false,
	"shortnessBreathSymptom" => false,
	"lossSmellTasteSymptom" => false,
	"feverSymptom" => false,
	"closeProximity" => false,
	"exposedAcquired" => false,
	"healthCondition" => false,
	"transportation" => false,
	"shopping" => false,
	"maskWhileShopping" => false,
	"sixFeetWhileShopping" => false,
	"lessBusyWhileShopping" => false,
	"disinfectCartWhileShopping" => false,
	"touchlessPaymentWhileShopping" => false,
	"noFaceTouchingWhileShopping" => false,
	"sanitizerWhileShopping" => false,
	"washHandsWhileShopping" => false,
	"shoppingOther" => false,
	"restaurants" => false,
	"restaurantMasks" => false,
	"dineInTakeOut" => false,
	"restaurantIndoors" => false,
	"restaurantTablesSpaced" => false,
	"bars" => false,
	"goneToHome" => false,
	"whoseHouse" => false,
	"howLongVisited" => false,
	"visitPrecautions" => false,
	"hadInHome" => false,
	"whoGuest" => false,
	"howLongGuest" => false,
	"guestPrecautions" => false,
	"healthcare" => false,
	"trip" => false,
	"tookTrip" => false,
	"bubble" => false,
	"quarantineBubble" => false,
	"exercise" => false
);

// Participants

if(isset($_POST["recipientName"]) && !empty($_POST["recipientName"])) {
	$answers['recipientName'] = $_POST["recipientName"];
}
if(isset($_POST["recipientEmail"]) && !empty($_POST["recipientEmail"])) {
	$answers['recipientEmail'] = $_POST["recipientEmail"];
}
if(isset($_POST["fromName"]) && !empty($_POST["fromName"])) {
	$answers['fromName'] = $_POST["fromName"];
}
if(isset($_POST["fromEmail"]) && !empty($_POST["fromEmail"])) {
	$answers['fromEmail'] = $_POST["fromEmail"];
}

// Information


if(isset($_POST["hoax"]) && !empty($_POST["hoax"])) {
	$answers['hoaxSet'] = true;
	$answers['hoax'] = $_POST["hoax"];
}
if(isset($_POST["infoSources"]) && !empty($_POST["infoSources"])) {
	$answers['infoSources'] = $_POST["infoSources"];
}


// Health-Related Questions
if(isset($_POST["covidTest"]) && !empty($_POST["covidTest"])) {
	$answers['covidTest'] = $_POST["covidTest"];
}
if(isset($_POST["whoWasTested"]) && !empty($_POST["whoWasTested"])) {
	$answers['whoWasTested'] = $_POST["whoWasTested"];
}
if(isset($_POST["whenTested"]) && !empty($_POST["whenTested"])) {
	$answers['whenTested'] = $_POST["whenTested"];
}
if(isset($_POST["testResult"]) && !empty($_POST["testResult"])) {
	$answers['testResult'] = $_POST["testResult"];
}
if(isset($_POST["soreThroatSymptom"]) && !empty($_POST["soreThroatSymptom"])) {
	$answers['soreThroatSymptom'] = $_POST["soreThroatSymptom"];
}
if(isset($_POST["coughSymptom"]) && !empty($_POST["coughSymptom"])) {
	$answers['coughSymptom'] = $_POST["coughSymptom"];
}
if(isset($_POST["chillsSymptom"]) && !empty($_POST["chillsSymptom"])) {
	$answers['chillsSymptom'] = $_POST["chillsSymptom"];
}
if(isset($_POST["bodyAchesSymptom"]) && !empty($_POST["bodyAchesSymptom"])) {
	$answers['bodyAchesSymptom'] = $_POST["bodyAchesSymptom"];
}
if(isset($_POST["shortnessBreathSymptom"]) && !empty($_POST["shortnessBreathSymptom"])) {
	$answers['shortnessBreathSymptom'] = $_POST["shortnessBreathSymptom"];
}
if(isset($_POST["lossSmellTasteSymptom"]) && !empty($_POST["lossSmellTasteSymptom"])) {
	$answers['lossSmellTasteSymptom'] = $_POST["lossSmellTasteSymptom"];
}
if(isset($_POST["feverSymptom"]) && !empty($_POST["feverSymptom"])) {
	$answers['feverSymptom'] = $_POST["feverSymptom"];
}
if(isset($_POST["closeProximity"]) && !empty($_POST["closeProximity"])) {
	$answers['closeProximity'] = $_POST["closeProximity"];
}
if(isset($_POST["exposedAcquired"]) && !empty($_POST["exposedAcquired"])) {
	$answers['exposedAcquired'] = $_POST["exposedAcquired"];
}
if(isset($_POST["healthCondition"]) && !empty($_POST["healthCondition"])) {
	$answers['healthCondition'] = $_POST["healthCondition"];
}


// Your Activities
if(isset($_POST["transportation"]) && !empty($_POST["transportation"])) {
	$answers['transportation'] = $_POST["transportation"];
}
if(isset($_POST["shopping"]) && !empty($_POST["shopping"])) {
	$answers['shopping'] = $_POST["shopping"];
}
if(isset($_POST["maskWhileShopping"]) && !empty($_POST["maskWhileShopping"])) {
	$answers['maskWhileShopping'] = $_POST["maskWhileShopping"];
}
if(isset($_POST["sixFeetWhileShopping"]) && !empty($_POST["sixFeetWhileShopping"])) {
	$answers['sixFeetWhileShopping'] = $_POST["sixFeetWhileShopping"];
}
if(isset($_POST["lessBusyWhileShopping"]) && !empty($_POST["lessBusyWhileShopping"])) {
	$answers['lessBusyWhileShopping'] = $_POST["lessBusyWhileShopping"];
}
if(isset($_POST["disinfectCartWhileShopping"]) && !empty($_POST["disinfectCartWhileShopping"])) {
	$answers['disinfectCartWhileShopping'] = $_POST["disinfectCartWhileShopping"];
}
if(isset($_POST["touchlessPaymentWhileShopping"]) && !empty($_POST["touchlessPaymentWhileShopping"])) {
	$answers['touchlessPaymentWhileShopping'] = $_POST["touchlessPaymentWhileShopping"];
}
if(isset($_POST["noFaceTouchingWhileShopping"]) && !empty($_POST["noFaceTouchingWhileShopping"])) {
	$answers['noFaceTouchingWhileShopping'] = $_POST["noFaceTouchingWhileShopping"];
}
if(isset($_POST["sanitizerWhileShopping"]) && !empty($_POST["sanitizerWhileShopping"])) {
	$answers['sanitizerWhileShopping'] = $_POST["sanitizerWhileShopping"];
}
if(isset($_POST["washHandsWhileShopping"]) && !empty($_POST["washHandsWhileShopping"])) {
	$answers['washHandsWhileShopping'] = $_POST["washHandsWhileShopping"];
}
if(isset($_POST["shoppingOther"]) && !empty($_POST["shoppingOther"])) {
	$answers['shoppingOther'] = $_POST["shoppingOther"];
}
if(isset($_POST["restaurants"]) && !empty($_POST["restaurants"])) {
	$answers['restaurants'] = $_POST["restaurants"];
}
if(isset($_POST["restaurantMasks"]) && !empty($_POST["restaurantMasks"])) {
	$answers['restaurantMasks'] = $_POST["restaurantMasks"];
}
if(isset($_POST["dineInTakeOut"]) && !empty($_POST["dineInTakeOut"])) {
	$answers['dineInTakeOut'] = $_POST["dineInTakeOut"];
}
if(isset($_POST["restaurantIndoors"]) && !empty($_POST["restaurantIndoors"])) {
	$answers['restaurantIndoors'] = $_POST["restaurantIndoors"];
}
if(isset($_POST["restaurantTablesSpaced"]) && !empty($_POST["restaurantTablesSpaced"])) {
	$answers['restaurantTablesSpaced'] = $_POST["restaurantTablesSpaced"];
}
if(isset($_POST["bars"]) && !empty($_POST["bars"])) {
	$answers['bars'] = $_POST["bars"];
}
if(isset($_POST["goneToHome"]) && !empty($_POST["goneToHome"])) {
	$answers['goneToHome'] = $_POST["goneToHome"];
}
if(isset($_POST["whoseHouse"]) && !empty($_POST["whoseHouse"])) {
	$answers['whoseHouse'] = $_POST["whoseHouse"];
}
if(isset($_POST["howLongVisited"]) && !empty($_POST["howLongVisited"])) {
	$answers['howLongVisited'] = $_POST["howLongVisited"];
}
if(isset($_POST["visitPrecautions"]) && !empty($_POST["visitPrecautions"])) {
	$answers['visitPrecautions'] = $_POST["visitPrecautions"];
}
if(isset($_POST["hadInHome"]) && !empty($_POST["hadInHome"])) {
	$answers['hadInHome'] = $_POST["hadInHome"];
}
if(isset($_POST["whoGuest"]) && !empty($_POST["whoGuest"])) {
	$answers['whoGuest'] = $_POST["whoGuest"];
}
if(isset($_POST["howLongGuest"]) && !empty($_POST["howLongGuest"])) {
	$answers['howLongGuest'] = $_POST["howLongGuest"];
}
if(isset($_POST["guestPrecautions"]) && !empty($_POST["guestPrecautions"])) {
	$answers['guestPrecautions'] = $_POST["guestPrecautions"];
}
if(isset($_POST["healthcare"]) && !empty($_POST["healthcare"])) {
	$answers['healthcare'] = $_POST["healthcare"];
}
if(isset($_POST["trip"]) && !empty($_POST["trip"])) {
	$answers['trip'] = $_POST["trip"];
}
if(isset($_POST["tookTrip"]) && !empty($_POST["tookTrip"])) {
	$answers['tookTrip'] = $_POST["tookTrip"];
}
if(isset($_POST["bubble"]) && !empty($_POST["bubble"])) {
	$answers['bubble'] = $_POST["bubble"];
}
if(isset($_POST["quarantineBubble"]) && !empty($_POST["quarantineBubble"])) {
	$answers['quarantineBubble'] = $_POST["quarantineBubble"];
}
if(isset($_POST["exercise"]) && !empty($_POST["exercise"])) {
	$answers['exercise'] = $_POST["exercise"];
}

// Your Comfort Levels


/*
if(isset($_POST["var"]) && !empty($_POST["var"])) {
	$answers['varSet'] = true;
	$answers['var'] = $_POST["var"];
}	
*/
?>