$( document ).ready(function() {
  // Handler for .ready() called.

/*
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});
*/

// toggle questions based on answers
function toggleExtraQuestions(event, yesDiv, questionInput) {
	//hasClass 'show' = is currently open
	let isVisible = yesDiv.hasClass('show');
	let currentAnswer = questionInput.val();
	
	if (currentAnswer == "Yes" && isVisible === false) {
		yesDiv.collapse('show');
	} 
	else if (currentAnswer == "No" && isVisible === true) {
		yesDiv.collapse('hide');
	}
	
};	

$('#CovidTestAnswers').click(function (e) {
	e.stopPropagation(); // don't let it fire twice
	toggleExtraQuestions(e, $('#yesToTest'), $('#CovidTestAnswers input:checked'));
});

$('#ShoppingAnswers').click(function (e) {
	e.stopPropagation(); // don't let it fire twice
	toggleExtraQuestions(e, $('#yesToShopping'), $('#ShoppingAnswers input:checked'));
});

$('#RestaurantQuestions').click(function (e) {
	e.stopPropagation(); // don't let it fire twice
	toggleExtraQuestions(e, $('#yesRestaurants'), $('#RestaurantQuestions input:checked'));
});

$('#VisitQuestions').click(function (e) {
	e.stopPropagation(); // don't let it fire twice
	toggleExtraQuestions(e, $('#yesVisited'), $('#VisitQuestions input:checked'));
});

$('#GuestQuestions').click(function (e) {
	e.stopPropagation(); // don't let it fire twice
	toggleExtraQuestions(e, $('#yesGuest'), $('#GuestQuestions input:checked'));
});

$('#TripQuestions').click(function (e) {
	e.stopPropagation(); // don't let it fire twice
	toggleExtraQuestions(e, $('#yesTrip'), $('#TripQuestions input:checked'));
});

$('#BubbleQuestions').click(function (e) {
	e.stopPropagation(); // don't let it fire twice
	toggleExtraQuestions(e, $('#yesBubble'), $('#BubbleQuestions input:checked'));
});

$('#RestaurantQuestions').click(function (e) {
	e.stopPropagation(); // don't let it fire twice
	toggleExtraQuestions(e, $('#yesRestaurant'), $('#RestaurantQuestions input:checked'));
});


/*

function toggleExtraQuestions(event, yesDiv, questionInput) {
	//hasClass 'show' = is currently open
	let isVisible = yesDiv.hasClass('show');
	let currentAnswer = questionInput.val();
	
	if (currentAnswer == "Yes" && isVisible === false) {
		yesDiv.collapse('show');
	} 
	else if (currentAnswer == "No" && isVisible === true) {
		yesDiv.collapse('hide');
	}
	
};
*/



});