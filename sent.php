<?php 
	include_once('header.php'); 
	include_once('formHandler.php');
?>
<h1 class="pt-4">Your Answers</h1>


<?php if($answers["recipientName"] || $answers["recipientEmail"]): ?>
	<h2 class="pt-4">Participants</h2>
	<table class="table">
		<tbody>
			<tr>
				<td>
					Recipient: 
				</td>
				<td>
					<?php if($answers["recipientName"]): ?>
						<?php echo $answers["recipientName"]; ?>
					<?php endif; ?>
					<?php if($answers["recipientEmail"] && $answers["recipientName"]): ?>
						- 
					<?php endif; ?>
					<?php if($answers["recipientEmail"]): ?>
						<?php echo $answers["recipientEmail"]; ?>
					<?php endif; ?>	
				</td>
			</tr>
		</tbody>
	</table>	
<?php endif; ?>


<pre>
<?php var_dump($answers); ?>
</pre>
<?php include_once('footer.php'); ?>