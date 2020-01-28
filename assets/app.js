"use strict";

$(document).ready(function() {
  // Select all cards with their class ".card"
  var cards = $(".card");

  // Define global variables
  var currentCard = null;
  var previousCard = null;

  // Set the event "click" on each card
  cards.on("click", setClickEvent);

  function setClickEvent() {
    if (!$(this).hasClass("show")) {
      // previousCard is assigned to the "previous currentCard"
      // When the user is clicking for the first time, currentCard equals null so previousCard is logically null
      previousCard = currentCard;

      // currentCard is the card we clicked on
      currentCard = $(this);

      // Show the card we clicked on
      currentCard.addClass("show");

      console.log("Previous card:");
      console.log(previousCard);
      console.log("Current card:");
      console.log(currentCard);

      if (previousCard != null) {
        // User clicked on a second card

        if (currentCard.data("value") != previousCard.data("value")) {
          // previousCard equals currentCard

          // Prevent user from clicking during the 3000ms timeout
          cards.unbind("click");

          setTimeout(function() {
            currentCard.removeClass("show");
            previousCard.removeClass("show");

            resetCards();

            // Allow user to click by re-binding the click event on our cards
            cards.on("click", setClickEvent);
          }, 3000);
        } else {
          resetCards();
        }
      }
    }
  }

  function resetCards() {
    currentCard = null;
    previousCard = null;
    console.log("Reset cards");
  }
});
