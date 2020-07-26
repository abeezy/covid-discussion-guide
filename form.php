<?php include_once('header.php'); ?>

	
		<h1 class="pt-4">Activities and Attitudes</h1>
		
		<p class="lead">
			This form will allow you to share information about your approach to safety 
			and serve as a starting point for your discussion.
		</p>

		<p>
			The information you enter into this form is not stored. It will be sent only to 
			the email address you specify and disappear from the server forever. 
			None of the questions are required. Answer what you want and discuss it with your 
			friend or family member.
		</p>

		<form action="sent.php" method="POST">
			
			<h2 class="py-4">Participants</h2>
			
			<div class="form-group row">
				<label for="RecipientName" class="col-sm-2 col-form-label">Recipient Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="RecipientName" id="RecipientName">
					<small id="RecipientEmailHelpBlock" class="form-text text-muted">
						Who you want us to share this information with.
					</small>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="RecipientEmail" class="col-sm-2 col-form-label">Their Email Address:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="RecipientEmail" id="RecipientEmail">
					<small id="RecipientEmailHelpBlock" class="form-text text-muted">
						The email address you'd like to send this information to. 
					</small>
				</div>
			</div>
			
						
			<div class="form-group row">
				<label for="FromName" class="col-sm-2 col-form-label">Your Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="FromName" id="FromName">
					<small id="RecipientEmailHelpBlock" class="form-text text-muted">
						So we can tell them who it's from.
					</small>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="FromEmail" class="col-sm-2 col-form-label">Your Email Address:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="FromEmail" id="FromEmail">
					<small id="RecipientEmailHelpBlock" class="form-text text-muted">
						In case they want to reply to you directly.
					</small>
				</div>
			</div>
			
			<hr class="my-5"/>
			
			<h2 class="pb-3">Information</h2>
			
			<div class="form-group">
				<label>Do you believe that COVID-19 is a hoax or the risks associated with it have been exaggerated?</label>
				<div class="form-check form-check-inline mx-3" id="hoax">
					<input class="form-check-input" type="radio" name="hoax" id="hoaxYes" value="Yes">
					<label class="form-check-label" for="hoaxYes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="hoax" id="hoaxNo" value="No">
				  <label class="form-check-label" for="hoaxNo">No</label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="infoSources">Where do you get your information about COVID?</label>
				<textarea class="form-control" name="infoSources" id="infoSources" rows="3"></textarea>
				<small id="infoSourcesHelpBlock" class="form-text text-muted">
					What news and information sources do you trust?
				</small>
			</div>
			
			<hr class="my-5"/>
			
			<h2 class="pb-3">Health-Related Questions</h2>
			
			<div class="form-group">
				<label>Have you or any members of your household been tested for the coronavirus?</label>			
				<div id="CovidTestAnswers" class="form-check form-check-inline ">
					<div class="form-check form-check-inline mx-3">
						<input class="form-check-input" type="radio" name="CovidTest" id="CovidTestYes" value="Yes" data-toggle="collapse" data-target="#yesToTest">
						<label class="form-check-label" for="CovidTestYes">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="CovidTest" id="CovidTestNo" value="No">
					  <label class="form-check-label" for="CovidTestNo">No</label>
					</div>
				</div>
			</div>	
			
			<!-- handle "yes" answer here -->
			<div id="yesToTest" class="card collapse pt-3 pl-3 pr-3 mb-3 ml-3">
			    <div class="form-group row">
					<label for="whoWasTested" class="col-sm-2 col-form-label">Who was tested?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="whoWasTested" id="whoWasTested">
					</div>
				</div>
				
    			<div class="form-group row">
					<label for="whenTested" class="col-sm-2 col-form-label">When was the test performed?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="whenTested" id="whenTested">
					</div>
				</div>
				
				<div class="form-group row">
					<label for="testResult" class="col-sm-2 col-form-label">What was the result?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="testResult" id="testResult">
					</div>
				</div>
			</div>

			
			<div class="form-group">
				<label>Have you or anyone in your household had any of the following symptoms in the last 21 days?</label>
					<div class="pl-3">
					<div class="form-check">
						<input class="form-check-input" name="soreThroatSymptom" type="checkbox" value="yes" id="soreThroatSymptom">
						<label class="form-check-label" name="symptoms" for="soreThroatSymptom">sore throat</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" name="coughSymptom" type="checkbox" value="yes" id="coughSymptom">
						<label class="form-check-label" for="coughSymptom">cough</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" name="chillsSymptom" type="checkbox" value="yes" id="chillsSymptom">
						<label class="form-check-label" for="chillsSymptom">chills</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" name="bodyAchesSymptom" type="checkbox" value="yes" id="bodyAchesSymptom">
						<label class="form-check-label" for="bodyAchesSymptom">body aches for unknown reasons </label>
					</div>
					<div class="form-check">
						<input class="form-check-input" name="shortnessBreathSymptom" type="checkbox" value="yes" id="shortnessBreathSymptom">
						<label class="form-check-label" for="shortnessBreathSymptom">shortness of breath for unknown reasons</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" name="lossSmellTasteSymptom" type="checkbox" value="yes" id="lossSmellTasteSymptom">
						<label class="form-check-label" for="lossSmellTasteSymptom">loss of smell or loss of taste</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" name="feverSymptom" type="checkbox" value="yes" id="feverSymptom">
						<label class="form-check-label" for="feverSymptom">fever over 100℉</label>
					</div>
				</div>
			</div>		
				
			
			<div class="form-group">
				<label class="">To the best of your knowledge, have you been in close proximity to any individual who tested positive for COVID-19?</label>	<br />	
					<div class="form-check mx-3 form-check-inline" id="closeProximity">
						<input class="form-check-input" type="radio" name="closeProximity" id="closeProximityYes" value="Yes">
						<label class="form-check-label" for="closeProximityYes">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="closeProximity" id="closeProximityNo" value="No">
					  <label class="form-check-label" for="closeProximityNo">No</label>
					</div>
			</div>
			
			<div class="form-group">
				<label>Do you have any reason to believe you or anyone in your household has been exposed to or acquired COVID-19?</label>			<br />
				<div class="form-check form-check-inline mx-3" id="exposedAcquired">
					<input class="form-check-input" type="radio" name="exposedAcquired" id="exposedAcquiredYes" value="Yes">
					<label class="form-check-label" for="exposedAcquiredYes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="exposedAcquired" id="exposedAcquiredNo" value="No">
				  <label class="form-check-label" for="exposedAcquiredNo">No</label>
				</div>
			</div>
			
			<div class="form-group">
				<label>Do you or anyone you live with/see regularly have conditions that mean that getting COVID poses an extraordinary risk to their life/health?</label>	<br />		
				<div class="form-check form-check-inline mx-3" id="healthCondition">
					<input class="form-check-input" type="radio" name="healthCondition" id="healthConditionYes" value="Yes">
					<label class="form-check-label" for="idValueYes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="healthCondition" id="healthConditionNo" value="No">
				  <label class="form-check-label" for="idValueNo">No</label>
				</div>
			</div>
			
			
			
			<hr class="my-5"/>
			
			<h2 class="pb-3">Your Activities</h2>	
			
			<div class="form-group">
				<label for="transportation">When you’ve gone out in the past two weeks, how did you get around? </label>
				<textarea class="form-control" name="transportation" id="transportation" rows="2"></textarea>
				<small id="transportationHelpBlock" class="form-text text-muted">
					e.g., walking, car, bike, Uber, public transit, etc
				</small>
			</div>
			
			<div class="form-group">
				<label>Have you gone shopping in the past two weeks? </label>
				<div id="ShoppingAnswers" class="form-check form-check-inline">
					<div class="form-check form-check-inline mx-3">
						<input class="form-check-input" type="radio" name="shopping" id="shoppingYes" value="Yes">
						<label class="form-check-label" for="shoppingYes">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="shopping" id="shoppingNo" value="No">
					  <label class="form-check-label" for="shoppingNo">No</label>
					</div>
				</div>
			</div>
			
			<!-- handle "yes" answer here -->
			<div id="yesToShopping"  class="card collapse pt-3 pl-3 pr-3 mb-3 ml-3">
				<div class="form-group">
					<label>What precautions do you take while shopping?</label>
					<div class="pl-3">
						<div class="form-check">
							<input class="form-check-input" name="MaskWhileShopping" id="MaskWhileShopping" type="checkbox" value="yes">
							<label class="form-check-label" for="MaskWhileShopping">Wearing a mask</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="SixFeetWhileShopping" id="SixFeetWhileShopping" type="checkbox" value="yes">
							<label class="form-check-label" for="SixFeetWhileShopping">Remaining 6 feet apart in lines</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="LessBusyWhileShopping" id="LessBusyWhileShopping" type="checkbox" value="yes">
							<label class="form-check-label" for="LessBusyWhileShopping">Going to the store at less busy times</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="DisinfectCartWhileShopping" id="DisinfectCartWhileShopping" type="checkbox" value="yes">
							<label class="form-check-label" for="DisinfectCartWhileShopping">Disinfecting the shopping cart</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="TouchlessPaymentWhileShopping" id="TouchlessPaymentWhileShopping" type="checkbox" value="yes">
							<label class="form-check-label" for="TouchlessPaymentWhileShopping">Using a touchless payment method</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="NoFaceTouchingWhileShopping" id="NoFaceTouchingWhileShopping" type="checkbox" value="yes">
							<label class="form-check-label" for="NoFaceTouchingWhileShopping">Avoiding touching your face</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="SanitizerWhileShopping" id="SanitizerWhileShopping" type="checkbox" value="yes">
							<label class="form-check-label" for="SanitizerWhileShopping">Using hand sanitizer after leaving the store</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="WashHandsWhileShopping" id="WashHandsWhileShopping" type="checkbox" value="yes">
							<label class="form-check-label" for="WashHandsWhileShopping">Washing your hands for 20 seconds upon arriving home</label>
						</div>
						
						<div class="form-group pt-1">
							<label for="ShoppingOther">Other precautions or notes:</label>
							<textarea class="form-control" name="ShoppingOther" id="ShoppingOther" rows="2"></textarea>
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="form-group">
				<label>Have you eaten food from any cafes, bars, or restaurants in the past two weeks?</label>
				<div id="RestaurantQuestions" class="form-check form-check-inline">
					<div class="form-check form-check-inline mx-3">
						<input class="form-check-input" type="radio" name="restaurants" id="restaurantsYes" value="Yes">
						<label class="form-check-label" for="restaurantsYes">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="restaurants" id="restaurantsNo" value="No">
					  <label class="form-check-label" for="restaurantsNo">No</label>
					</div>
				</div>
			</div>
			
			<!-- handle "yes" answer here -->
			<div id="yesRestaurants" class="card collapse pt-3 pl-3 pr-3 mb-3 ml-3">
				<div class="form-group">
					<label>Were staff wearing masks?</label>	
					<div class="form-check form-check-inline mx-3" id="RestaurantMasks">
						<input class="form-check-input" type="radio" name="RestaurantMasks" id="RestaurantMasksYes" value="Yes">
						<label class="form-check-label" for="RestaurantMasksYes">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="RestaurantMasks" id="RestaurantMasksNo" value="No">
					  <label class="form-check-label" for="RestaurantMasksNo">No</label>
					</div>
				</div>
				
				<div class="form-group" id="DineInTakeOut">
					<label>Did you dine in or get takeout?</label>	
					<div class="form-check form-check-inline mx-3">
						<input class="form-check-input" type="radio" name="DineInTakeOut" id="DineIn" value="DineIn">
						<label class="form-check-label" for="DineIn">dine in</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="DineInTakeOut" id="TakeOut" value="TakeOut">
					  <label class="form-check-label" for="TakeOut">take out</label>
					</div>
					<div class="mt-2">If you dined in...</div>
				</div>
				
				<!-- handle dine-in here -->
				<div id="DineInQuestions" class="pl-3 ml-3">

					<div class="form-group">
						<label>Were you seated indoors?</label>			
						<div class="form-check form-check-inline mx-3" id="RestaurantIndoors">
							<input class="form-check-input" type="radio" name="RestaurantIndoors" id="RestaurantIndoorsYes" value="Yes">
							<label class="form-check-label" for="RestaurantIndoorsYes">Yes</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="RestaurantIndoors" id="RestaurantIndoorsNo" value="No">
						  <label class="form-check-label" for="RestaurantIndoorsNo">No</label>
						</div>
					</div>
					
					<div class="form-group">
						<label>Were tables at least 6 feet apart?</label>		
						<div class="form-check form-check-inline mx-3" id="RestaurantTablesSpaced">
							<input class="form-check-input" type="radio" name="RestaurantTablesSpaced" id="RestaurantTablesSpacedYes" value="Yes">
							<label class="form-check-label" for="RestaurantTablesSpacedYes">Yes</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="RestaurantTablesSpaced" id="RestaurantTablesSpacedNo" value="No">
						  <label class="form-check-label" for="RestaurantTablesSpacedNo">No</label>
						</div>
					</div>
				</div>
			</div>

			
			<div class="form-group">
				<label>Have you gone to any bars in the past two weeks?</label>
				<div class="form-check form-check-inline mx-3" id="bars">
					<input class="form-check-input" type="radio" name="bars" id="barsYes" value="Yes">
					<label class="form-check-label" for="barsYes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="bars" id="barsNo" value="No">
				  <label class="form-check-label" for="barsNo">No</label>
				</div>
			</div>
			
			
			<div class="form-group">
				<label>Have you gone to anyone’s home in the past two weeks?</label>
				<div id="VisitQuestions" class="form-check form-check-inline">	
					<div class="form-check form-check-inline mx-3" id="goneToHome">
						<input class="form-check-input" type="radio" name="goneToHome" id="goneToHomeYes" value="Yes">
						<label class="form-check-label" for="goneToHomeYes">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="goneToHome" id="goneToHomeNo" value="No">
					  <label class="form-check-label" for="goneToHomeNo">No</label>
					</div>
				</div>
			</div>
			
			<!-- handle "yes" answer here -->
			<div id="yesVisited" class="card collapse pt-3 pl-3 pr-3 mb-3 ml-3">
				<div class="form-group ">
					<label for="WhoseHouse" class="form-label">Whose house did you go to?</label>
					<div>
						<input type="text" class="form-control" name="WhosHouse" id="WhosHouse">
					</div>
				</div>
				
				<div class="form-group ">
					<label for="HowLongVisited" class="form-label">How long were you there?</label>
					<div>
						<input type="text" class="form-control" name="HowLongVisited" id="HowLongVisited">
					</div>
				</div>
				
				<div class="form-group pt-1">
					<label for="VisitPrecautions">What precautions did you each take?</label>
					<textarea class="form-control" name="VisitPrecautions" id="VisitPrecautions" rows="2"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label>Have you had anyone in your home in the past two weeks?</label>	
				<div id="GuestQuestions" class="form-check form-check-inline">	
					<div class="form-check form-check-inline mx-3">
						<input class="form-check-input" type="radio" name="hadInHome" id="hadInHomeYes" value="Yes">
						<label class="form-check-label" for="hadInHomeYes">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="hadInHome" id="hadInHomeNo" value="No">
					  <label class="form-check-label" for="hadInHomeNo">No</label>
					</div>
				</div>
			</div>
			
			<!-- handle "yes" answer here -->
			<div id="yesGuest" class="card collapse pt-3 pl-3 pr-3 mb-3 ml-3">
				<div class="form-group ">
					<label for="WhoGuest" class="form-label">Who visited?</label>
					<div>
						<input type="text" class="form-control" name="WhoGuest" id="WhoGuest">
					</div>
				</div>
				
				<div class="form-group ">
					<label for="HowLongGuest" class="form-label">How long were they there?</label>
					<div>
						<input type="text" class="form-control" name="HowLongGuest" id="HowLongGuest">
					</div>
				</div>
				
				<div class="form-group pt-1">
					<label for="GuestPrecautions">What precautions did you each take?</label>
					<textarea class="form-control" name="GuestPrecautions" id="GuestPrecautions" rows="2"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label>Have you or anyone in your household visited or received treatment in a hospital, nursing home, long-term care, or other health care facility in the past 30 days?</label>	<br />		
				<div class="form-check form-check-inline mx-3" id="healthcare">
					<input class="form-check-input" type="radio" name="healthcare" id="healthcareYes" value="Yes">
					<label class="form-check-label" for="healthcareYes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="healthcare" id="healthcareNo" value="No">
				  <label class="form-check-label" for="healthcareNo">No</label>
				</div>
			</div>
			
			<div class="form-group">
				<label>Have you or anyone in your household taken a trip in the past 21 days?</label>
				<div id="TripQuestions" class="form-check form-check-inline">			
					<div class="form-check form-check-inline mx-3">
						<input class="form-check-input" type="radio" name="trip" id="tripYes" value="Yes">
						<label class="form-check-label" for="tripYes">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="trip" id="tripNo" value="No">
					  <label class="form-check-label" for="tripNo">No</label>
					</div>
				</div>
			</div>
			
			<!-- handle "yes" answer here -->
			<div id="yesTrip" class="card collapse pt-3 pl-3 pr-3 mb-3 ml-3">
				<div class="form-group row">
					<label for="TookTrip" class="col-sm-2 col-form-label">Where'd you go?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="TookTrip" id="TookTrip">
					</div>
				</div>
			</div>
			
			
			<div class="form-group">
				<label>Are you in a quarantine bubble with anyone?</label>	
				<div id="BubbleQuestions" class="form-check form-check-inline">		
					<div class="form-check form-check-inline mx-3">
						<input class="form-check-input" type="radio" name="bubble" id="bubbleYes" value="Yes">
						<label class="form-check-label" for="bubbleYes">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="bubble" id="bubbleNo" value="No">
					  <label class="form-check-label" for="bubbleNo">No</label>
					</div>
				</div>
			</div>
			
			<!-- handle "yes" answer here -->
			<div id="yesBubble" class="card collapse pt-3 pl-3 pr-3 mb-3 ml-3">
				<div class="form-group row">
					<label for="QuarantineBubble" class="col-sm-2 col-form-label">Who?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="QuarantineBubble" id="QuarantineBubble">
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label for="exercise">What does exercise/working out look like for you right now? </label>
				<textarea class="form-control" name="exercise" id="exercise" rows="2"></textarea>
				<small id="exerciseHelpBlock" class="form-text text-muted">
					e.g, going to the gym, exercising outdoors, exercising at home
				</small>
			</div>
			
			
			<hr class="my-5"/>
			
			<h2 class="pb-3">Your Comfort Levels</h2>	
			
			<?php include_once('comfortform.php'); ?>

			
			<div class="form-group">
				<label>Question</label>	<br />		
				<div class="form-check form-check-inline mx-3" id="idValue">
					<input class="form-check-input" type="radio" name="idValue" id="-Yes" value="Yes">
					<label class="form-check-label" for="-Yes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="idValue" id="-No" value="No">
				  <label class="form-check-label" for="-No">No</label>
				</div>
			</div>
			
				<div class="form-group row">
					<label for="QuestionID" class="col-sm-2 col-form-label">question</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="QuestionID" id="QuestionID">
					</div>
				</div>
				<div class="form-group row">
					<label for="QuestionID" class="col-sm-2 col-form-label">question</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="QuestionID" id="QuestionID">
					</div>
				</div>
				
			
			
			<div class="form-group">
				<label>Question</label>	<br />		
				<div class="form-check form-check-inline mx-3" id="idValue">
					<input class="form-check-input" type="radio" name="idValue" id="-Yes" value="Yes">
					<label class="form-check-label" for="-Yes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="idValue" id="-No" value="No">
				  <label class="form-check-label" for="-No">No</label>
				</div>
			</div>
			
			<!-- handle "yes" answer here -->
				

			<button type="submit" class="btn btn-primary">Submit</button>
		
		</form>
		
<?php include_once('footer.php'); ?>