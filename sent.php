<?php 
	include_once('header.php'); 
	include_once('formHandler.php');
?>

<h1 class="pt-4">Your Answers</h1>
<pre>
<?php var_dump($answers); ?>
</pre>
FromName: <?php echo $_POST["FromName"]; ?><br />
FromEmail: <?php echo $_POST["FromEmail"]; ?><br />
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



<?php include_once('footer.php'); ?>